<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Colegiado;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getInfo(Request $request){

        $filter = $request->filter;

        $users = DB::table('colegiados')
                    ->where('dni', $filter)
                    ->orWhere('codigoCIP', $filter)
                    ->first();

        $mensaje = new \stdClass();
        $mensaje->alert = "void";
        
        if($users == null){
            return response()->json($mensaje);
        }
        else{
            $users->alert = "ok";
            return response()->json($users);
        }
        
    }

    public function entregar(Request $request){
        $id = $request->id;

        $user = Auth::user();
        
        $result = DB::table('colegiados')
            ->where('id', $id)
            ->update(['estado' => 1, 'usuario' => $user->name]);


        $mensaje = new \stdClass();
        $mensaje->alert = "OK";
        return response()->json($mensaje);

    }
    
    public function listar(){
        $result = DB::table('colegiados')
            ->orderBy('fecha','desc')
            ->limit(5)
            ->get();

        return response()->json($result);
    }
    
    public function reporte(){
        $result = DB::table('colegiados')
            ->select(DB::raw('count(*) as cantidad'), DB::raw('DATE(fecha) as fecha'), 'usuario')
            ->where('estado',1)
            ->groupBy(DB::raw('DATE(fecha)' ), 'usuario')
            ->get();

            return view('reporte', ['items' => $result]);
    }
}

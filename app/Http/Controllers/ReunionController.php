<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reunion;

class ReunionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reuniones = Reunion::paginate();
        return view('reuniones.index', compact('reuniones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reuniones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $reunion = Reunion::create($request->all());

        return redirect()->route('reuniones.edit', $reunion->id)
            ->with('info', 'OK');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $reunion = Reunion::find($id);

        return view('reuniones.show', compact('reunion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $reunion = Reunion::find($id);

        return view('reuniones.edit', compact('reunion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $reunion = Reunion::whereId($id)->update($request->except(['_method', '_token']));
        $reunion = Reunion::find($id);

        return redirect()->route('reuniones.edit', $reunion->id)
            ->with('info', 'OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $reunion = Reunion::find($id)->delete();

        return back()->with('info', 'Reunion');
    }
}

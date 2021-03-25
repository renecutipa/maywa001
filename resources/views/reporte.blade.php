@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">REPORTE DE CANASTAS</div>

                <div class="panel-body">
                    

                    <table class="table">
                        <tr>
                            
                            <th>FECHA</th>
                            <th>USUARIO</th>
                            <th>CANTIDAD</th>
                        </tr>
                        @forelse($items as $item)
                            <tr>
                                <td>{{$item->fecha}}</td>
                                <td>{{$item->usuario}}</td>
                                <td>{{$item->cantidad}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td>No rows</td>
                            </tr>
                        @endforelse


                    </table>

                </div>
            </div>
        </div>
        
    </div>
</div>


@endsection


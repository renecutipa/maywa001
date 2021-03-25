@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">MÓDULO DE ASISTENCIA</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                         <form id="buscar" action="javascript:buscar();">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group col-md-8">
                                <input class="form-control input-lg" id="codigo" type="number" name="codigo" placeholder="DNI / Reg. CIP">
                            </div>
                            <div class="form-group col-md-4">
                                <button class="form-control input-lg btn btn-primary" type="submit">Buscar</button>
                            </div>
                        </form>

                        
                    </div>
                    <hr width="100%" />
                    <div id="res">
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading">HISTORIAL</div>

                <div class="panel-body" id="lista">
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

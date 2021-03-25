@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h5 class="m-0 font-weight-bold">
                    <span>Reuniones</span>            
                    <a href="{{ route('reunion.create') }}" class="btn btn-sm btn-success pull-right">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Nueva Reunion</span>
                    </a>
                </h5>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th width="50%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reuniones as $reunion)
                            <tr>
                                <td>{{ $reunion->nombre }}</td>
                                @php                                    
                                    $date = date_create($reunion->fecha);
                                @endphp
                                <td>{{ date_format($date, "d/m/Y")}}</td>
                                <td>{{ $reunion->hora }}</td>
                                <td class="pull-right">
                                    <a class="btn btn-primary">Asistencia</a>
                                    <a class="btn btn-success">Ver asistencia</a>
                                    <a class="btn btn-warning">Cerrar asistencia</a>
                                    <a class="btn btn-info" href="{{ route('reunion.edit', $reunion->id) }}">Editar</a>
                                    <a class="btn btn-danger">Cancelar reunión</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $reuniones->render() }}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
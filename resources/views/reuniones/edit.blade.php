@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h5 class="m-0 font-weight-bold">
                    <span>Editar Reunion</span>

                    <a href="{{ route('reunion.create') }}" class="btn btn-sm btn-primary pull-right ml-1">
                    <span class="icon text-white-50">
                      <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">Nueva Reunión</span>
                    </a>
                    <a href="{{ route('reunion.index') }}" class="btn btn-sm btn-success pull-right ml-1">
                        <span class="icon text-white-50">
                            <i class="fa fa-list"></i>
                        </span>
                        <span class="text">Lista de Reuniones</span>
                    </a> 
                </h5>
            </div>
            <div class="panel-body">
                {!! Form::model($reunion, ['route' => ['reunion.update', $reunion->id],'method' => 'PUT']) !!}

                    @include('reuniones.partials.form')
                        
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h5 class="m-0 font-weight-bold">
                    <span>Nueva Reunion</span>
                    <a href="{{ route('reunion.index') }}" class="btn btn-sm btn-success pull-right">
                        <span class="icon text-white-50">
                            <i class="fa fa-list"></i>
                        </span>
                        <span class="text">Lista de Reuniones</span>
                    </a> 
                </h5>
            </div>
            <div class="panel-body">
                {{ Form::open(['route' => 'reunion.store']) }}

                    @include('reuniones.partials.form')
                                
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@endsection
@extends('adminlte::page')

@section('title','Guardar Rol')

@section('content_header')
    <h1>Guardar Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(["route"=>"admin.rols.store"]) !!}
                
                @include('admin.rols.partials.form')

                {!! Form::submit('Registrar Rol', ["class"=>"btn btn-primary"]) !!}
                <a href="{{ route("admin.rols.index") }}" class="btn btn-secondary">Regresar</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop

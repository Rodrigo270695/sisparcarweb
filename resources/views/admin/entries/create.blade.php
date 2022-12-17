@extends('adminlte::page')

@section('title','Guardar Ingreso')

@section('content_header')
    <h1>Guardar ingreso</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(["route"=>"admin.entries.store"]) !!}

                @include('admin.entries.partials.form')

                {!! Form::submit('Registrar Ingreso', ["class"=>"btn btn-primary"]) !!}
                <a href="{{ route("admin.entries.index") }}" class="btn btn-secondary">Regresar</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop

@extends('adminlte::page')

@section('title','Guardar Vehículo')

@section('content_header')
    <h1>Guardar Vehículo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(["route"=>"admin.vehicles.store"]) !!}
                
                @include('admin.vehicles.partials.form')

                {!! Form::submit('Registrar Vehículo', ["class"=>"btn btn-primary"]) !!}
                <a href="{{ route("admin.vehicles.index") }}" class="btn btn-secondary">Regresar</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop

@extends('adminlte::page')

@section('title','Ver vehículo')

@section('content_header')
    <h1>Vista de Información del Vehículo</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción: ') !!}
                {{ $vehicle->descripcion }}
            </div>
            <a href="{{ route("admin.vehicles.index") }}" class="btn btn-secondary">Regresar</a>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop
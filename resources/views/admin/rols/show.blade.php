@extends('adminlte::page')

@section('title','Editar Rol')

@section('content_header')
    <h1>Vista de Información del Rol</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
            <div class="form-group">
                {!! Form::label('Descripcion', 'Descripción: ') !!}
                {{ $rol->descripcion }}
            </div>
            <a href="{{ route("admin.rols.index") }}" class="btn btn-secondary">Regresar</a>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop
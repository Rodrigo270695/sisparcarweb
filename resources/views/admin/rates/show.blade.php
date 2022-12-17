@extends('adminlte::page')

@section('title','Ver Tarifa')

@section('content_header')
    <h1>Vista informativa de la Tarifa</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
            <div class="form-group">
                {!! Form::label('precio_hora', 'Precio X Hora: ') !!}
                {{ $rate->precio_hora }}
            </div>
            <div class="form-group">
                {!! Form::label('precio_dia', 'Precio X Día: ') !!}
                {{ $rate->precio_dia }}
            </div>
            <div class="form-group">
                {!! Form::label('descripcion', 'Descripción: ') !!}
                @foreach ($vehicles as $vehicle)
                @if ( $rate -> id == $vehicle -> id )
                {{ $vehicle -> descripcion }}
                @endif
                @endforeach
            </div>
            <a href="{{ route("admin.rates.index") }}" class="btn btn-secondary">Regresar</a>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop
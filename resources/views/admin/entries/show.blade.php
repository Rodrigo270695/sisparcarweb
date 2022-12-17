@extends('adminlte::page')

@section('title','Detalle ingreso')

@section('content_header')
    <h1>Vista informativa del ingreso</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
            <div class="form-group">
                {!! Form::label('placa', 'Placa: ') !!}
                {{ $entry->placa }}
            </div>
            <div class="form-group">
                {!! Form::label('fecha_ingreso', 'Hora de ingreso: ') !!}
                {{ $entry->fecha_ingreso }}
            </div>
            <div class="form-group">
                {!! Form::label('fecha_salida', 'Hora de salida: ') !!}
                {{ $entry->fecha_salida }}
            </div>
            <div class="form-group">
                {!! Form::label('monto', 'Monto: ') !!}
                {{ $entry->monto }}
            </div>
            <div class="form-group">
                {!! Form::label('rate_id', 'Vehiculo: ') !!}
                @foreach ($vehicles as $vehicle)
                @if ( $entry -> vehicle_id == $vehicle -> id )
                {{ $vehicle -> descripcion }}
                @endif
                @endforeach
            </div>
            <a href="{{ route("admin.entries.index") }}" class="btn btn-secondary">Regresar</a>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop

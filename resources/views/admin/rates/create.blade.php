@extends('adminlte::page')

@section('title','Guardar Tarifas')

@section('content_header')
    <h1>Guardar Tarifas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(["route"=>"admin.rates.store"]) !!}
                
                @include('admin.rates.partials.form')

                {!! Form::submit('Registrar Tarifa', ["class"=>"btn btn-primary"]) !!}
                <a href="{{ route("admin.rates.index") }}" class="btn btn-secondary">Regresar</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop

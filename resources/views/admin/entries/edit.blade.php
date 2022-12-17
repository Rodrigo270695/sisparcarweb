@extends('adminlte::page')

@section('title','Dar salida')

@section('content_header')
    <h1>Dar Salida</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($entry,["route"=>["admin.entries.update",$entry],'method'=>'put']) !!}


                <div class="form-group">
                    {!! Form::label('fecha_ingreso', 'Fecha de Ingreso') !!}
                    {!! Form::datetime('fecha_ingreso', null,["class" => "form-control","disabled"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('fecha_salida', 'Fecha de Salida') !!}
                    {!! Form::datetime('fecha_salida', null,["class" => "form-control","disabled"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('monto', 'Monto') !!}
                    {!! Form::text('monto', null,["class" => "form-control", "placeholder" =>"Ingrese el monto"]) !!}
                </div>

                {!! Form::submit('Editar Tarifa', ["class"=>"btn btn-primary"]) !!}
                <a href="{{ route("admin.entries.index") }}" class="btn btn-secondary">Regresar</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop

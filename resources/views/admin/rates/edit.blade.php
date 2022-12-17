@extends('adminlte::page')

@section('title','Editar Tarifa')

@section('content_header')
    <h1>Editar Tarifa</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($rate,["route"=>["admin.rates.update",$rate],'method'=>'put']) !!}
                
                @include('admin.rates.partials.form')

                {!! Form::submit('Editar Tarifa', ["class"=>"btn btn-primary"]) !!}
                <a href="{{ route("admin.rates.index") }}" class="btn btn-secondary">Regresar</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop
@extends('adminlte::page')

@section('title','Editar Vehículo')

@section('content_header')
    <h1>Editar Vehículo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($vehicle,["route"=>["admin.vehicles.update",$vehicle],'method'=>'put']) !!}
                
                @include('admin.vehicles.partials.form')

                {!! Form::submit('Editar Vehículo', ["class"=>"btn btn-primary"]) !!}
                <a href="{{ route("admin.vehicles.index") }}" class="btn btn-secondary">Regresar</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop
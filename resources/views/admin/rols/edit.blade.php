@extends('adminlte::page')

@section('title','Editar Rol')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($rol,["route"=>["admin.rols.update",$rol],'method'=>'put']) !!}
                
                @include('admin.rols.partials.form')

                {!! Form::submit('Editar Rol', ["class"=>"btn btn-primary"]) !!}
                <a href="{{ route("admin.rols.index") }}" class="btn btn-secondary">Regresar</a>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop
@extends('adminlte::page')

@section('title', 'Gestionar tarifas')

@section('content_header')
    <a href="{{ route('admin.rates.create') }}" class="btn btn-primary float-right">Agregar Tarifa</a>
    <h1>Tarifas de los vehículos</h1>
@stop

@section('content')
    @livewire('admin.rates-index')
@stop


@section('css')
    <link rel="stylesheet" href="css/admin_custom.css">
@stop
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('eliminar') == 'ok')

<script>
Swal.fire(
            '¡Eliminado!',
            'Se eliminó el Vehículo correctamente',
            'success'
            )
</script>

@endif

<script>

$('.formulario-eliminar').submit(function(e){
    e.preventDefault();
    Swal.fire({
        title: '¿Estás Seguro de eliminar el Vehículo?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar',
        cancelmButtonText: 'Cancelar',
        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
    }) 
});

</script>
@stop

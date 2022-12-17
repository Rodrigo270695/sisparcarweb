<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Buscar Vehículo">
    </div>
    <div class="card-body">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th >Placa</th>
                    <th >Fecha ingreso</th>
                    <th >Fecha Salida</th>
                    <th >Vehiculo</th>
                    <th ></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entries as $entry)
                @if ($entry -> fecha_salida == null)
                <tr>
                    <td>{{ $entry -> id }}</td>
                    <td>{{ $entry -> placa }}</td>
                    <td>{{ $entry -> fecha_ingreso }}</td>
                    <td>{{ $entry -> fecha_salida }}</td>
                    <td>{{ $entry -> descripcion }}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 ">
                                <a class="btn btn-info btn-sm" href="{{ route('admin.entries.edit', $entry) }}">Dar Salida</a>
                                <!--
                                <form action="{{ route('admin.entries.edit', $entry) }}" method="POST" class="formulario-darsalida">
                                    <button type="submit" class="btn btn-info btn-sm">Dar Salida</button>
                                </form> -->
                            </div>
                            <div class="col-md-4 col-sm-12 ">
                                <form action="{{ route('admin.entries.destroy', $entry) }}" method="POST" class="formulario-eliminar">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                            <!-- <div class="col-md-4 col-sm-12 ">
                                <a class="btn btn-success btn-sm" href="{{ route('admin.entries.show', $entry) }}">Ver</a>
                            </div> -->
                    </td>
                </tr>
                @endif

                @endforeach
            </tbody>
        </table>

    </div>

    <div class="card-footter">
        <div class="float-right">

            {{ $entries->links() }}
        </div>
    </div>

</div>

<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Buscar Vehículo">
    </div>
    <div class="card-body">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th width="700">Descripcion</th>
                    <th ></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle -> id }}</td>
                    <td>{{ $vehicle -> descripcion }}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 ">
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.vehicles.edit', $vehicle) }}">Editar</a>
                            </div>
                            <div class="col-md-4 col-sm-12 ">
                                <form action="{{ route('admin.vehicles.destroy', $vehicle) }}" method="POST" class="formulario-eliminar">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-12 ">
                                <a class="btn btn-success btn-sm" href="{{ route('admin.vehicles.show', $vehicle) }}">Ver</a>
                            </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="card-footter">
        <div class="float-right">

            {{ $vehicles->links() }}
        </div>
    </div>

</div>

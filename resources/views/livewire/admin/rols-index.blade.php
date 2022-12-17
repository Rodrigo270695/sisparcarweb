<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Buscar Rol">
    </div>
    <div class="card-body">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th width="700">Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rols as $rol)
                <tr>
                    <td>{{ $rol -> id }}</td>
                    <td>{{ $rol -> descripcion }}</td>
                    <td class="botton-group">

                        <div class="row">
                            <div class="col-md-4 col-sm-12 ">
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.rols.edit', $rol) }}">Editar</a> 
                            </div>
                            <div class="col-md-4 col-sm-12 ">
                                <form action="{{ route('admin.rols.destroy', $rol) }}" method="POST" class="formulario-eliminar">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-12 ">
                                <a class="btn btn-success btn-sm" href="{{ route('admin.rols.show', $rol) }}">Ver</a>
                            </div>

                        </div>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="card-footter">
        <div class="float-right">

            {{ $rols->links() }}
        </div>
    </div>

</div>

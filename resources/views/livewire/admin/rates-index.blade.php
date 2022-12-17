<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Buscar Vehículo">
    </div>
    <div class="card-body">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th >Precio Por Hora</th>
                    <th >Precio Por Día</th>
                    <th >Vehículo</th>
                    <th ></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rates as $rate)
                <tr>
                    <td>{{ $rate -> id }}</td>
                    <td>{{ $rate -> precio_hora }}</td>
                    <td>{{ $rate -> precio_dia }}</td>
                    <td>{{ $rate -> descripcion }}</td>
                    <td>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 ">
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.rates.edit', $rate) }}">Editar</a>
                            </div>
                            <div class="col-md-4 col-sm-12 ">
                                <form action="{{ route('admin.rates.destroy', $rate) }}" method="POST" class="formulario-eliminar">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-12 ">
                                <a class="btn btn-success btn-sm" href="{{ route('admin.rates.show', $rate) }}">Ver</a>
                            </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="card-footter">
        <div class="float-right">

            {{ $rates->links() }}
        </div>
    </div>

</div>

@extends('plantilla')
@section('contenido')
    <div>
    <table class="table table-dark table-striped table-bordered table-hover table-sm" style="opacity: 0.9;">
            <thead>
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Origen</th>
                    <th>Proveedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($arrayProductos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->tipo }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>{{ $producto->origen }}</td>
                        <td>{{ $producto->proveedor }}</td>
                        <td>
                            <!-- Botón para editar -->
                            <form action="{{ route('actualizar-producto', ['id' => $producto->id]) }}" method="get">
                                <button class="btn btn-warning"><i class="fas fa-edit"></i></button>
                            </form>

                            <!-- Botón para eliminar -->
                            <form action="{{ route('eliminar-producto', ['id' => $producto->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

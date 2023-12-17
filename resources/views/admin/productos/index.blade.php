@extends('layouts.master')
@section('title', 'Productos')
@section('content')

    <div class="container" style="background-color: whitesmoke">
        <div class="row">
            <h2>PRODUCTOS</h2>
            <div class="row justify-content-between align-items-center mb-3">
                <div class="col">
                    <a href="{{ route('administrador') }}" class="btn btn-secondary me-2"><i class="bi bi-arrow-left"></i>Volver</a>
                    <a href="{{ route('productos.create') }}" class="btn btn-success me-2">Nuevo Producto</a>
                </div>
                <div class="col">
                    <!-- Formulario de búsqueda -->
                    <form action="{{ route('productos.buscar') }}" method="GET" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="producto" class="form-control" placeholder="Buscar por nombre">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                    </form>
                </div>
                <hr style="margin-left:10px">
            </div>
            <nav aria-label="Page navigation example">{{ $productos->links() }}</nav>
            <div class="table-responsive" >
                <table class="table table-bordered table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Precio(s/.)</th>
                            <th>Cantidad</th>
                            <th>Categoría</th>
                            <th>Marca</th>
                            <th>Proveedor</th>
                            <th>Foto del producto</th>
                            <th>Fecha de creación</th>
                            <th class="collapse d-sm-table-cell">Fecha de modificación</th>
                            <th class="collapse d-sm-table-cell">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td class="align-middle">{{ $producto->nombre }}</td>
                                <td class="align-middle">{{ $producto->precio }}</td>
                                <td class="align-middle">{{ $producto->cantidad }}</td>
                                <td class="align-middle">{{ $producto->categoria->nombre }}</td>
                                <td class="align-middle">{{ $producto->marca }}</td>
                                <td class="align-middle">{{ $producto->proveedor->nombre }}</td>
                                <td width="200" height="200" class="align-middle">
                                    @if ($producto->foto)
                                        <img src="{{ asset('images/admin/fotos_productos/' . $producto->foto) }}"
                                            alt="Foto del Producto" class="img-thumbnail">
                                    @else
                                        <img src="{{ asset('images/admin/imagen.png') }}" alt="Foto default" class="img-thumbnail">
                                    @endif
                                </td>
                                <td class="collapse d-sm-table-cell align-middle">
                                    {{ $producto->created_at ? $producto->created_at->format('d/m/Y') : 'Fecha no disponible' }}
                                </td>
                                <td class="collapse d-sm-table-cell align-middle">
                                    {{ $producto->updated_at ? $producto->updated_at->format('d/m/Y') : 'Fecha no disponible' }}
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <a href="{{ route('productos.edit', $producto->id_producto) }}"
                                            class="btn btn-warning me-2">Editar</a>
                                        <form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST"
                                            onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>     
        </div>
    </div>
@endsection

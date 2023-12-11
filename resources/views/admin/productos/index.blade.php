@extends('layouts.master')
@section('title', 'Productos')
@section('content')

<div class="container mt-4">
    <h1>Productos</h1>
    <div class="container mt-4">
        <!-- Formulario de búsqueda -->
        <form action="{{ route('productos.buscar') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="producto" class="form-control" placeholder="Buscar por nombre">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
    </div>
    <a href="{{route('administrador')}}" class="btn btn-primary mb-3">Volver</a> <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Nuevo Producto</a>
    <nav aria-label="Page navigation example">{{ $productos->links() }}</nav>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio (s/.)</th>
                    <th>Cantidad</th>
                    <th>Categoría</th>
                    <th>Marca</th>
                    <th>Proveedor</th>
                    <th>Imagen</th>
                    <th>Fecha de creación</th>
                    <th class="collapse d-sm-table-cell">Fecha de modificación</th>
                    <th class="collapse d-sm-table-cell">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->categoria->nombre }}</td>
                        <td>{{ $producto->marca }}</td>
                        <td>{{ $producto->proveedor->nombre }}</td>
                        <td width="200" height="200">
                            
                            @if ($producto->foto)
                                <img src="{{ asset('images/admin/fotos_productos/' . $producto->foto) }}" alt="Foto del Producto" >
                            @else
                                <img src="{{ asset('images/admin/imagen.png') }}" alt="Foto default">
                            @endif
                        </td>
                        <td class="collapse d-sm-table-cell">{{ $producto->created_at ? $producto->created_at->format('d/m/Y H:i:s') : 'Fecha no disponible' }}</td>
                        <td class="collapse d-sm-table-cell">{{ $producto->updated_at ? $producto->updated_at->format('d/m/Y H:i:s') : 'Fecha no disponible' }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('productos.edit', $producto->id_producto) }}" class="btn btn-warning me-2">Editar</a>
                                <form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?')">
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

@endsection

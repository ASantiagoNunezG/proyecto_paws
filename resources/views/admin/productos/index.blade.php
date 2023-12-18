@extends('layouts.master')
@section('title', 'Productos')
@section('content')

    <div class="container" style="background-color: whitesmoke">
        <div class="row">
            <h2 class="mih2">PRODUCTOS</h2>
            <div class="row justify-content-between align-items-center mb-3">
                <div class="col">
                    <a href="{{ route('administrador') }}" class="btn boton-volver me-2"><i class="bi bi-arrow-left"></i>Volver</a>
                    <a href="{{ route('productos.create') }}" class="btn boton-nuevo me-2">Nuevo Producto</a>
                </div>
                <div class="col">
                    <!-- Formulario de búsqueda -->
                    <form action="{{ route('productos.buscar') }}" method="GET" class="mb-3">
                        <div class="input-group">
                            <input type="text" name="producto" class="form-control" placeholder="Buscar por nombre">
                            <button type="submit" class="btn boton-nuevo"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
                <hr style="margin-left:10px">
            </div>
            <nav aria-label="Page navigation example">{{ $productos->links() }}</nav>
            <div class="table-responsive" >
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr style="background-color: #CDC4BC">
                            <th>Foto del producto</th>
                            <th>Nombre</th>
                            <th>Precio(s/.)</th>
                            <th>Cantidad</th>
                            <th>Categoría</th>
                            <th>Marca</th>
                            <th>Proveedor</th> 
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td width="200" height="200" class="align-middle">
                                    @if ($producto->foto)
                                        <img src="{{ asset('images/admin/fotos_productos/' . $producto->foto) }}"
                                            alt="Foto del Producto" class="img-thumbnail">
                                    @else
                                        <img src="{{ asset('images/admin/imagen.png') }}" alt="Foto default" class="img-thumbnail">
                                    @endif
                                </td>
                                <td class="align-middle">{{ $producto->nombre }}</td>
                                <td class="align-middle">{{ $producto->precio }}</td>
                                <td class="align-middle">{{ $producto->cantidad }}</td>
                                <td class="align-middle">{{ $producto->categoria->nombre }}</td>
                                <td class="align-middle">{{ $producto->marca }}</td>
                                <td class="align-middle">{{ $producto->proveedor->nombre }}</td>
                                
                                <td class="align-middle">
                                    <div class="d-flex">
                                        <a href="{{ route('productos.edit', $producto->id_producto) }}"
                                            class="btn boton-editar me-2"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('productos.destroy', $producto->id_producto) }}" method="POST"
                                            onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn boton-eliminar"><i class="bi bi-trash"></i></button>
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

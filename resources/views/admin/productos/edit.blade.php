@extends('layouts.master')
@section('title', 'Editar Producto')
@section('content')
    <div class="container">
        <h1>Editando el producto {{$productos->id_producto}}</h1>
        <a href="{{ route('productos.index')}}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Regresar
        </a>
        <hr>
        <form action="{{ route('productos.update',$productos->id_producto)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required value="{{$productos -> nombre}}">
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" class="form-control" step="0.01" step="0.01" placeholder="0.00" required value="{{$productos -> precio}}">
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" required value="{{$productos -> cantidad}}"> 
            </div>

            <div class="form-group">
                <label for="id_categoria">Categoría:</label>
                <select name="id_categoria" id="id_categoria" class="form-control" required>
                    <!-- Itera sobre las categorías para llenar el dropdown -->
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id_categoria }}" @if ($categoria->id_categoria == $productos->id_categoria) {{'selected'}} @endif>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Marca -->
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" class="form-control" required value="{{$productos -> marca}}">
            </div>

            <div class="form-group">
                <label for="id_proveedor">Proveedor:</label>
                <select name="id_proveedor" id="id_proveedor" class="form-control" required>
                    <!-- Itera sobre los proveedores para llenar el dropdown -->
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id_proveedor }}"@if ($proveedor->id_proveedor == $productos->id_proveedor) {{'selected'}} @endif>{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </form>
    </div>
@endsection
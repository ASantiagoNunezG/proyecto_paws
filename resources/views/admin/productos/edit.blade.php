@extends('layouts.master')
@section('title', 'Editar Producto')
@section('content')
    <div class="container">
        <h2>EDITANDO EL PRODUCTO</h2>
        <div class="row">
            <div style="margin-bottom: 30px">
                <a href="{{ route('productos.index')}}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>
        </div>
        
        <form action="{{ route('productos.update',$productos->id_producto)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required value="{{$productos -> nombre}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="precio">Precio:</label>
                        <input type="number" name="precio" id="precio" class="form-control" step="0.01" step="0.01" placeholder="0.00" required value="{{$productos -> precio}}">
                    </div>
        
                    <div class="mb-3">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control" required value="{{$productos -> cantidad}}"> 
                    </div>
                    <!-- Marca -->
                    <div class="mb-3">
                        <label for="marca">Marca:</label>
                        <input type="text" name="marca" id="marca" class="form-control" required value="{{$productos -> marca}}">
                    </div>
                    <div class="mb-4">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" id="foto" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Guardar Producto</button>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="id_categoria">Categoría:</label>
                        <select name="id_categoria" id="id_categoria" class="form-control" required>
                            <!-- Itera sobre las categorías para llenar el dropdown -->
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id_categoria }}" @if ($categoria->id_categoria == $productos->id_categoria) {{'selected'}} @endif>{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="mb-3">
                        <label for="id_proveedor">Proveedor:</label>
                        <select name="id_proveedor" id="id_proveedor" class="form-control" required>
                            <!-- Itera sobre los proveedores para llenar el dropdown -->
                            @foreach($proveedores as $proveedor)
                                <option value="{{ $proveedor->id_proveedor }}"@if ($proveedor->id_proveedor == $productos->id_proveedor) {{'selected'}} @endif>{{ $proveedor->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="text-align: center">
                        <h6>Foto actual del producto</h6>
                        @if ($productos->foto)
                            <img src="{{ asset('images/admin/fotos_productos/' . $productos->foto) }}" alt="Foto actual del producto" style="width: 50%; height: auto;">
                        @endif
                    </div>
                </div>
            </div>
            
            
        </form>
    </div>
@endsection
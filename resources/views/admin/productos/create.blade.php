@extends('layouts.master')
@section('title', 'Producto Nuevo')
@section('content')
    <div class="container">
        <div class="row">
            {{-- seccion para el formulario --}}
            <div class="col-md-12">
                <h2>NUEVO PRODUCTO</h2>
                <div>
                    <a href="{{ route('productos.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Volver
                    </a>
                </div>
                <hr>
                <div style="background-color: whitesmoke;border:1px solid black">
                    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data"
                        style=" margin:30px; padding:20px;">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="precio" class="form-label">Precio:</label>
                                    <input type="number" name="precio" id="precio" class="form-control" step="0.01"
                                        placeholder="0.00" required>
                                </div>

                                <div class="mb-3">
                                    <label for="cantidad" class="form-label">Cantidad:</label>
                                    <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                                </div>
                                <div class="mb-4">
                                    <label for="marca" class="form-label">Marca:</label>
                                    <input type="text" name="marca" id="marca" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-success">Guardar Producto</button>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="id_categoria" class="form-label">Categoría:</label>
                                    <select name="id_categoria" id="id_categoria" class="form-control" required>
                                        @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->id_categoria }}">{{ $categoria->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="id_proveedor" class="form-label">Proveedor:</label>
                                    <select name="id_proveedor" id="id_proveedor" class="form-control" required>
                                        @foreach ($proveedores as $proveedor)
                                            <option value="{{ $proveedor->id_proveedor }}">{{ $proveedor->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="foto" class="form-label">Foto:</label>
                                    <input type="file" name="foto" id="foto" class="form-control">
                                </div>
                                <div style="margin-top: 40px">
                                    <img src="{{asset('images/admin/paws10.png')}}" alt="" width="32%">
                                    <img src="{{asset('images/admin/paws10.png')}}" alt="" width="32%">
                                    <img src="{{asset('images/admin/paws10.png')}}" alt="" width="32%">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

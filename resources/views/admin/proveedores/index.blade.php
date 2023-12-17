@extends('layouts.master')

@section('title', 'Proveedores')
@section('content')
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="container" style="background-color: whitesmoke">
        <div class="row" style="border: 1px solid black; padding:30px;">
            <h2>PROVEEDORES</h2>
            {{-- encabezado de la primera seccion --}}
            <div class="col-md-7" style="border: 1px solid black;background-color:white;">
                <div class="row" style="margin-top:20px">
                    <div class="col">
                        <a href="{{ route('administrador') }}" class="btn btn-secondary me-2"><i class="bi bi-arrow-left"></i>Volver</a>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formularioModal">
                            Nuevo Proveedor
                        </button>
                    </div>
                    <div class="col">
                        <form action="{{ route('proveedores.buscar') }}" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Buscar por nombre" name="nombre" value="{{ request('nombre') }}">
                                <button class="btn btn-primary" type="submit">Buscar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    {{-- cuerpo de la primera seccion --}}
                    <div class="col-md-12">
                        @if ($proveedores->count() > 0)
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>RUC</th>
                                            <th>Celular</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($proveedores as $proveedor)
                                            <tr>
                                                <td>{{ $proveedor->nombre }}</td>
                                                <td>{{ $proveedor->ruc }}</td>
                                                <td>{{ $proveedor->telefono }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <button type="button" class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $proveedor->id_proveedor }}">
                                                            Editar
                                                        </button>
                                                        @include('admin.proveedores.edit')
                                                        <form action="{{ route('proveedores.destroy', $proveedor->id_proveedor) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?')">
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
                        @else
                            <p>No se encontraron resultados.</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-5" style="text-align: center">
                <img src="{{ asset('images/admin/proveedor2.jpg') }}" alt="Imagen de proveedor" style="border: 2px solid black">
            </div>
        </div>
    </div>
    {{--Modal de creacion--}}
    <div class="modal fade" id="formularioModal" tabindex="-1" aria-labelledby="formularioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="formularioModalLabel">Registrando a un nuevo proveedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('proveedores.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>

                        <div class="mb-3">
                            <label for="ruc" class="form-label">RUC</label>
                            <input type="text" class="form-control" id="ruc" name="ruc" required>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Celular</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" required>
                        </div>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
@endsection

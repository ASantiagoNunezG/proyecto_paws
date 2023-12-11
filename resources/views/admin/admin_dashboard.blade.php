@extends('layouts.master')
@section('title', 'Panel del Administrador')
@section('content')
    <div class="row">
        <div style="text-align: center; padding:30px" >
            <h1 class="admin-panel-title">PANEL DE ADMINISTRACIÓN</h1>
            
        </div>
        <div>
            <hr>
        </div><br>
        <div style="text-align: center">
            
        </div>
        <div class="col-md-3" style="margin: 20px; border:2px solid black">
            <div class="card h-100 border-0 custom-card">
                <img src="{{ asset('images/admin/adopcion.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen de adopciones" style="width: 300px; height: 200px;">
                <div class="card-body" style="border:2px solid black">
                    <h5 class="card-title">Adopciones</h5><hr><br>
                    <a href="{{ route('adopciones.index') }}" class="btn btn-outline-secondary">Administrar adopciones</a>
                    <br><br>
                    <a href="#" class="btn btn-outline-secondary">Citas</a>
                    <br><br>
                    <a href="#" class="btn btn-outline-secondary">Historial de adopciones</a>

                </div>
            </div>
        </div><br>
        <div class="col-md-3" style="margin: 20px; border:2px solid black">
            <div class="card h-100 border-0 custom-card">
                <img src="{{ asset('images/admin/mascotas.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen de mascotas" style="width: 300px; height: 200px;">
                <div class="card-body" style="border:2px solid black">
                    <h5 class="card-title">Mascotas</h5><hr><br>
                    <a href="{{ route('mascotas.index') }}" class="btn btn-outline-secondary">Administrar mascotas</a>
                    <br><br>
                    <a href="#" class="btn btn-outline-secondary">Estado de la mascota</a>
                    
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin: 20px; border:2px solid black">
            <div class="card h-100 border-0 custom-card">
                <img src="{{ asset('images/admin/inventario.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen del inventario" style="width: 300px; height: 200px;">
                <div class="card-body" style="border:2px solid black">
                    <h5 class="card-title">Inventario</h5><hr><br>
                    <a href="{{route('productos.index')}}" class="btn btn-outline-secondary">Administrar productos</a>
                    <br><br>
                    <a href="#" class="btn btn-outline-secondary">Administrar ventas</a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin: 20px; border:2px solid black">
            <div class="card h-100 border-0 custom-card">
                <img src="{{ asset('images/admin/usuarios.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen de usuarios" style="width: 300px; height: 200px;">
                <div class="card-body" style="border:2px solid black"> 
                    <h5 class="card-title">Usuarios</h5><hr><br>
                    <a href="{{route('usuarios.index')}}" class="btn btn-outline-secondary">Administrar usuarios</a>
                    <br><br>
                    <a href="#" class="btn btn-outline-secondary">Bandeja de reclamos</a>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin: 20px; border:2px solid black">
            <div class="card h-100 border-0 custom-card">
                <img src="{{ asset('images/admin/empleados.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen de empleados" style="width: 300px; height: 200px;">
                <div class="card-body" style="border:2px solid black">
                    <h5 class="card-title">Empleados</h5><hr><br>
                    <a href="{{route('empleados.index')}}" class="btn btn-outline-secondary">Administrar empleados</a>
                    <br><br>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="margin: 20px; border:2px solid black">
            <div class="card h-100 border-0 custom-card">
                <img src="{{ asset('images/admin/proveedor.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen de proveedores" style="width: 300px; height: 200px;">
                <div class="card-body" style="border:2px solid black">
                    <h5 class="card-title">Proveedores</h5><hr><br>
                    <a href="{{route('proveedores.index')}}" class="btn btn-outline-secondary">Administrar proveedores</a>
                    <br><br>
                </div>
            </div>
        </div>

        
        
    </div>
@endsection
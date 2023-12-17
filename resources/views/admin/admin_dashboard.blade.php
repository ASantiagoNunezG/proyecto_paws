@extends('layouts.master')
@section('title', 'Panel del Administrador')
@section('content')
    <div class="row" style="background-image: url('{{asset('images/admin/paws2.jpg')}}')">
        <div style="text-align: center; padding:10px; background-image: url('{{asset('images/admin/paws2.jpg')}}')" >
            <div style="background-color: white">
                <h1 class="admin-panel-title">PANEL DE ADMINISTRACIÓN</h1>
            </div>
            
        </div>
        <div class="row justify-content-center" style="text-align: center">
            {{--Seccion para adopciones--}}
            <div class="col-md-3" style="margin: 20px; border:2px solid black; background-color: #744253" >
                <div class="card h-100 border-0 custom-card" style="background-color: #744253">
                    <div class="card-body" style="border:2px solid black; margin:10px; background-color: whitesmoke">
                        <img src="{{ asset('images/admin/adopcion.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen de adopciones" style="width: 300px; height: 200px;"><br><br>
                        <h5 class="card-title">Adopciones</h5><hr>
                        <a href="{{route('citas.index')}}" class="btn boton-dash">Citas de adopción</a>
                        <br><br>
                        <a href="{{ route('adopciones.index') }}" class="btn boton-dash">Administrar adopciones</a>
                    </div>
                </div>
            </div><br>
            {{--Seccion para mascotas--}}
            <div class="col-md-3" style="margin: 20px; border:2px solid black; background-color: #744253">
                <div class="card h-100 border-0 custom-card" style="background-color: #744253">                
                    <div class="card-body" style="border:2px solid black ; margin:10px;background-color: whitesmoke">
                        <img src="{{ asset('images/admin/mascotas.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen de mascotas" style="width: 300px; height: 200px;"><br><br>
                        <h5 class="card-title">Mascotas</h5><hr><br>
                        <a href="{{ route('mascotas.index') }}" class="btn boton-dash">Administrar mascotas</a>
                    </div>
                </div>
            </div>
            {{--Seccion para el inventario--}}
            <div class="col-md-3" style="margin: 20px; border:2px solid black; background-color: #744253">
                <div class="card h-100 border-0 custom-card" style="background-color: #744253">
                    
                    <div class="card-body" style="border:2px solid black; margin:10px; background-color:whitesmoke">
                        <img src="{{ asset('images/admin/inventario.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen del inventario" style="width: 300px; height: 200px;"><br><br>
                        <h5 class="card-title">Inventario</h5><hr><br>
                        <a href="{{route('productos.index')}}" class="btn boton-dash">Administrar productos</a>
                        <br><br>
                        <a href="#" class="btn boton-dash">Administrar ventas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="text-align: center">
            {{--Seccion para usuarios--}}
            <div class="col-md-3" style="margin: 20px; border:2px solid black;background-color: #744253">
                <div class="card h-100 border-0 custom-card" style="background-color: #744253">
                
                    <div class="card-body" style="border:2px solid black; margin:10px; background-color:whitesmoke"> 
                        <img src="{{ asset('images/admin/usuarios.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen de usuarios" style="width: 300px; height: 200px;"><br><br>
                        <h5 class="card-title">Usuarios</h5><hr><br>
                        <a href="{{route('usuarios.index')}}" class="btn boton-dash">Administrar usuarios</a>
                        <br><br>
                        <a href="#" class="btn boton-dash">Bandeja de reclamos</a>
                    </div>
                </div>
            </div>
            {{--Seccion para empleados--}}
            <div class="col-md-3" style="margin: 20px; border:2px solid black;background-color: #744253">
                <div class="card h-100 border-0 custom-card" style="background-color: #744253">     
                    <div class="card-body" style="border:2px solid black; margin:10px;background-color:whitesmoke ">
                        <img src="{{ asset('images/admin/empleados.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen de empleados" style="width: 300px; height: 200px;"><br><br>
                        <h5 class="card-title">Empleados</h5><hr><br>
                        <a href="{{route('empleados.index')}}" class="btn boton-dash">Administrar empleados</a>
                        <br><br>
                    </div>
                </div>
            </div>
            {{--Seccion para proveedores--}}
            <div class="col-md-3" style="margin: 20px; border:2px solid black; background-color: #744253">
                <div class="card h-100 border-0 custom-card" style="background-color: #744253">
                    <div class="card-body" style="border:2px solid black; margin:10px;background-color:whitesmoke">
                        <img src="{{ asset('images/admin/proveedor.jpg') }}" class="card-img-top rounded custom-img img-fluid" alt="Imagen de proveedores" style="width: 300px; height: 200px;"><br><br>
                        <h5 class="card-title">Proveedores</h5><hr><br>
                        <a href="{{route('proveedores.index')}}" class="btn boton-dash">Administrar proveedores</a>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>   
    </div>
@endsection
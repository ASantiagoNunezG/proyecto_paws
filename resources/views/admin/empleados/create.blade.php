@extends('layouts.master')

@section('title', 'Nuevo Empleado')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="mih2">NUEVO EMPLEADO</h2>
            <div style="margin-bottom: 20px">
                <a href="{{ route('empleados.index') }}" class="btn boton-volver">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>
            <div class="col-md-12">
                
                <form action="{{ route('empleados.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="background-color:whitesmoke; padding:30px">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="text" class="form-control" id="dni" name="dni" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_puesto" class="form-label">Puesto</label>
                                <select class="form-select" id="id_puesto" name="id_puesto" required>
                                    @foreach ($puestos as $puesto)
                                    <option value="{{ $puesto->id_puesto}}">{{ $puesto->nombre }}</option>
                                    @endforeach ()
                                </select>
                            </div>
                            <div class="mb-4" style="padding-right:40%">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                            </div>
                            <button type="submit" class="btn boton-guardar">Guardar</button>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div style="">
                                <img src="{{asset('images/admin/empleado_create.png')}}" alt="Gato empleo" style="width: 30%; height:30%">
                                <img src="{{asset('images/admin/empleado_create3.png')}}" alt="Gato empleo" style="width: 35%; height:30%">
                                <img src="{{asset('images/admin/empleado_create2.png')}}" alt="Gato empleo" style="width: 30%; height:30%">
                            </div>
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
    </div>
@endsection

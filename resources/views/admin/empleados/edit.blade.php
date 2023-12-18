@extends('layouts.master')

@section('title', 'Editar Empleado')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="mih2">EDITAR EMPLEADO</h2>
            <div style="margin-bottom: 20px">
                <a href="{{ route('empleados.index') }}" class="btn boton-volver">
                    <i class="bi bi-arrow-left"></i> Volver
                </a>
            </div>
            <div class="col-md-12">
                
                <form action="{{ route('empleados.update', $empleado->id_empleado) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row" style="background-color:whitesmoke; padding:30px">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $empleado->apellido }}" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="dni" class="form-label">DNI</label>
                                <input type="text" class="form-control" id="dni" name="dni" value="{{ $empleado->dni }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="id_puesto" class="form-label">Puesto</label>
                                <select class="form-select" id="id_puesto" name="id_puesto" required>
                                    @foreach ($puestos as $puesto)
                                        <option value="{{ $puesto->id_puesto }}" {{ $empleado->id_puesto == $puesto->id_puesto ? 'selected' : '' }}>
                                            {{ $puesto->nombre }}
                                        </option>
                                    @endforeach
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
                                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $empleado->direccion }}" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="celular" class="form-label">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="{{ $empleado->celular }}" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="correo" name="correo" value="{{ $empleado->correo }}" required>
                            </div>
                            <div style="text-align: center">
                                <h6>Fotografía actual</h6>
                                @if ($empleado->foto)
                                    <img src="{{ asset('images/admin/fotos_empleados/' . $empleado->foto) }}" alt="Foto actual" style="width: 40%; height: auto;">
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

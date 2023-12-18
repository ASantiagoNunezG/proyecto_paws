@extends('layouts.master')

@section('title', 'Nueva Adopción')

@section('content')
    <div class="container">
        <h2 class="mih2">REGISTRANDO NUEVA ADOPCIÓN</h2>
        <div class="row">
            <div class="col-md-5 mb-4">
                <a href="{{ route('adopciones.index') }}" class="btn btn-secondary me-2"><i
                        class="bi bi-arrow-left"></i>Volver</a>
            </div>
            <div class="row">
                <div class="col-2" style="margin-right:5%; margin-left:3%;">
                    <img src="{{ asset('images/admin/fonod_mascotas2.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-6">
                    <form action="{{ route('adopciones.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="fecha" class="form-label">Fecha</label>
                                    <input type="date" name="fecha" id="fecha" class="mi-select" required>
                                </div><br>
                                <div class="mb-3">
                                    <label for="id_mascota" class="form-label">Mascota</label>
                                    <select name="id_mascota" id="id_mascota" class="mi-select">
                                        @foreach ($mascotas as $mascota)
                                            <option value="{{ $mascota->id_mascota }}">{{ $mascota->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div><br>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="id_usuario" class="form-label">Usuario</label>
                                    <select name="id_usuario" id="id_usuario" class="mi-select">
                                        @foreach ($usuarios as $usuario)
                                            <option value="{{ $usuario->id_usuario }}">{{ $usuario->name }}</option>
                                        @endforeach
                                    </select>
                                </div><br>
                                <div class="mb-3">
                                    <label for="id_empleado" class="form-label">Empleado</label>
                                    <select name="id_empleado" id="id_empleado" class="mi-select">
                                        @foreach ($empleados as $empleado)
                                            <option value="{{ $empleado->id_empleado }}">{{ $empleado->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div><br>
                            </div>
                        </div>
                        <div style="text-align: center; margin-top:40px">
                            <button type="submit" class="btn boton-guardar">Guardar</button>
                        </div>
                        
                    </form>
                </div>
                <div class="col-2" style="margin-left: 5%;margin-right:0%;">
                    <img src="{{ asset('images/admin/fonod_mascotas3.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Obtener la fecha y hora actuales en el formato necesario para los campos de entrada
            var fechaActual = new Date().toISOString().split('T')[0];
            // Establecer los valores iniciales en los campos de entrada
            document.getElementById('fecha').value = fechaActual;
        });
    </script>
@endsection
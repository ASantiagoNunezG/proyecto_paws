@extends('layouts.master')
@section('title', 'Nueva Adopción')
@section('content')
    <div class="container">
        <h2>REGISTRANDO NUEVA ADOPCIÓN</h2>
        <div class="row">
            <div class="col">
                <a href="{{ route('adopciones.index') }}" class="btn btn-secondary me-2"><i
                        class="bi bi-arrow-left"></i>Volver</a>
            </div>
            <div class="coL-12">
                <form action="{{ route('adopciones.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_mascota">Mascota</label>
                        <select name="id_mascota" id="id_mascota">
                            @foreach ($mascotas as $mascota)
                                <option value="{{$mascota->id_mascota}}">{{$mascota->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_usuario">Usuario</label>
                        <select name="id_usuario" id="id_usuario">
                            @foreach ($usuarios as $usuario)
                                <option value="{{$usuario->id_usuario}}">{{$usuario->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_empleado">Empleado</label>
                        <select name="id_empleado" id="id_empleado">
                            @foreach ($empleados as $empleado)
                                <option value="{{$empleado->id_empleado}}">{{$empleado->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn boton-guardar">Guardar</button>

                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener la fecha y hora actuales en el formato necesario para los campos de entrada
            var fechaActual = new Date().toISOString().split('T')[0];
            // Establecer los valores iniciales en los campos de entrada
            document.getElementById('fecha').value = fechaActual;
        });
    </script>

@endsection()
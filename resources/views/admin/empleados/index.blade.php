@extends('layouts.master')

@section('title', 'Empleados')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mih2">EMPLEADOS</h2>
                <div style="margin-bottom:20px">
                    <a href="{{ route('administrador') }}" class="btn boton-volver me-2"><i class="bi bi-arrow-left"></i>Volver</a>
                    <a href="{{ route('empleados.create') }}" class="btn boton-nuevo me-2">Nuevo Empleado</a>
                </div>

                <div class="row">
                    @foreach ($empleados as $empleado)
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <div class="card-img-container">
                                    <img src="{{ $empleado->foto ? asset('images/admin/fotos_empleados/' . $empleado->foto) : asset('images/admin/empleado_default.png') }}"
                                        alt="Foto del empleado" class="card-img-top img-fluid">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $empleado->nombre }} {{ $empleado->apellido }}</h5>
                                    <p class="card-text">
                                        <div class="row">
                                            <div class="col-5">
                                                <strong>DNI:</strong><br>
                                                <strong>Dirección:</strong><br>
                                                <strong>Celular:</strong><br>
                                                <strong>Correo:</strong><br>
                                                <strong>Puesto:</strong>
                                            </div>
                                            <div class="col-7">
                                                {{ $empleado->dni }}<br>
                                                {{ $empleado->direccion }}<br>
                                                {{ $empleado->celular }}<br>
                                                {{ $empleado->correo }}<br>
                                                {{ $empleado->puesto->nombre }}
                                            </div>
                                        </div>
                                    </p>
                                    <div class="d-flex">
                                        <a href="{{ route('empleados.edit', $empleado->id_empleado) }}" class="btn boton-editar me-2">Editar</a>
                                        <form action="{{ route('empleados.destroy', $empleado->id_empleado) }}" method="POST"
                                            onsubmit="return confirm('¿Estás seguro de que deseas eliminar a este empleado?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn boton-eliminar">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

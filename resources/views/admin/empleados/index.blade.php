@extends('layouts.master')
@section('title', 'Empleados')
@section('content')
    <div>
        <a href="{{route('administrador')}}">Volver</a>
        <h2>Listado de Empleados</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Dirección</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Puesto</th>
                    <th>Foto</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empleados as $empleado)
                    <tr>
                        <td>{{ $empleado->nombre }}</td>
                        <td>{{ $empleado->apellido }}</td>
                        <td>{{ $empleado->dni }}</td>
                        <td>{{ $empleado->direccion }}</td>
                        <td>{{ $empleado->celular }}</td>
                        <td>{{ $empleado->correo }}</td>
                        <td>{{ $empleado->puesto->nombre}}</td>
                        <td>{{ $empleado->foto }}</td>
                        <td>
                            <div class="d-flex">
                                <a {{--href="{{ route('empelados.edit', $empleado->id_empleado) }}"--}}  class="btn btn-warning me-2">Editar</a>
                                <form  {{--action="{{ route('empleados.destroy', $empleado->id_empleado) }}"--}} method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar a este empleado?')">
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
@endsection

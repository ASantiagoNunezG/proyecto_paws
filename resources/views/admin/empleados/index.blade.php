@extends('layouts.master')

@section('title', 'Empleados')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>EMPLEADOS</h2>
                <div style="margin-bottom:20px">
                    <a href="{{ route('administrador') }}" class="btn btn-secondary me-2"><i class="bi bi-arrow-left"></i>Volver</a>
                <a href="{{ route('empleados.create') }}" class="btn btn-success me-2">Nuevo Empleado</a>
                </div>
                

                <div class="table-responsive">
                    <table class="table table-bordered">
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
                        <tbody >
                            @foreach($empleados as $empleado)
                                <tr>
                                    <td class="align-middle">{{ $empleado->nombre }}</td>
                                    <td class="align-middle">{{ $empleado->apellido }}</td>
                                    <td class="align-middle">{{ $empleado->dni }}</td>
                                    <td class="align-middle">{{ $empleado->direccion }}</td>
                                    <td class="align-middle">{{ $empleado->celular }}</td>
                                    <td class="align-middle">{{ $empleado->correo }}</td>
                                    <td class="align-middle">{{ $empleado->puesto->nombre}}</td>
                                    <td width="200" height="200" class="align-middle">
                                        @if ($empleado->foto)
                                            <img src="{{ asset('images/admin/fotos_empleados/' . $empleado->foto) }}"
                                                alt="Foto del empleado" class="img-thumbnail">
                                        @else
                                            <img src="{{ asset('images/admin/empleado_default.png') }}" alt="Foto default" class="img-thumbnail">
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <a href="{{ route('empleados.edit', $empleado->id_empleado) }}"  class="btn btn-warning me-2">Editar</a>
                                            <form  action="{{ route('empleados.destroy', $empleado->id_empleado) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar a este empleado?')">
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
            </div>           
        </div>  
    </div>
@endsection


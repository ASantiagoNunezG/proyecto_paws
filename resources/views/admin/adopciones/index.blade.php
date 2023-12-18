@extends('layouts.master')
@section('title', 'Adopciones')
@section('content')
    
    <div class="container">
        <h2 class="mih2">ADOPCIONES</h2>
        <div class="row">
            <div class="col" style="margin-bottom: 10px">
                <a href="{{ route('administrador') }}" class="btn boton-volver me-2"><i
                        class="bi bi-arrow-left"></i>Volver</a>
                <a href="{{ route('adopciones.create') }}" class="btn boton-nuevo me-2">Nueva adopción</a>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr style="background-color: #CDC4BC">
                                <th>Fecha</th>
                                <th>Mascota</th>
                                <th>Usuario</th>
                                <th>Empleado</th>
                                <th>Opciones</th>
    
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($adopciones as $adopcion)
                                <tr>
                                    <td class="align-middle">{{ $adopcion->fecha }}</td>
                                    <td class="align-middle">{{ $adopcion->mascota->nombre }}</td>
                                    <td class="align-middle">{{ $adopcion->usuario->name }}</td>
                                    <td class="align-middle">{{ $adopcion->empleado->nombre }}</td>
                                    <th class="align-middle">
                                        <div class="d-flex">
                                            
                                            <button type="button" class="btn boton-info me-2" data-bs-toggle="modal"
                                                data-bs-target="#ver_info{{ $adopcion->id_historialadop }}">
                                                <i class="bi bi-info-circle"></i>
                                            </button>
                                        
                                            <form action="{{ route('adopciones.destroy', $adopcion->id_historialadop) }}" method="POST"
                                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn boton-eliminar"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                
                                        @include('admin.adopciones.show')
                                    </th>
    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection()

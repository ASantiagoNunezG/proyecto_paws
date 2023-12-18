@extends('layouts.master')
@section('title', 'Usuarios')
@section('content')

    <div class="container mt-4">
        <h1 class="mih2">Usuarios</h1>
        <div>
            <a href="{{route('administrador')}}" class="btn boton-volver mb-3"><i
                class="bi bi-arrow-left"></i>Volver</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr style="background-color: #CDC4BC">
                        <th>Nombres</th>
                        <th>Correo</th>
                        <th>Fecha de registro</th>
                        
                        <th class="collapse d-sm-table-cell">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td class="align-middle">{{ $usuario->name }}</td>
                            <td class="align-middle">{{ $usuario->email }}</td>
                            <td class="align-middle">{{ $usuario->created_at ? $usuario->created_at->format('d/m/Y ') : 'Fecha no disponible' }}</td>
                            <td class="align-middle">
                                <div class="d-flex">
                                    <a href="{{ route('usuarios.show', $usuario->id_usuario) }}" class="btn boton-info me-2"><i class="bi bi-info-circle"></i></a>
                                    <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn boton-eliminar"><i class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            
        </div>
    </div>

@endsection


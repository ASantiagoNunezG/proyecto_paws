@extends('layouts.master')
@section('title', 'Usuarios')
@section('content')

    <div class="container mt-4">
        <h1>Usuarios</h1>
        <div>
            <a href="{{route('administrador')}}" class="btn btn-primary mb-3">Volver</a>
            <a href="{{route('usuarios.create')}}" class="btn btn-primary mb-3">Registrar nuevo usuario</a>
        </div>
        <div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Más información</th>
                        <th>Nombres</th>
                        <th>Correo</th>
                        <th>Fecha de creación</th>
                        <th class="collapse d-sm-table-cell">Fecha de modificación</th>
                        <th class="collapse d-sm-table-cell">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td><a href="{{ route('usuarios.show', $usuario->id_usuario) }}" class="btn btn-info">Ver</a></td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td class="collapse d-sm-table-cell">{{ $usuario->created_at ? $usuario->created_at->format('d/m/Y H:i:s') : 'Fecha no disponible' }}</td>
                            <td class="collapse d-sm-table-cell">{{ $usuario->updated_at ? $usuario->updated_at->format('d/m/Y H:i:s') : 'Fecha no disponible' }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('usuarios.edit', $usuario->id_usuario) }}" class="btn btn-warning me-2">Editar</a>
                                    <form action="{{ route('usuarios.destroy', $usuario->id_usuario) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?')">
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
        <div>
            
        </div>
    </div>

@endsection


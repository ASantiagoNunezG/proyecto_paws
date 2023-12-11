@extends('layouts.master')
@section('title', 'Mascotas')
@section('content')
    <div>
        <div class="container mt-4">
            <div>
                <form action="{{ route('mascotas.filtrar') }}" method="POST">
                    @csrf
                    <label for="categoria">Categoría:</label>
                    <input type="checkbox" name="categoria[]" value="Macho"> Macho
                    <input type="checkbox" name="categoria[]" value="Hembra"> Hembra
                    <input type="checkbox" name="categoria[]" value="Disponible"> Disponible
                    <!-- Agrega más campos según tus necesidades -->
                    <button type="submit">Filtrar</button>
                </form>
            </div>
            <h1>Mascotas</h1>
            <a href="{{route('administrador')}}" class="btn btn-primary">Volver</a>
            <a href="{{route('mascotas.create')}}" class="btn btn-primary">Nueva Mascota</a>
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Tamaño</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Tipo</th>
                        <th>Dueño</th>
                        <th>Estado</th>
                        <th>Raza</th>
                        <th>Foto</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mascotas as $mascota)
                        <tr>
                            <td>{{ $mascota->nombre }}</td>
                            <td>{{ $mascota->tamano }}</td>
                            <td>{{ $mascota->edad }}</td>
                            <td>{{ $mascota->sexo }}</td>
                            <td>{{ $mascota->tipo->nombre }}</td>
                            <td>{{ $mascota->usuario ? $mascota->usuario->email : 'Sin dueño' }}</td>
                            <td>{{ $mascota->estado->nombre }}</td>
                            <td>{{ $mascota->raza->nombre }}</td>
                            <td>
                                @if ($mascota->foto)
                                    <img src="{{ asset('images/admin/fotos_mascotas/' . $mascota->foto) }}" alt="Foto de la Mascota" width="100">
                                @else
                                    <img src="{{ asset('images/admin/imagen.png') }}" alt="Foto default" width="100">
                                @endif
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('mascotas.edit', $mascota->id_mascota)}}" class="btn btn-warning me-2">Editar</a>
                                    <form action="{{route('mascotas.destroy', $mascota->id_mascota)}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
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
    
            {{--{{ $mascotas->links() }}--}}
        </div>
    </div>
@endsection
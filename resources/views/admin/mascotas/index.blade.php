@extends('layouts.master')
@section('title', 'Mascotas')
@section('content')
    <div class="container">
        <h2 class="mih2">MASCOTAS</h2>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('administrador') }}" class="btn boton-volver me-2"><i class="bi bi-arrow-left"></i>Volver</a>
                <a href="{{ route('mascotas.create') }}" class="btn boton-nuevo me-2">Nueva Mascota</a>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <form action="{{ route('mascotas.filtrar') }}" method="POST">
                    @csrf
                    <label for="categoria">Categoría:</label>
                    <div class="row">
                        <div class="col-md-3">
                            <input type="checkbox" name="categoria[]" value="Macho"> Macho
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" name="categoria[]" value="Hembra"> Hembra
                        </div>
                        <div class="col-md-4">
                            <input type="checkbox" name="categoria[]" value="Disponible"> Disponible
                        </div>
                        <div class="col-md-1">
                            <button type="submit"><i class="bi bi-funnel"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container mt-4">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr style="background-color: #CDC4BC">
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Tamaño</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Tipo</th>
                        <th>Dueño</th>
                        <th>Estado</th>
                        <th>Raza</th>
                        
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mascotas as $mascota)
                        <tr>
                            <td class="align-middle" width="150" height="150">
                                @if ($mascota->foto)
                                    <img src="{{ asset('images/admin/fotos_mascotas/' . $mascota->foto) }}"
                                        alt="Foto de la Mascota"  class="img-thumbnail">
                                @else
                                    <img src="{{ asset('images/admin/imagen.png') }}" alt="Foto default">
                                @endif
                            </td>
                            <td class="align-middle">{{ $mascota->nombre }}</td>
                            <td class="align-middle">{{ $mascota->tamano }}</td>
                            <td class="align-middle">{{ $mascota->edad }}</td>
                            <td class="align-middle">{{ $mascota->sexo }}</td>
                            <td class="align-middle">{{ $mascota->tipo->nombre }}</td>
                            <td class="align-middle">{{ $mascota->usuario ? $mascota->usuario->email : 'Sin dueño' }}</td>
                            <td class="align-middle">{{ $mascota->estado->nombre }}</td>
                            <td class="align-middle">{{ $mascota->raza->nombre }}</td>
                            
                            <td class="align-middle">
                                <div class="d-flex">
                                    <a href="{{ route('mascotas.edit', $mascota->id_mascota) }}"
                                        class="btn boton-editar me-2"><i class="bi bi-pencil-square"></i></a>
                                    <form action="{{ route('mascotas.destroy', $mascota->id_mascota) }}" method="POST"
                                        onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
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

            {{-- {{ $mascotas->links() }} --}}
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('title', 'Nueva Mascota')

@section('content')
    <div class="container mt-4">
        <h1>Nueva Mascota</h1>
        <a href="{{ route('mascotas.index') }}" class="btn btn-primary">Volver</a>
        <form action="{{ route('mascotas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">

                <label for="id_estadomascota" class="form-label">Estado de la Mascota</label>

                <select class="form-select" id="id_estadomascota" name="id_estadomascota" required>

                    @foreach ($estados as $estado)
                        <option value="{{ $estado->id_estadomascota }}">{{ $estado->nombre }}</option>
                    @endforeach
                </select>
            </div>

            {{-- Diseñando el filtraje cuando se seleccione el tipo de mascota --}}
            <div class="mb-3">
                <label for="id_tipomascota" class="form-label">Tipo de Mascota</label>
                <select class="form-select" id="id_tipomascota" name="id_tipomascota" required>
                    @foreach ($tipos as $tipo)
                        <option value="{{ $tipo->id_tipomascota }}">{{ $tipo->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="id_raza" class="form-label">Raza de Mascota</label>
                <select class="form-select" id="id_raza" name="id_raza" required>
                    @include('admin.mascotas.raza_option')
                </select>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>

                <div class="gender-selector">
                    <label>
                        <input type="radio" name="sexo" value="Macho">
                        <span class="gender-circle male"></span> Macho
                    </label>

                    <label>
                        <input type="radio" name="sexo" value="Hembra">
                        <span class="gender-circle female"></span> Hembra
                    </label>
                </div>
            </div>


            <div class="mb-3">
                <label for="tamano" class="form-label">Tamaño</label>
                <input type="text" class="form-control" id="tamano" name="tamano" required>
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" required>
            </div>

            <div class="mb-3">
                <label for="id_usuario" class="form-label">Correo del usuario</label>
                <select class="form-select" id="id_usuario" name="id_usuario" >
                    <option value="">Sin Dueño</option>
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id_usuario }}">{{ $usuario->email }}</option>
                    @endforeach
                </select>
            </div>
            


            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>



            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
@endsection

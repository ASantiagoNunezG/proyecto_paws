@extends('layouts.master')
@section('title', 'Editar Mascota')
@section('content')
    <div class="container">
        <h2 class="mih2">EDITAR MASCOTA</h2>
        <div class="row">
            <div style="margin-bottom: 30px">
                <a href="{{ route('mascotas.index') }}" class="btn boton-volver me-2"><i class="bi bi-arrow-left"></i>Volver</a>
            </div>
            <form action="{{ route('mascotas.update', $mascota->id_mascota) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row" style="background-color: #F0F1F1;padding:3%">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="id_estadomascota" class="form-label">Estado de la Mascota</label>
                            <select class="form-select" id="id_estadomascota" name="id_estadomascota" required>
                                @foreach ($estados as $estado)
                                    <option value="{{ $estado->id_estadomascota }}"  @if ($estado->id_estadomascota == $mascota->id_mascota) {{'selected'}} @endif>
                                        {{ $estado->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
            
                        <div class="mb-3">
                            <label for="id_tipomascota" class="form-label">Tipo de Mascota</label>
                            <select class="form-select" id="id_tipomascota" name="id_tipomascota" required>
                                @foreach ($tipos as $tipo)
                                    <option value="{{ $tipo->id_tipomascota }}"  @if ($tipo->id_tipomascota == $mascota->id_mascota) {{'selected'}} @endif>
                                        {{ $tipo->nombre }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
            
                        <div class="mb-3">
                            <label for="id_raza" class="form-label">Raza de Mascota</label>
                            <select class="form-select" id="id_raza" name="id_raza" required>
                                @include('admin.mascotas.raza_option', ['selectedRaza' => $mascota->id_raza])
                            </select>
                        </div>
                        <div class="mb-3" style="margin-right: 40%">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                        <div class="mb-3" style="text-align: left">
                            <h6>Foto actual de la mascota</h6>
                            @if ($mascota->foto)
                                <img src="{{ asset('images/admin/fotos_mascotas/' . $mascota->foto) }}" alt="Foto actual de la mascota" style="width: 50%; height: auto;">
                            @endif
                        </div>
                        <button type="submit" class="btn boton-guardar">Guardar</button>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $mascota->nombre }}" required>
                        </div>
            
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
            
                            <div class="gender-selector">
                                <label>
                                    <input type="radio" name="sexo" value="Macho" {{ $mascota->sexo === 'Macho' ? 'checked' : '' }}>
                                    <span class="gender-circle male"></span> Macho
                                </label>
            
                                <label>
                                    <input type="radio" name="sexo" value="Hembra" {{ $mascota->sexo === 'Hembra' ? 'checked' : '' }}>
                                    <span class="gender-circle female"></span> Hembra
                                </label>
                            </div>
                        </div>
            
                        <div class="mb-3">
                            <label for="tamano" class="form-label">Tamaño</label>
                            <input type="text" class="form-control" id="tamano" name="tamano" value="{{ $mascota->tamano }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad</label>
                            <input type="text" class="form-control" id="edad" name="edad" value="{{ $mascota->edad }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="id_usuario" class="form-label">Correo del usuario</label>
                            <select class="form-select" id="id_usuario" name="id_usuario">
                                <option value="">Seleccionar Usuario</option>
                                @foreach ($usuarios as $usuario)
                                    <option value="{{ $usuario->id_usuario }}" @if ($usuario->id_usuario == $mascota->id_usuario) {{'selected'}} @endif>{{ $usuario->email }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>       
    </div>
@endsection

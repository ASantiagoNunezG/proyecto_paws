@extends('layouts.master')
@section('title', 'Información del usuario')
@section('content')
    <div class="container">
        <a href="{{ route('usuarios.index') }}" class="btn boton-volver mb-3"><i class="bi bi-arrow-left"></i>Volver</a>
        <div class="row" style="border:1px solid ">
            <div class="col-md-4 d-flex align-items-center justify-content-center" style="border: 1px solid; background-color: #C5A78F">
                <div style="text-align: center">
                    <h5>Foto del usuario</h5>
                    @if ($usuario->foto)
                        <img src="{{ asset('images/admin/fotos_usuarios/' . $usuario->foto) }}" alt="Foto del usuario" class="img-fluid">
                    @else
                        <img src="{{ asset('images/admin/usuario_default.jpg') }}" alt="Foto del usuario por defecto">
                    @endif
                </div>
            </div>
            
            <div class="col-md-8" style="border:1px solid; background-color:#CDC4BC">
                <div class="row">
                    <h2 class="mih2"> Información del usurio</h2>
                    <div class="col-3">
                        <p><strong>Nombres:</strong></p>
                        <p><strong>Apellidos:</strong></p>
                        <p><strong>Correo Electrónico:</strong></p>
                        <p><strong>Celular:</strong></p>
                        <p><strong>Tipo de documento:</strong></p>
                        <p><strong>N° de documento:</strong></p>
                    </div>
                    <div class="col-9">
                        <p>{{ $usuario->name }}</p>
                        <p>{{ $usuario->apellido }}</p>
                        <p>{{ $usuario->email }}</p>
                        <p>{{ $usuario->celular }}</p>
                        <p>{{ $usuario->id_tipo_doc }}</p>
                        <p>{{ $usuario->num_documento }}</p>
                    </div>
                </div>
                <div>
                    <a href="{{route('usuarios.edit', $usuario->id_usuario)}}" class="btn boton-editar"> Editar</a>
                </div>
                <br>
            </div>
        </div>
    </div>
@endsection

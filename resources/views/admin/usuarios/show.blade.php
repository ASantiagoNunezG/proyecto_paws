@extends('layouts.master')
@section('title', 'Información del usuario')
@section('content')
    <div class="container">
        <a href="{{route('usuarios.index')}}" class="btn btn-primary mb-3">Volver</a>
        <div class="row" style="border:1px solid ">
            <div class="col-md-4" style="border:1px solid">
                <div style="text-align: center">
                    @if ($usuario->foto)
                        <img src="{{ asset('images/admin/fotos_usuarios/' . $usuario->foto) }}" alt="Foto del usuario" class="img-fluid">
                    @else
                        <img src="{{asset('images/admin/usuario_default.jpg')}}" alt="Foto del usuario por defecto">
                    @endif
                    
                </div>
                
                <div class="col-md-4">
                    <button onclick="mostrarFormulario()" class="btn btn-primary mb-3">Actualizar foto</button>
                    <div id="formularioFoto" style="display: none;">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto">
                        <button type="submit">Guardar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="border:1px solid ">
                <h2> Información del usurio</h2>
                <p><strong>Nombres:</strong> {{ $usuario->name }}</p>
                <p><strong>Apellidos:</strong> {{ $usuario->apellidos }}</p>
                <p><strong>Correo Electrónico:</strong> {{ $usuario->email }}</p>
                <p><strong>Celular:</strong> {{ $usuario->celular }}</p>
                <p><strong>Tipo de documento:</strong> {{$usuario-> id_tipo_doc}}</p>
                <p><strong>N° de documento:</strong> {{$usuario->num_documento}}</p>
                <div>
                    <a href="{{route('usuarios.edit', $usuario->id_usuario)}}" class="btn btn-primary mb-3"> Editar</a>
                </div>
            </div>
        </div>
    </div>
    {{--<script>
        function mostrarFormulario() {
            var formularioFoto = document.getElementById('formularioFoto');
            formularioFoto.style.display = 'block';
        }
    </script>--}}
@endsection

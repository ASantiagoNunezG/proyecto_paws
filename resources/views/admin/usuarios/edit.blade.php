@extends('layouts.master')
@section('title', 'Editar usuario')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mih2">Modificando información del usuario</h1>
            </div>
            <div class="col-12">
                <a href="{{ route('usuarios.index') }}" class="btn boton-volver mb-3">Volver</a>
            </div>
            <div class="col">
                <form action="{{ route('usuarios.update', $usuarios->id_usuario) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row" style="background-color: #F0F1F1; padding:10px">
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="name">Nombres</label><br>
                                <input type="text" name="name" id="name" required value="{{ $usuarios->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="apellido">Apellidos</label><br>
                                <input type="text" name="apellido" id="apellido" value="{{ $usuarios->apellido }}">
                            </div>
                            <div class="mb-3">
                                <label for="email">Correo</label><br>
                                <input type="email" name="email" id="email" required value="{{ $usuarios->email }}">
                            </div>

                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="celular">Numero de celular</label><br>
                                <input type="text" name="celular" id="celular" value="{{ $usuarios->celular }}">
                            </div>
                            <div class="mb-3">
                                <label for="id_tipo_doc">Tipo de documento</label><br>
                                <input type="text" name="id_tipo_doc" id="id_tipo_doc" value="{{ $usuarios->id_tipo_doc }}">
                            </div>
                            <div class="mb-3">
                                <label for="num_documento">Número de documento</label><br>
                                <input type="text" name="num_documento" id="num_documento" value="{{ $usuarios->num_documento }}">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="foto">Foto</label><br>
                                <input type="file" name="foto" id="foto">
                            </div>
                            <div class="mb-3" style="text-align: left">
                                <h6>Foto actual del usuario</h6>
                                @if ($usuarios->foto)
                                    <img src="{{ asset('images/admin/fotos_usuarios/' . $usuarios->foto) }}" alt="Foto actual del usuario" style="width: 50%; height: auto;">
                                @endif
                            </div>
                        </div>
                        <div class="col-2" >
                            <img src="{{asset('images/admin/gatito_pata.png')}}" alt="" width="200px">
                        </div>
                    </div>
                    <button type="submit" class="btn boton-guardar mb-3" style="margin-top: 10px">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

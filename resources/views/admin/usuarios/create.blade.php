@extends('layouts.master')
@section('title', 'Nuevo usuario')
@section('content')
    <div>
        <div>
            <h1>Registrando a un nuevo usuario</h1>
        </div>
        <div>
            <a href="{{route('usuarios.index')}}" class="btn btn-primary mb-3">Volver</a>
        </div>
        <div>
           
            <form action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="name">Nombres</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div>
                    <label for="apellido">Apellidos</label>
                    <input type="text" name="apellido" id="apellido" required>
                </div>
                <div>
                    <label for="email">Correo</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="celular">Numero de celular</label>
                    <input type="text" name="celular" id="celular" required>
                </div>
                <div>
                    <label for="id_tipo_doc">Tipo de documento</label>
                    <input type="text" name="id_tipo_doc" id="id_tipo_doc" required>
                </div>
                <div>
                    <label for="num_documento">Número de documento</label>
                    <input type="text" name="dum_documento" id="dum_documento" required>
                </div>
                
                <div>
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
            </form>
        </div>
    </div>
@endsection

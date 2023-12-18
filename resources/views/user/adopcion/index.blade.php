@extends('layouts.navbar')  <!-- Ajusta el nombre de la plantilla según tu estructura de vistas -->
<link rel="stylesheet" href="{{ asset('css/sindell.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

@section('content')
<h1>Hola</h1>
<h1 class="text-center mt-5 subtitulo">NUESTRAS MASCOTAS EN ADOPCIÓN</h1>
<div class="container mt-5">
        <!-- Lista de mascotas -->
        <div class="col-md">
            <div class="row" id="listaMascotas">
                <!-- Aquí irá tu bucle de mascotas, puedes agregar una clase o data-atributo a cada mascota para facilitar el filtrado con JavaScript -->
                @foreach($mascotas as $mascota)
                    <div class="col-md-3 mb-3">
                        <div class="card h-100" id="efecto-levantamiento">
                            <img src="{{ asset($mascota->foto) }}" class="card-img-top img-fluid mascota-img" alt="Foto de la mascota" style="height: 200px;">
                            <div class="card-body">
                                <h4 class="card-title text-center">{{ $mascota->nombre }}</h4>
                                <h6>Tamaño: {{ $mascota->tamano }}</h6>
                                <h6>Edad: {{ $mascota->edad }}</h6>
                                <h6>Sexo: {{ $mascota->sexo }}</h6>
                                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                    @if($mascota->estadoMascota)
                                        @if($mascota->estadoMascota->id_estadomascota == 2)
                                            <button class="btn btn-secondary btn-custom" type="button" disabled>
                                                {{ $mascota->estadoMascota->nombre }}
                                            </button>
                                        @else
                                            <a class="btn btn-primary btn-custom" id="btn-2" type="btn" href="{{ route('adopcion.show', $mascota->id_mascota) }}">{{ $mascota->estadoMascota->nombre }}</a>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
</div>

@endsection



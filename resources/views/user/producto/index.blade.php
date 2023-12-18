@extends('layouts.navbar')  <!-- Ajusta el nombre de la plantilla según tu estructura de vistas -->
<link rel="stylesheet" href="{{ asset('css/sindell.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

@section('content')
<h1>Hola</h1>
<h1 class="text-center mt-5 subtitulo">¡PROXIMAMENTE PRODUCTOS!</h1>
<div class="container mt-5">
        <!-- Lista de mascotas -->
        <div class="col-md">
            <div class="row" id="listaMascotas">
                @foreach($productos as $producto)
                    <div class="col-md-3 mb-3">
                        <div class="card" id="efecto-levantamiento">
                            <img src="{{ asset($producto->foto) }}" class="card-img-top mx-auto"
                            style="height: 150px; width: 150px;display: block;">
                            <div class="card-body text-center">
                                <h6>{{ $producto->nombre }}</h6>
                                <p>S/. {{ $producto->precio }}</p>
                                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                    <a href="#" class="btn btn-primary" id="btn-2">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</div>

@endsection
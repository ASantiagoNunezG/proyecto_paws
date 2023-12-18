@extends('layouts.navbar')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/sindell.css') }}">
<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">


<div class="container">

    <h1 class="text-center mt-5">Mascota: {{ $mascota->nombre }}</h1>

    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{ asset($mascota->foto) }}" class="card-img-top" alt="Foto de la mascota">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Información de la Mascota</h5>
                    <br>
                    <p class="card-text">Tamaño: {{ $mascota->tamano }}</p>
                    <p class="card-text">Edad: {{ $mascota->edad }}</p>
                    <p class="card-text">Sexo: {{ $mascota->sexo }}</p>
                    <p class="card-text">Tipo de Mascota: {{ $mascota->TipoMascota->nombre }}</p>
                    <p class="card-text">Estado de la mascota: Listo para Adoptar</p>
                    <p class="card-text">Tipo de raza: {{ $mascota->Raza->nombre }}</p>
                    <hr>
                    <h5 class="card-title font-weight-bold">Descripción:</h5>
                    <p class="card-text">{{ $mascota->descripcion }}</p>
                    <div class="text-center">
                        <button class="btn btn-primary mt-3" id="btn-2" type="button" data-bs-toggle="modal" data-bs-target="#modalReserva">
                            Reservar adopción
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    <!-- Modal para el formulario de reserva -->
    <div class="modal" id="modalReserva" tabindex="-1" role="dialog" aria-labelledby="modalReservaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalReservaLabel">Reservar adopción</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de reserva -->
                    <form action="{{ route('adopcion.reserva') }}" method="post">
                        @csrf
                    
                        <!-- Campo deshabilitado para el nombre del usuario -->
                        <div class="form-group">
                            <label for="nombre_usuario" class="form-label">Nombre del Usuario:</label>
                            <input type="text" name="nombre_usuario" class="form-control" value="{{ Auth::user()->name }}" disabled>
                        </div>
                    
                        <!-- Campo deshabilitado para el nombre de la mascota -->
                        <div class="form-group">
                            <label for="nombre_mascota" class="form-label">Nombre de la Mascota:</label>
                            <input type="text" name="nombre_mascota" class="form-control" value="{{ $mascota->nombre }}" disabled>
                        </div>

                        <div class="form-group">
                            <label for="fecha" class="form-label">Fecha:</label>
                            <input type="date" name="fecha" class="form-control" min="{{ date('Y-m-d') }}" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="hora" class="form-label">Hora:</label>
                            <input type="time" name="hora" class="form-control" min="09:00" max="18:00" required>
                        </div>
                    
                        <!-- Campos ocultos para obtener el ID del usuario y la mascota -->
                        <input type="hidden" name="id_usuario" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="id_mascota" value="{{ $mascota->id_mascota }}">
                    
                        <button type="submit" class="btn btn-success mt-3" id="btn-2">Reservar Mascota</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Bloquear fechas pasadas en el campo de fecha
    document.querySelector('input[name="fecha"]').addEventListener('input', function() {
        var today = new Date().toISOString().split('T')[0];
        if (this.value < today) {
            this.setCustomValidity('No puedes seleccionar fechas pasadas');
        } else {
            this.setCustomValidity('');
        }
    });

    // Establecer un rango de horario en el campo de hora
    document.querySelector('input[name="hora"]').addEventListener('input', function() {
        var minTime = '08:00';
        var maxTime = '18:00';
        if (this.value < minTime || this.value > maxTime) {
            this.setCustomValidity('El horario de atención es desde las 09:00am hasta las 18:00pm');
        } else {
            this.setCustomValidity('');
        }
    });
</script>
@endsection

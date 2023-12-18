@extends('layouts.master')
@section('title', 'Agendar cita')
@section('content')
    @if (Session::has('alert'))
        <div class="alert alert-{{ Session::get('alert.type') }}">
            {{ Session::get('alert.message') }}
        </div>
    @endif
    <div class="container">
        <h2 class="mih2">AGENDANDO CITA</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="col" style="margin-bottom: 10px">
                    <a href="{{ route('citas.index') }}" class="btn boton-volver me-2"><i
                            class="bi bi-arrow-left"></i>Volver</a>
                </div>
                <div class="row" style='height:200px'>

                    <div class="col-8">

                        <form action="{{ route('citas.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="fecha" class="form-label">Fecha:</label>
                                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="hora" class="form-label">Hora:</label>
                                        <input type="time" class="form-control" id="hora" name="hora" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="id_mascota" class="form-label">Mascota:</label>
                                        <select class="form-control" id="id_mascota" name="id_mascota" required>
                                            @foreach ($mascotas as $mascota)
                                                <option value="{{ $mascota->id_mascota }}">{{ $mascota->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="id_usuario" class="form-label">Usuario:</label>
                                        <select class="form-control" id="id_usuario" name="id_usuario" required>
                                            @foreach ($usuarios as $usuario)
                                                <option value="{{ $usuario->id_usuario }}">{{ $usuario->email }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                            </div>
                            <div class="col-3" hidden>
                                <label for="id_estadoreserva" class="form-label">Estado de la reserva</label>
                                <input type="number" class="form-control" id="id_estadoreserva" name="id_estadoreserva"
                                    value="1">
                            </div><br><br>
                            <button type="submit" class="btn boton-guardar">Guardar</button>
                        </form>
                    </div>
                    <div class="col-4" >
                        <div class="row" style="width: 326px">
                            <div class="col">
                                <img src="{{ asset('images/admin/perro_lapiz.png') }}" alt="" style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener la fecha y hora actuales en el formato necesario para los campos de entrada
            var fechaActual = new Date().toISOString().split('T')[0];

            var opcionesHora = {
                hour: '2-digit',
                minute: '2-digit',
                timeZone: 'America/Lima'
            };

            var horaActual = new Date().toLocaleTimeString('es', opcionesHora);

            // Establecer los valores iniciales en los campos de entrada
            document.getElementById('fecha').value = fechaActual;
            document.getElementById('hora').value = horaActual;
        });
    </script>
@endsection()

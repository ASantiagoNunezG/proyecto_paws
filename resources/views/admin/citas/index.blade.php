@extends('layouts.master')
@section('title', 'Citas')
@section('content')
    @if (session('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    setTimeout(function() {
                        var alert = document.getElementById('success-alert');
                        alert.classList.add('fade');
                        alert.classList.remove('show');

                        // Elimina la alerta después de la animación de desvanecimiento
                        setTimeout(function() {
                            alert.remove();
                        }, 150); // Ajusta este valor según sea necesario
                    }, 3000); // 5000 milisegundos = 5 segundos
                });
            </script>
        </div>
    @endif
    <div class="container">
        <h2 class="mih2">CITAS DE ADOPCIÓN</h2>
        <div class="row">
            <div class="col" style="margin-bottom: 10px">
                <a href="{{ route('administrador') }}" class="btn boton-volver me-2"><i
                        class="bi bi-arrow-left"></i>Volver</a>
                <a href="{{ route('citas.create') }}" class="btn boton-nuevo">Agendar nueva cita</a>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr style="background-color: #CDC4BC">
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Usuario</th>
                                <th>Mascota</th>
                                <th>Estado de Reserva</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($citas as $cita)
                                <tr>
                                    <td>{{ $cita->fecha }}</td>
                                    <td>{{ $cita->hora }}</td>
                                    <td>{{ $cita->usuario->name }}</td>
                                    <td>{{ $cita->mascota->nombre }}</td>
                                    <td>{{ $cita->reserva->nombre }}</td>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <button type="button" class="btn boton-editar me-2" data-bs-toggle="modal"
                                                data-bs-target="#formularioModal{{ $cita->id_citamascota }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <form action="{{ route('citas.destroy', $cita->id_citamascota) }}"
                                                method="POST"
                                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este producto?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn boton-eliminar"><i class="bi bi-trash"></i></button>
                                            </form>
                                            @include('admin.citas.edit')
                                            
                                        </div>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection()

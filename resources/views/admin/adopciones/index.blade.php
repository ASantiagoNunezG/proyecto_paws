@extends('layouts.master')
@section('title', 'Adopciones')
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
        <h2>ADOPCIONES</h2>
        <div class="row">
            <div class="col">
                <a href="{{ route('administrador') }}" class="btn boton-volver me-2"><i
                        class="bi bi-arrow-left"></i>Volver</a>
                <a href="{{ route('adopciones.create') }}" class="btn boton-nuevo me-2">Nueva adopción</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Fecha</th>

                            <th>Mascota</th>
                            <th>Usuario</th>
                            <th>Empleado</th>
                            <th>Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($adopciones as $adopcion)
                            <tr>
                                <td>{{ $adopcion->fecha }}</td>
                                <td>{{ $adopcion->mascota->nombre }}</td>
                                <td>{{ $adopcion->usuario->name }}</td>
                                <td>{{ $adopcion->empleado->nombre }}</td>
                                <th>
                                    <div class="d-flex">
                                        
                                        <button type="button" class="btn boton-info me-2" data-bs-toggle="modal"
                                            data-bs-target="#ver_info{{ $adopcion->id_historialadop }}">
                                            <i class="bi bi-info-circle"></i>
                                        </button>
                                        <form action="{{ route('adopciones.destroy', $adopcion->id_historialadop) }}"
                                            method="POST"
                                            onsubmit="return confirm('¿Estás seguro de que deseas eliminar el registro de adopcion?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn boton-eliminar"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>
                            
                                    @include('admin.adopciones.show')
                                </th>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection()

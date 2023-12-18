@extends('layouts.master')
@section('title', 'Citas')
@section('content')
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
                                    <td class="align-middle">{{ $cita->fecha }}</td>
                                    <td class="align-middle">{{ $cita->hora }}</td>
                                    <td class="align-middle">{{ $cita->usuario->email }}</td>
                                    <td class="align-middle">{{ $cita->mascota->nombre }}</td>
                                    <td class="align-middle">{{ $cita->reserva->nombre }}</td>
                                    <td class="align-middle">
                                        <div class="d-flex">
                                            <button type="button" class="btn boton-editar me-2" data-bs-toggle="modal"
                                                data-bs-target="#formularioModal{{ $cita->id_citamascota }}">
                                                <i class="bi bi-pencil-square"></i>
                                            </button>
                                            <form action="{{ route('citas.destroy', $cita->id_citamascota) }}" method="POST"
                                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este registro?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn boton-eliminar"><i class="bi bi-trash"></i></button>
                                            </form>
                                            {{--<form id="deleteForm" action="{{ route('citas.destroy', $cita->id_citamascota) }}" method="POST" style="display: inline;" onsubmit="return confirmDelete(event)">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn boton-eliminar">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>--}}
                                            
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
    <script>
        function confirmDelete(event) {
            // Prevenir el envío automático del formulario
            event.preventDefault();
    
            // Utiliza SweetAlert para mostrar un modal de confirmación
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¡No podrás revertir esto!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminarlo'
            }).then((result) => {
                // Si el usuario hace clic en el botón de confirmación, envía el formulario manualmente
                if (result.isConfirmed) {
                    document.getElementById('deleteForm').submit();
                }
            });
        }
    </script>
@endsection()

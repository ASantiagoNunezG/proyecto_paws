<div class="modal fade" id="ver_info{{ $adopcion->id_historialadop }}" tabindex="-1" aria-labelledby="formularioModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="titulo-modal" id="formularioModalLabel">Información de la adopción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding:1%;">
                <div class="container" style="background-color: #F0F1F1;padding:5%;background-image:url('{{asset('images/admin/paws4.png')}}')">
                    <div class="row" style="background-color: white; padding:3%;border:2px solid black">
                        <div class="col-6" style="margin-left:10%">
                            <div>
                                <p>INFORMACIÓN DE LA MASCOTA</p>
                                <strong>Nombre de la mascota:</strong> {{ $adopcion->mascota->nombre }}<br>
                                <strong>Tamaño de la mascota:</strong> {{ $adopcion->mascota->tamano }}<br>
                                <strong>Edad de la mascota:</strong> {{ $adopcion->mascota->edad }}<br>
                                <strong>Sexo de la mascota:</strong> {{ $adopcion->mascota->sexo }}<br>
                                <P></P>
                            </div>
                            <div>
                                <p>INFORMACIÓN DEL USUARIO</p>
                                <strong>Nombre del adoptante:</strong> {{ $adopcion->usuario->name }}<br>
                                <strong>Correo del adoptante:</strong> {{ $adopcion->usuario->email }}<br>
                                <P></P>
                            </div>
                            <div>
                                <P>INFORMACIÓN DEL EMPLEADO</P>
                                <strong>Nombre del empleado:</strong> {{ $adopcion->empleado->nombre }}<br>
                                <strong>Apellido del empleado:</strong> {{ $adopcion->empleado->apellido }}<br>
                                <strong>Correo del empleado:</strong> {{ $adopcion->empleado->correo }}<br>
                                <P></P>
                            </div>
                        </div>

                        <div class="col-3" style="text-align: center; width: 300px; height: 300px;">
                            <h6>Foto actual de la mascota</h6>
                            @if ($adopcion->mascota->foto)
                                <img src="{{ asset('images/admin/fotos_mascotas/' . $adopcion->mascota->foto) }}"
                                    alt="Foto actual de la mascota" style="width: 100%; height: 100%; object-fit: cover;">
                            @endif
                        </div>
                        <div class="col-12" style="text-align: center">
                            <button type="button" class="btn boton-cerrar" data-bs-dismiss="modal">Cerrar</button> 
                        </div>

                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
{{-- Necesito arreglar esto --}}

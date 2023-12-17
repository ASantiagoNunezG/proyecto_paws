<div class="modal fade" id="ver_info{{ $adopcion->id_historialadop }}" tabindex="-1" aria-labelledby="formularioModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formularioModalLabel">Información de la adopción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div>
                                {{ $adopcion->mascota->nombre }}
                                {{ $adopcion->mascota->tamano }}
                                {{ $adopcion->mascota->edad }}
                                {{ $adopcion->mascota->foto }}
                                {{ $adopcion->mascota->sexo }}
                            </div>
                            <div>
                                {{ $adopcion->usuario->name }}
                                {{ $adopcion->usuario->email }}
                            </div>

                        </div>

                        <div class="col-6" style="text-align: left" style="width: 100%; height: 100px;">
                            <h6>Foto actual de la mascota</h6>
                            @if ($adopcion->mascota->foto)
                                <img src="{{ asset('images/admin/fotos_mascotas/' . $adopcion->mascota->foto) }}"
                                    alt="Foto actual de la mascota" width="100%", height="100%">
                            @endif
                        </div>

                        <div>
                            {{ $adopcion->empleado->nombre }}
                            {{ $adopcion->empleado->apellido }}
                            {{ $adopcion->empleado->correo }}
                        </div>
                    </div>
                </div>
                <button type="button" class="btn boton-cerrar" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
{{-- Necesito arreglar esto --}}

<div class="modal fade" id="formularioModal{{ $cita->id_citamascota }}" tabindex="-1"
    aria-labelledby="formularioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formularioModalLabel">Modificar la cita de adopción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('citas.update', $cita->id_citamascota) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6">
                            <div class="col-12">
                                <label for="fecha" class="form-label">Fecha</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" required
                                    value="{{ $cita->fecha }}">
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="hora" class="form-label">Hora</label>
                                    <input type="time" class="form-control" id="hora" name="hora" required
                                        value="{{ $cita->hora }}">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="id_estadoreserva" class="form-label">Estado de la reserva</label>
                                <select class="form-control" id="id_estadoreserva" name="id_estadoreserva" required>
                                    @foreach ($reservas as $reserva)
                                        <option value="{{ $reserva->id_estadoreserva }}">{{ $reserva->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div style="text-align: center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        <div class="col-6">
                            
                                <img src="{{asset('images/admin/guino.png')}}" alt="" width="450px">
                        
                        </div>
                        
                    </div>
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>

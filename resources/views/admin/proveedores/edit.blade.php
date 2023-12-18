{{--modal de edicion--}}
<div class="modal fade" id="editModal{{ $proveedor->id_proveedor }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="titulo-modal" id="editModalLabel">Editar Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('proveedores.update', $proveedor->id_proveedor) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required value="{{ $proveedor->nombre }}">
                    </div>

                    <div class="mb-3">
                        <label for="ruc" class="form-label">RUC</label>
                        <input type="text" class="form-control" id="ruc" name="ruc" required value="{{ $proveedor->ruc }}">
                    </div>

                    <div class="mb-3">
                        <label for="telefono" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required value="{{ $proveedor->telefono }}">
                    </div>

                    <div>
                        <button type="submit" class="btn boton-guardar">Guardar</button>
                        <button type="button" class="btn boton-cerrar" data-bs-dismiss="modal">Cerrar</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--Fin modla de edicion--}}
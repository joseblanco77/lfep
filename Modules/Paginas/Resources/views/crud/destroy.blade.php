<!-- /.modal -->
<div class="modal fade" id="pagina-destroy-{{ $pagina->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                <i class="fa fa-warning"></i> Confirmar acción </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Eliminar la pagina <strong>{{ $pagina->nombre }} {{ $pagina->apellido }}</strong>?</p>
            </div>
            <div class="modal-footer">
                {{ Form::open(['route' => ['cajaverde.paginas.destroy', $pagina->id], 'role' => 'form', 'method' => 'DELETE']) }}
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Sí, eliminar</button>
                {{ Form::close() }}
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

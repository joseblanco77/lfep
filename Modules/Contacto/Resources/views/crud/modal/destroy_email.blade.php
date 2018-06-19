<!-- /.modal -->
<div class="modal fade" id="email-destroy-{{ $email->id }}">
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
                <p>¿Eliminar el email <strong>{{ $email->email }}</strong>?</p>
            </div>
            <div class="modal-footer">
                {{ Form::open(['route' => ['cajaverde.contacto.email.destroy', $email->id], 'role' => 'form', 'method' => 'DELETE']) }}
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

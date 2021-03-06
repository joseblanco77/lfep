<!-- /.modal -->
<div class="modal fade" id="role-destroy-{{ $usuario->id }}">
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
                <p>¿Revocar el rol {{ $rol->name }} al usuario <strong>{{ $usuario->nombre }} {{ $usuario->apellido }}</strong>?</p>
            </div>
            <div class="modal-footer">
                {{ Form::open(['route' => ['cajaverde.roles.destroy', $usuario->id], 'role' => 'form', 'method' => 'DELETE']) }}
                <input type="hidden" name="rol" value="{{ $rol->name }}">
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

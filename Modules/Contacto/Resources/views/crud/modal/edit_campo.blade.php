<!-- The Modal -->
<div class="modal fade" id="campo-edit-{{ $campo->id }}">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Campo «{{ $campo->nombre }}»</h4>
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>


            {!! Form::model($campo, ['route' => ['cajaverde.contacto.campo.update', $campo->id], 'method' => 'patch']) !!}
            @include('contacto::crud.modal.form_campo')
            {!! Form::close() !!}
        </div>
    </div>
</div>
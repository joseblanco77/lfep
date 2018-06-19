<!-- The Modal -->
<div class="modal fade" id="contactoEmailModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Nuevo destinatario</h4>
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>


            {!! Form::open(['route' => 'cajaverde.contacto.email.store']) !!}
            @include('contacto::crud.modal.form_email')
            {!! Form::close() !!}
        </div>
    </div>
</div>
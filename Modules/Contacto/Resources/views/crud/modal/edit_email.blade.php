<!-- The Modal -->
<div class="modal fade" id="email-edit-{{ $email->id }}">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">E-mail «{{ $email->email }}»</h4>
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>


            {!! Form::model($email, ['route' => ['cajaverde.contacto.email.update', $email->id], 'method' => 'patch']) !!}
            @include('contacto::crud.modal.form_email')
            {!! Form::close() !!}
        </div>
    </div>
</div>
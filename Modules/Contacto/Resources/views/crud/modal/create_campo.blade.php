<!-- The Modal -->
<div class="modal fade" id="contactoCampoModal_{{ $tipo }}">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Nuevo campo tipo {{ $tipo }}</h4>
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
            </div>


            {!! Form::open(['route' => 'cajaverde.contacto.campo.store']) !!}
            @include('contacto::crud.modal.form_campo')
            {!! Form::close() !!}
        </div>
    </div>
</div>
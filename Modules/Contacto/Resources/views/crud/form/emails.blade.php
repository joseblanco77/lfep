<fieldset id="form_emails">

    <legend>Destinatarios</legend>

    <button type="button" class="btn btn-primary" id="agregar_email_to" data-toggle="modal" data-target="#contactoEmailModal">Agregar email <i class="fa fa-plus"></i></button>

    <table class="table">
        <tr>
            <th>Email</th>
            <th>Tipo</th>
            <th>Opciones</th>
        </tr>
        @forelse($formulario->emails->sortByDesc('tipo') as $type => $email)
        <tr>
            <td>
                <strong>{{ $email->email }}</strong>
            </td>
            <td>
                <code>{{ $email->tipo }}</code>
            </td>
            <td>
                <a class="btn btn-info btn-sm rounded-s" href="#" data-toggle="modal" data-target="#email-edit-{{ $email->id }}"><i class="fa fa-edit"></i> Editar</a>
                @hasrole('admin_contact_forms')
                <a class="btn btn-danger btn-sm rounded-s" href="#" data-toggle="modal" data-target="#email-destroy-{{ $email->id }}"><i class="fa fa-trash-o"></i> Eliminar</a>
                @include('contacto::crud.modal.destroy_email')
                @endhasrole
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3">
                No hay destinatarios definidos
            </td>
        </tr>
        @endforelse
    </table>

</fieldset>

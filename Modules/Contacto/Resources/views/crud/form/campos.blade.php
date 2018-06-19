<fieldset>

    <legend>Campos del formulario</legend>

    @foreach($campos as $tipo => $id)
    <button type="button" class="btn btn-primary" data-tipo="{{ $tipo }}" data-formulario="{{ $formulario->id }}" data-toggle="modal" data-target="#contactoCampoModal_{{ $tipo }}">{{ title_case($tipo) }} <i class="fa fa-plus"></i></button>
    @endforeach

    <table class="table">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Obligatorio</th>
            <th>Opciones</th>
        </tr>
        @forelse($formulario->campos as $campo)
        <tr>
            <td>
                <strong>{{ $campo->nombre }}</strong>
                @if($campo->campo->tipo === 'select')
                <br><small>Respuestas: {{ $campo->valor }}</small>
                @endif
            </td>
            <td>
                <code>{{ $campo->campo->tipo }}</code>
            </td>
            <td>
                @if($campo->required)
                <span class="badge badge-success"><i class="fa fa-check"></i></span>
                @else
                <span class="badge badge-danger"><i class="fa fa-close"></i></span>
                @endif
            </td>
            <td>
                <a class="btn btn-info btn-sm rounded-s" href="#" data-toggle="modal" data-target="#campo-edit-{{ $campo->id }}"><i class="fa fa-edit"></i> Editar</a>
                @hasrole('admin_contact_forms')
                <a class="btn btn-danger btn-sm rounded-s" href="#" data-toggle="modal" data-target="#campo-destroy-{{ $campo->id }}"><i class="fa fa-trash-o"></i> Eliminar</a>
                @include('contacto::crud.modal.destroy_campo')
                @endhasrole
            </td>

        </tr>
        @empty
        <tr>
            <td colspan="4">
                No hay campos definidos
            </td>
        </tr>
        @endforelse
    </table>

</fieldset>
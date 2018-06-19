@extends(config('cajaverde.admin_layout'))

@section('content')
<section class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-title-block">
                        <h3 class="title">
                            <div class="row">
                                <div class="col">
                                    Mensajes de contacto
                                </div>
                                <div class="col text-right">
                                    <a href="{{ route('cajaverde.contacto.formularios.create') }}" class="btn btn-primary btn-sm rounded-s"> Agregar nuevo </a>
                                </div>
                            </div>
                        </h3>
                        <p class="title-description"> Listado histórico de mensajes de contacto </p>
                    </div>
                    <section class="formulario">
                        <div class="table-flip-scroll">
                            <table id="mensajes-historico" class="table table-striped table-bordered table-hover flip-content">
                                <thead class="flip-header">
                                    <tr>
                                        <th>Slug</th>
                                        <th>Título</th>
                                        <th>Campos</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($formularios as $formulario)
                                    <tr>
                                        <td>
                                            <a href="{{ route('cajaverde.contacto', $formulario->slug) }}" target="_blank">
                                                {{ $formulario->slug }}
                                            </a>
                                            <i class="fa fa-external-link"></i>
                                        </td>
                                        <td>
                                            {{ $formulario->titulo }}<br>
                                            <small>{{ $formulario->descripcion }}</small>
                                        </td>
                                        <td class="small">
                                            @foreach($formulario->campos as $campo)
                                            {{ $campo->nombre }}@if($loop->remaining), @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fa fa-gear"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('cajaverde.contacto.formularios.show', $formulario->id) }}"><i class="fa fa-eye"></i> Ver
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('cajaverde.contacto.formularios.edit', $formulario->id) }}"><i class="fa fa-pencil"></i> Editar</a>
                                                    @hasrole('admin_contact_forms')
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#formulario-destroy-{{ $formulario->id }}"><i class="fa fa-trash-o"></i> Eliminar</a>
                                                    @endhasrole
                                                </div>
                                            </div>
                                            @hasrole('admin_contact_forms')
                                            @include('contacto::crud.destroy')
                                            @endhasrole
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-right">
                                <a href="{{ route('cajaverde.contacto.formularios.create') }}" class="btn btn-primary btn-sm rounded-s"> Agregar nuevo </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

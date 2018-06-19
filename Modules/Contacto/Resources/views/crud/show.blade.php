@extends(config('cajaverde.admin_layout'))

@section('content')
<section class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">
                    <div class="card-title-block">
                        <div class="row">
                            <div class="col">
                                <h2 class="title"> Formulario de contacto «{{ $formulario->titulo }}» </h2>
                                <p class="title-description"> {{ $formulario->descripcion }} </p>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('cajaverde.contacto.formularios.edit', $formulario->id) }}" class="btn btn-primary btn-sm rounded-s"> Editar </a>
                            </div>
                        </div>
                    </div>

                    <section>

                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Campos del formulario </p>
                                </div>
                            </div>
                            <div class="card-block">
                                <table class="table">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Tipo</th>
                                        <th>Obligatorio</th>
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
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4">
                                            No hay campos definidos
                                        </td>
                                    </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Destinatarios </p>
                                </div>
                            </div>
                            <div class="card-block">
                                <table class="table">
                                    <tr>
                                        <th>Email</th>
                                        <th>Tipo</th>
                                    </tr>
                                    @forelse($formulario->emails->sortByDesc('tipo') as $type => $email)
                                    <tr>
                                        <td>
                                            <strong>{{ $email->email }}</strong>
                                        </td>
                                        <td>
                                            <code>{{ $email->tipo }}</code>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2">
                                            No hay destinatarios definidos
                                        </td>
                                    </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Detalle del formulario </p>
                                </div>
                            </div>
                            <div class="card-block">
                                <table class="table">
                                    <tr>
                                        <td><strong class="d-block">Título</strong></td>
                                        <td>{{ $formulario->titulo }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong class="d-block">Descripción</strong></td>
                                        <td>{{ $formulario->descripcion }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong class="d-block">Asunto</strong></td>
                                        <td>{{ $formulario->asunto }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong class="d-block">Slug</strong></td>
                                        <td>{{ $formulario->slug }}</td>
                                    </tr>
                                </table>

                            </div>
                        </div>


                    </section>

                </div>
            </div>
        </div>
    </div>
</section>
@stop
@extends(config('cajaverde.admin_layout'))

@section('content')
<section class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-block">

                    <div class="card-title-block">
                        <h2 class="title"> Mensaje #{{ $mensaje->id }} </h2>
                        <p class="title-description">
                            Recibido en <strong>{{ $mensaje->created_at }}</strong>
                            desde la ip <strong>{{ $mensaje->ip }}</strong>
                        </p>
                        <p class="title-description">
                            User agent: <strong>{{ $mensaje->user_agent }}</strong><br>
                            <a href="https://developers.whatismybrowser.com/useragents/parse/">Descifrar</a> <i class="fa fa-external-link"></i>
                        </p>
                    </div>

                    <section>

                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Campos del formulario </p>
                                </div>
                            </div>
                            <div class="card-block">
                                @foreach($mensaje['payload']['campos'] as $nombre => $campo)
                                <div>
                                    <strong class="d-block">{{ $nombre }}</strong>
                                    {{ $campo }}
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Destinatarios </p>
                                </div>
                            </div>
                            <div class="card-block">
                                @foreach($mensaje['payload']['mails'] as $type => $mails)
                                <div>
                                    <strong class="d-block">{{ $type }}</strong>
                                    {{ implode(', ', $mails) }}
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title"> Detalle del formulario </p>
                                </div>
                            </div>
                            <div class="card-block">
                                <div>
                                    <strong class="d-block">Título</strong>
                                    {{ $mensaje['payload']['encabezado']['titulo'] }}
                                </div>
                                <div>
                                    <strong class="d-block">Descripción</strong>
                                    {{ $mensaje['payload']['encabezado']['descripcion'] }}
                                </div>
                                <div>
                                    <strong class="d-block">Asunto</strong>
                                    {{ $mensaje['payload']['encabezado']['asunto'] }}
                                </div>

                            </div>
                        </div>


                    </section>

                </div>
            </div>
        </div>
    </div>
</section>
@stop
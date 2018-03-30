@extends(config('cajaverde.admin_layout'))

@section('content')
<div class="title-block">
    <h3 class="title"> Editar usuario </h3>
    <p class="title-description"> {{ $usuario->nombre }} {{ $usuario->apellido }} </p>
</div>

<section class="section">
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <div class="title-block">
                    <h3 class="title"> Información básica </h3>
                </div>
                {{ Form::model($usuario, ['route' => ['cajaverde.usuarios.update', $usuario->id], 'role' => 'form', 'method' => 'PATCH']) }}

                    @include('cajaverde::usuarios.form')

                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@endsection
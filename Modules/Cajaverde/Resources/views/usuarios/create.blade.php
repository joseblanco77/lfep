@extends(config('cajaverde.admin_layout'))

@section('content')
<div class="title-block">
    <h3 class="title"> Nuevo usuario </h3>
</div>

<section class="section">
    <div class="row sameheight-container">
        <div class="col-md-12">
            <div class="card card-block sameheight-item">
                <div class="title-block">
                    <h3 class="title"> Información básica </h3>
                </div>
                {{ Form::open(['route' => 'cajaverde.usuarios.store', 'role' => 'form']) }}

                    @include('cajaverde::usuarios.form')

                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@endsection
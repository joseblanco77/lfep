@extends(config('cajaverde.admin_layout'))

@section('content')

<div class="title-block">
    <h3 class="title"> Nueva página de contenido
        <span class="sparkline bar" data-type="bar"></span>
    </h3>
</div>

{{ Form::open(['route' => 'cajaverde.paginas.store', 'id' => 'paginas_form', 'name' => 'paginas']) }}
@include('paginas::crud.form')
{{ Form::close() }}

@include('paginas::crud.media')

@endsection

@section('footscripts')
@include('paginas::crud.javascript')
@endsection

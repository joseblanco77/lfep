@extends(config('cajaverde.admin_layout'))

@section('content')

<div class="title-block">
    <h3 class="title"> Edición de página de contenido
        <span class="sparkline bar" data-type="bar"></span>
    </h3>
</div>

{{ Form::model($pagina, ['route' => ['cajaverde.paginas.update', $pagina->id], 'id' => 'paginas_form', 'name' => 'paginas', 'method' => 'PATCH']) }}
@include('paginas::crud.form')
{{ Form::close() }}

@include('paginas::crud.media')

@endsection

@section('footscripts')
@include('paginas::crud.javascript')
@endsection

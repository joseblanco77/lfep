@extends(env('APP_TEMPLATE'))



@section('meta_tags')
{!! setMetaTags([
    'title' => $pagina->nombre,
    'meta_description' => isset($pagina->meta_description) ? $pagina->meta_description : null,
    'meta_author' => isset($pagina->meta_author) ? $pagina->meta_author : null,
    'og_image' => isset($pagina->og_image) ? $pagina->og_image : null,
]) !!}
@stop



@section('content')

<div class="row">

    <div class="col-md-12">

        <div class="jumbotron">
            <h1>{{ $pagina->nombre }}</h1>
            <p>Por {{ $pagina->meta_author }}</p>
        </div>

        {!! $pagina->contenido !!}

    </div>

</div>

@endsection


@extends(env('APP_TEMPLATE'))

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
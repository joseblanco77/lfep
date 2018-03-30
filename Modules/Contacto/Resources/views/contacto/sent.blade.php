@extends(env('APP_TEMPLATE'))

@section('content')

<div class="row justify-content-center">

    <div class="col-8">
    
        <h1>Tu mensaje ha sido enviado</h1>

        <p>Ir a la {{ link_to('/', 'página principal') }}</p>

    </div>

</div>

@stop

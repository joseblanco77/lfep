@extends(env('APP_TEMPLATE'))

@section('content')

<div class="row justify-content-center">

    <div class="col-8">
    
        {!! contactoFormulario($slug) !!}

    </div>

</div>

@stop

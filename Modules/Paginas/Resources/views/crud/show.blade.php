@extends(config('cajaverde.admin_layout'))

@section('content')
<div class="text-right">
    <a class="btn btn-primary" href="{{ route('cajaverde.paginas.edit', $pagina->id) }}">Editar <i class="fa fa-edit"></i></a>
</div>

<div class="card card-primary">
    <div class="card-header">
        <div class="header-block">
            <p class="title"> Página de contenido </p>
        </div>
    </div>
    <div class="card-block">
        <div class="title-block">
            <h4 class="title"> {{ $pagina->nombre }} </h4>
            <p class="title-description"> {{ $pagina->descripcion }} </p>
        </div>

        <p>
            <strong>URL:</strong>
            <a href="{{ asset($pagina->slug) }}" target="_blank"> {{ asset($pagina->slug) }} <i class="fa fa-external-link"></i></a>
        </p>
        
        <p>
            <strong>Creada por:</strong>
            {{ $pagina->autor->nombre }} {{ $pagina->autor->apellido }}
        </p>

        <p>
            <strong>Meta descripción:</strong>
            {{ $pagina->meta_description }}
        </p>

        <p>
            <strong>Meta autor:</strong>
            {{ $pagina->meta_author }}
        </p>
        
        <p>
            <strong>Estado:</strong>
            @if($pagina->activa)
            <span class="badge badge-primary">Activa <i class="fa fa-check"></i></span>
            @else
            <span class="badge badge-danger">Inactiva <i class="fa fa-close"></i></span>
            @endif
        </p>

        <p>
            <strong>Contenido:</strong>
        </p>

    </div>

    <div class="card-footer"> 
            {!! $pagina->contenido !!}
    </div>
</div>

<div class="text-right">
    <a class="btn btn-primary" href="{{ route('cajaverde.paginas.edit', $pagina->id) }}">Editar <i class="fa fa-edit"></i></a>
</div>
        




@endsection
@extends(config('cajaverde.admin_layout'))

@section('content')
<div class="title-search-block">
    <div class="title-block">
        <div class="row">
            <div class="col-md-6">
                <h3 class="title"> Páginas de contenido
                    <a href="{{ route('cajaverde.paginas.create') }}" class="btn btn-primary btn-sm rounded-s"> Agregar nueva </a>
                </h3>
                <p class="title-description"> Administración de contenido estático con editor de <a href="http://librosweb.es/libro/xhtml/" target="_blank">HTML</a> </p>
            </div>
        </div>
    </div>
</div>

<div class="card card-primary">

    <div class="card-header d-xs-none d-sm-none d-md-block">
        <div class="row">
            <div class="col-7">
                <div class="header-block text-nowrap">
                    <span>Datos principales</span>
                </div>
            </div>
            <div class="col-4">
                <div class="header-block text-center">
                    <span>Edición</span>
                </div>
            </div>
            <div class="col-1"> </div>
        </div>
    </div>

    @foreach($paginas as $pagina)
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="d-xs-block d-sm-block d-md-none">Datos principales</div>
            <div> 
                    <p>
                        @for($i = 0; $i < $pagina->depth; $i++) 
                        →
                        @endfor
                        <strong>{{ $pagina->nombre }}</strong>
                    </p>
                    <p>
                        <strong>Slug:</strong>
                        <a href="{{ asset($pagina->slug) }}" target="_blank"> {{ $pagina->slug }}</a>
                        <i class="fa fa-external-link"></i>
                    </p>
                    @if ($pagina->descripcion)
                    <p>{{ $pagina->descripcion }}</p>
                    @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="d-xs-block d-sm-block d-md-none">Edición</div>
            <div> 
                    <p>
                        <strong>Creación:</strong>
                        {{ $pagina->created_at }}
                    </p>
                    @if ($pagina->updated_at)
                    <p>
                        <strong>Último cambio:</strong>
                        {{ $pagina->updated_at }}
                    </p>
                    @endif
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-1  text-center">
                <span class="d-xs-inline d-sm-inline d-md-none text-center">Opciones</span>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gear"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('cajaverde.paginas.show', $pagina->id) }}"><i class="fa fa-eye"></i> Ver página
                    </a>
                    <a class="dropdown-item" href="{{ route('cajaverde.paginas.edit', $pagina->id) }}"><i class="fa fa-pencil"></i> Editar</a>
                    @hasrole('admin_paginas')
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"href="#" data-toggle="modal" data-target="#pagina-destroy-{{ $pagina->id }}"><i class="fa fa-trash-o"></i> Eliminar</a>
                    @endhasrole
                </div>
            </div>
        </div>
            
    </div>

    @hasrole('admin_paginas')
    @include('paginas::crud.destroy')
    @endhasrole

    @endforeach

</div>

@stop

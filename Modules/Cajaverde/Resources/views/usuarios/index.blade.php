@extends(config('cajaverde.admin_layout'))

@section('content')
<div class="title-search-block">
    <div class="title-block">
        <div class="row">
            <div class="col-md-6">
                <h3 class="title"> Usuarios
                <a href="{{ route('cajaverde.usuarios.create') }}" class="btn btn-primary btn-sm rounded-s"> Agregar nuevo </a>
                </h3>
                <p class="title-description"> Administración de cuentas de usuario </p>
            </div>
        </div>
    </div>
</div>

<div class="card card-primary">

    <div class="card-header d-xs-none d-sm-none d-md-block">
        <div class="row">
            <div class="col-1">
                <div class="header-block text-nowrap text-center">
                    <span>Avatar</span>
                </div>
            </div>
            <div class="col-4">
                <div class="header-block text-center">
                    <span>Nombre completo</span>
                </div>
            </div>
            <div class="col-3">
                <div class="header-block text-center">
                    <span>Correo electrónico</span>
                </div>
            </div>
            <div class="col-1">
                <div class="header-block text-nowrap text-center">
                    <span>Activo</span>
                </div>
            </div>
            <div class="col-2">
                <div class="header-block text-center">
                    <span>Último acceso</span>
                </div>
            </div>
            <div class="col-1"> </div>
        </div>
    </div>

    @foreach ($usuarios as $usuario)
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-1 text-center">
            <a href="{{ route('cajaverde.usuarios.show', $usuario->id) }}">
                <img src="{{ getCajaverdeAvatar($usuario) }}" class="img-fluid rounded"> 
            </a>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="d-xs-block d-sm-block d-md-none text-center">Nombre completo</div>
            <div class="text-center">
                <a href="{{ route('cajaverde.usuarios.show', $usuario->id) }}" class="">
                    <h4 class="item-title"> {{ $usuario->apellido }}, {{ $usuario->nombre }} </h4>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3">
            <div class="d-xs-block d-sm-block d-md-none text-center">Correo electrónico</div>
            <div class="text-center"> {{ $usuario->email }} </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-1">
            
            <div class="text-center">
                <span class="d-xs-inline d-sm-inline d-md-none text-center">Activo</span>
                @if($usuario->activo)
                <i class="fa fa-check text-success"></i>
                @else
                <i class="fa fa-close text-danger"></i>
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2">
            <div class="d-xs-block d-sm-block d-md-none text-center">Último acceso</div>
            <div class="text-center"> {{ $usuario->logged_at }} </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-1  text-center">
                <span class="d-xs-inline d-sm-inline d-md-none text-center">Opciones</span>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-gear"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('cajaverde.usuarios.show', $usuario->id) }}"><i class="fa fa-eye"></i> Ver perfil
                    </a>
                    <a class="dropdown-item" href="{{ route('cajaverde.usuarios.edit', $usuario->id) }}"><i class="fa fa-pencil"></i> Editar</a>
                    @hasrole('admin_usuarios')
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#usuario-destroy-{{ $usuario->id }}"><i class="fa fa-trash-o"></i> Eliminar</a>
                    @endhasrole
                </div>
            </div>
        </div>

    </div>

    @hasrole('admin_usuarios')
    @include('cajaverde::usuarios.destroy')
    @endhasrole

    @endforeach
</div>

{{ $usuarios->links('cajaverde::layouts.pagination') }}

@endsection

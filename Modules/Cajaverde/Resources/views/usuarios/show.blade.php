@extends(config('cajaverde.admin_layout'))

@section('content')
<div class="title-block">
    <h3 class="title"> Perfil de usuario </h3>
</div>

<section class="section">
    <div class="row sameheight-container">
        <div class="col-md-12">

            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('cajaverde.usuarios.edit', $usuario->id) }}">Editar <i class="fa fa-edit"></i></a>
            </div>
        
            <div class="card" style="width:400px">
                <img class="card-img-top" src="{{ getCajaverdeAvatar($usuario) }}" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title">{{ $usuario->nombre }} {{ $usuario->apellido }}</h4>
                    <p class="card-text">{{ $usuario->descripcion }}</p>
                    <a href="mailto:{{ $usuario->email }}" class="btn btn-primary">{{ $usuario->email }}</a>
                </div>
            </div>

            <p>
                <strong>Estado:</strong>
                @if($usuario->activo)
                <span class="badge badge-primary">Activo <i class="fa fa-check"></i></span>
                @else
                <span class="badge badge-danger">Inactivo <i class="fa fa-close"></i></span>
                @endif
            </p>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-6">
                <strong>Roles y permisos asignados:</strong>
                @if($usuario->roles->count())
                @foreach($usuario->roles as $rol)
                <table class="table table-striped">
                    <thead>
                        <tr class="row">
                            <td class="col-4 text-right">Rol:</td>
                            <th class="col-5">{{ $rol->name }}</th>
                            <td class="col-3 text-center">
                                @hasanyrole('admin_roles|editor_roles')
                                <button class="btn btn-sm btn-danger" title="Revocar" data-toggle="modal" data-target="#role-destroy-{{ $usuario->id }}">Revocar <i class="fa fa-close"></i></button>
                                @include('cajaverde::roles.destroy')
                                @endhasanyrole
                            </td>
                        </tr>
                    </thead>
                    @if($rol->permissions->count())
                    <tbody>
                        <tr class="row">
                            <td class="col-4 text-right">Permisos:</td>
                            <td class="col-8" colspan="2">
                                <ul>
                                    @foreach($rol->permissions as $permiso)
                                    <li>{{ $permiso->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    @endif
                </table>
                @endforeach
                @else
                        <p>Ninguno</p>
                @endif
            </div>

            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-6">
                <strong>Roles y permisos disponibles:</strong>
                @foreach(\Spatie\Permission\Models\Role::all() as $rol)
                <table class="table table-striped">
                @if(!$usuario->hasRole($rol->name))
                    <thead>
                        <tr class="row">
                            <td class="col-4 text-right">Rol:</td>
                            <th class="col-5">{{ $rol->name }}</th>
                            <td class="col-3 text-center">
                                {{ Form::model($usuario, ['route' => ['cajaverde.roles.update', $usuario->id], 'role' => 'form', 'method' => 'PATCH']) }}
                                <input type="hidden" name="rol" value="{{ $rol->name }}">
                                <button type="submit" class="btn btn-primary btn-sm">Asignar <i class="fa fa-check"></i></button>
                                {{ Form::close() }}
                            </td>
                        </tr>
                    <thead>
                    <tbody>
                        <tr class="row">
                            <td class="col-4 text-right">permisos:</td>
                            <td class="col-8" colspan="2">
                                <ul>
                                    @foreach($rol->permissions as $permiso)
                                    <li>{{ $permiso->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                @endif
                <table>
                @endforeach
            </div>

        </div>
    </div>
</section>
@endsection
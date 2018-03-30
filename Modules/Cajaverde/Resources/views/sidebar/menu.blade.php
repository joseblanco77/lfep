@hasanyrole('admin_usuarios|editor_usuarios')
<li{!! printIfRequestIn(['admin/usuarios*','admin/permisos*','admin/roles*']) !!}>
    
    <a href="{{ route('cajaverde.usuarios.index') }}"> 
        <i class="fa fa-user"></i> Usuarios y permisos
    </a>

</li>
@endhasanyrole

{{--

<li{!! printIfRequestIn(['admin/usuarios*','admin/permisos*','admin/roles*']) !!}>
    
    <a href="">
        <i class="fa fa-users"></i> Sistema de usuarios
        <i class="fa arrow"></i>
    </a>

    <ul class="sidebar-nav">
        
        <li{!! printIfRequestIs('admin/usuarios*') !!}>
            <a href="{{ route('cajaverde.usuarios.index') }}"> 
                <i class="fa fa-user"></i> Usuarios 
            </a>
        </li>
        
        <li{!! printIfRequestIs('admin/permisos*') !!}>
            <a href="{{ route('cajaverde.permisos.index') }}"> 
                <i class="fa fa-check-square-o"></i> Permisos 
            </a>
        </li>
        
        <li{!! printIfRequestIs('admin/roles*') !!}>
            <a href="{{ route('cajaverde.roles.index') }}"> 
                <i class="fa fa-sitemap"></i> Roles 
            </a>
        </li>
        
    </ul>
    
</li>

--}}


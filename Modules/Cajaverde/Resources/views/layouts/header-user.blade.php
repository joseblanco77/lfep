<li class="profile dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <div class="img" style="background-image: url('{{ getCajaverdeAvatar($loggeduser) }}')"> </div>
        <span class="name"> {{ $loggeduser->email }} </span>
    </a>
    <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
        <a class="dropdown-item" href="{{ route('cajaverde.usuarios.show', $loggeduser->id) }}">
            <i class="fa fa-user icon"></i> Mi perfil 
        </a>
        {{-- 
        <a class="dropdown-item" href="#">
            <i class="fa fa-bell icon"></i> Notifications 
        </a>
        --}}
        {{-- 
        <a class="dropdown-item" href="{{ route('cajaverde.usuarios.edit', $loggeduser->id) }}">
            <i class="fa fa-gear icon"></i> Ajustes
        </a>
        --}}
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('cajaverde.logout') }}">
            <i class="fa fa-power-off icon"></i> Cerrar sesión 
        </a>
    </div>
</li>




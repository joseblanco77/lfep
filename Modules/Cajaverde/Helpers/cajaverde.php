<?php

if (!function_exists('getCajaverdeLoggedUser') ) {
    /**
     * Devuelve el usuario loggeado en cajaverde
     *
     * @return \Modules\Cajaverde\Entities\CajaverdeUser
     */
    function getCajaverdeLoggedUser()
    {
        return Auth::guard('cajaverde')->user();
    }
}



if (!function_exists('getCajaverdeAvatar') ) {
    /**
     * Si existe la imagen solicitada, devuelve su asset.
     * En caso contrario genera un avatar random y lo asigna
     * en la sessión para que persista.
     *
     * @return String
     */
    function getCajaverdeAvatar(\Modules\Cajaverde\Entities\CajaverdeUser $usuario)
    {
        if ($usuario->avatar) {
            return $usuario->avatar;
        }

        $avatars = session('cajaverde.avatars', []);

        if (isset($avatars[$usuario->id])) {
            return $avatars[$usuario->id];
        }

        $number = rand(0, 9);
        $avatar = asset('admin/img/avatars/'.$number.'.jpg');
        $avatars[$usuario->id] = $avatar;
        session(['cajaverde.avatars' => $avatars]);

        return $avatar;
    }
}



if (!function_exists('getCajaverdePasswordPattern') ) {
    /**
     * Devuelve el patrón regex para validación de contraseñas
     *
     * @return String
     */
    function getCajaverdePasswordPattern()
    {
        $pattern = config('cajaverde.password_regex');

        return trim($pattern, '/');
    }
}



if (!function_exists('getCajaverdeAdminMail') ) {
    /**
     * Devuelve el email para notificar al admin
     *
     * @return String
     */
    function getCajaverdeAdminMail()
    {
        return env('CAJAVERDE_ADMIN_MAIL');
    }
}


if (!function_exists('isUserAllowedEditor') ) {
    /**
     * Verifica que el usuario sea un editor por rol
     * o que esté editando su propio perfil
     *
     * @param  CajaverdeUser $usuario
     * @return Boolean
     */
    function isUserAllowedEditor($usuario)
    {
        $loggeduser = getCajaverdeLoggedUser();

        if ($loggeduser->hasAnyRole('admin_usuarios|editor_usuarios')) {
            return true;
        }
        if ($loggeduser->id === $usuario->id) {
            return true;
        }
        
        return false;
    }
}

if (!function_exists('abortIfUserNotAllowedEditor') ) {
    /**
     * Si el usuario no tiene permiso para ver o editar un 
     * perfil, causa un error 403
     *
     * @param  CajaverdeUser $usuario
     * @return String
     */
    function abortIfUserNotAllowedEditor($usuario)
    {
        if (!isUserAllowedEditor($usuario)) {
            abort(403);
        }
    }
}
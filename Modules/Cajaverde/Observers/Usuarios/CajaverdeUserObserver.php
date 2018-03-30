<?php

namespace Modules\Cajaverde\Observers\Usuarios;

use App;
use Mail;
use Modules\Cajaverde\Entities\CajaverdeUser;
use Modules\Cajaverde\Mail\CajaverdeUserCreated;
use Modules\Cajaverde\Mail\CajaverdeUserUpdated;

/**
 * retrieved, creating, created, updating, updated, saving, saved, deleting, deleted, restoring, restored
 */
class CajaverdeUserObserver
{
    /**
     * Listen to the CajaverdeUser created event.
     *
     * @param  CajaverdeUser  $usuario
     * @return void
     */
    public function created(CajaverdeUser $usuario)
    {
        if (App::runningInConsole()) return;

        $crud = session('cajaverde.user.create', false);
        if(!$crud) return;

        session(['cajaverde.user.create' => false]);

        $loggeduser = getCajaverdeLoggedUser();

        Mail::to(getCajaverdeAdminMail())->send(new CajaverdeUserCreated($loggeduser, $usuario));
    }

    /**
     * Listen to the CajaverdeUser updating event.
     *
     * @param  CajaverdeUser  $usuario
     * @return void
     */
    public function updating(CajaverdeUser $usuario)
    {
        $previousStatus = CajaverdeUser::find($usuario->id);
        session(['cajaverde.user.previous' => $previousStatus->getAttributes()]);
    }
    

    /**
     * Listen to the CajaverdeUser updated event.
     *
     * @param  CajaverdeUser  $usuario
     * @return void
     */
    public function updated(CajaverdeUser $usuario)
    {
        if (App::runningInConsole()) return;

        $loggeduser = getCajaverdeLoggedUser();

        $crud = session('cajaverde.user.update', false);
        if(!$crud) return;

        $previousStatus = session('cajaverde.user.previous');

        session(['cajaverde.user.update' => false]);
        session(['cajaverde.user.previous' => false]);

        Mail::to(getCajaverdeAdminMail())->send(new CajaverdeUserUpdated($loggeduser, $usuario));
    }
}
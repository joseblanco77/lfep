<?php

namespace Modules\Paginas\Observers\Usuarios;

use App;
use Mail;
use Modules\Paginas\Entities\Paginas;

/**
 * retrieved, creating, created, updating, updated, saving, saved, deleting, deleted, restoring, restored
 */
class PaginasObserver
{
    /**
     * Listen to the Paginas created event.
     *
     * @param  Paginas  $pagina
     * @return void
     */
    public function created(Paginas $pagina)
    {
        if (App::runningInConsole()) return;

        $loggeduser = getCajaverdeLoggedUser();

    }

    /**
     * Listen to the Paginas updating event.
     *
     * @param  Paginas  $pagina
     * @return void
     */
    public function updating(Paginas $pagina)
    {
        if (App::runningInConsole()) return;

        $loggeduser     = getCajaverdeLoggedUser();
        $previousStatus = Paginas::find($pagina->id);
        $pagina->attributes['usuario_id'] = $loggeduser->id;

        //session(['cajaverde.paginas.previous' => $previousStatus->getAttributes()]);
    }
    

    /**
     * Listen to the Paginas updated event.
     *
     * @param  Paginas  $pagina
     * @return void
     */
    public function updated(Paginas $pagina)
    {
        if (App::runningInConsole()) return;

        //$loggeduser = getCajaverdeLoggedUser();

        //$previousStatus = session('cajaverde.user.previous');

        //session(['cajaverde.user.previous' => false]);

    }
}
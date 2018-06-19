<?php

namespace Modules\Contacto\Http\Controllers\Mensaje;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Contacto\Entities\CajaverdeContactoMensajes;
use Modules\Contacto\Repositories\CajaverdeContactoMensajesRepository;

class MensajeController extends Controller
{
	protected $cajaverdeContactoMensajesRepository;

    public function __construct(CajaverdeContactoMensajesRepository $cajaverdeContactoMensajesRepository)
    {
        $this->cajaverdeContactoMensajesRepository = $cajaverdeContactoMensajesRepository;
    }


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $mensajes = $this->cajaverdeContactoMensajesRepository
            ->orderBy('created_at', 'desc')
            ->all();

        return view('contacto::mensaje.index')
            ->with(compact('mensajes'));
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(CajaverdeContactoMensajes $mensaje)
    {
        debug($mensaje, $mensaje->payload);
        return view('contacto::mensaje.show')
            ->with(compact('mensaje'));
    }
}

<?php

namespace Modules\Contacto\Http\Controllers\Form;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Contacto\Helpers\Contacto;
use Modules\Contacto\Utilities\ContactoMailer;
use Modules\Contacto\Http\Requests\ContactoFormularioRequest;
use Modules\Contacto\Repositories\CajaverdeContactoMensajesRepository;
use Modules\Contacto\Repositories\CajaverdeContactoFormulariosRepository;

class ContactoController extends Controller
{
    protected $cajaverdeContactoMensajesRepository;

    protected $cajaverdeContactoFormulariosRepository;

    public function __construct(
        CajaverdeContactoMensajesRepository $cajaverdeContactoMensajesRepository,
        CajaverdeContactoFormulariosRepository $cajaverdeContactoFormulariosRepository
    )
    {
        $this->cajaverdeContactoMensajesRepository = $cajaverdeContactoMensajesRepository;
        $this->cajaverdeContactoFormulariosRepository = $cajaverdeContactoFormulariosRepository;
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($slug = 'formulario')
    {
        return view('contacto::contacto.show')
            ->with(compact('slug'));
    }

    /**
     * Store a newly created resource in storage.
     * @return Response
     */
    public function store(ContactoFormularioRequest $request)
    {

        $formulario = $this->cajaverdeContactoFormulariosRepository
            ->findWhere(['slug' => $request->slug])
            ->first();

        $message = $this->cajaverdeContactoFormulariosRepository
            ->getMessage($request, $formulario);

        ContactoMailer::sendMessage($message);

        $payload = $this->cajaverdeContactoMensajesRepository
            ->create([
                'payload' => json_encode($message),
                'user_agent' => $message['user_agent'],
                'ip' => $message['ip']
            ]);

        return redirect()
            ->route('cajaverde.contacto.enviado');
    }

}

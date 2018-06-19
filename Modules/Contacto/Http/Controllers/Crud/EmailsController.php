<?php

namespace Modules\Contacto\Http\Controllers\Crud;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Contacto\Http\Requests\CrudEmailRequest;
use Modules\Contacto\Entities\CajaverdeContactoEmails;
use Modules\Contacto\Repositories\CajaverdeContactoEmailsRepository;

class EmailsController extends Controller
{
	protected $cajaverdeContactoEmailsRepository;

    public function __construct(CajaverdeContactoEmailsRepository $cajaverdeContactoEmailsRepository)
    {
        $this->cajaverdeContactoEmailsRepository = $cajaverdeContactoEmailsRepository;
    }

    /**
     * Store a newly created resource in storage.
     * @param  CrudCampoRequest $request
     * @return Response
     */
    public function store(CrudEmailRequest $request)
    {
        $this->cajaverdeContactoEmailsRepository
            ->create($request->except('_token'));

        return redirect()
            ->route('cajaverde.contacto.formularios.edit', $request->formulario_id)
            ->with('alert_success', 'El email ha sido creado exitosamente');
    }

    /**
     * Update the specified resource in storage.
     * @param  CrudEmailRequest $request
     * @return Response
     */
    public function update(CrudEmailRequest $request, CajaverdeContactoEmails $email)
    {
        $this->cajaverdeContactoEmailsRepository
            ->update($request->except('_token', 'formulario_id'), $email->id);

        return redirect()
            ->route('cajaverde.contacto.formularios.edit', $request->formulario_id)
            ->with('alert_success', 'El email ha sido actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(CajaverdeContactoEmails $email)
    {
        $email->delete();

        return redirect()
            ->route('cajaverde.contacto.formularios.edit', $email->formulario_id)
            ->with('alert_success', 'El email ha sido eliminado exitosamente');
    }
}

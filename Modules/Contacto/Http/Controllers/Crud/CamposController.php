<?php

namespace Modules\Contacto\Http\Controllers\Crud;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Contacto\Http\Requests\CrudCampoRequest;
use Modules\Contacto\Entities\CajaverdeContactoFormularioCampo;
use Modules\Contacto\Repositories\CajaverdeContactoFormularioCampoRepository;

class CamposController extends Controller
{
	protected $cajaverdeContactoFormularioCampoRepository;

    public function __construct(CajaverdeContactoFormularioCampoRepository $cajaverdeContactoFormularioCampoRepository)
    {
        $this->cajaverdeContactoFormularioCampoRepository = $cajaverdeContactoFormularioCampoRepository;
    }

    /**
     * Store a newly created resource in storage.
     * @param  CrudCampoRequest $request
     * @return Response
     */
    public function store(CrudCampoRequest $request)
    {
        $this->cajaverdeContactoFormularioCampoRepository
            ->create($request->except('_token'));

        return redirect()
            ->route('cajaverde.contacto.formularios.edit', $request->formulario_id)
            ->with('alert_success', 'El campo ha sido creado exitosamente');
    }

    /**
     * Update the specified resource in storage.
     * @param  CrudCampoRequest $request
     * @return Response
     */
    public function update(CrudCampoRequest $request)
    {
        $this->cajaverdeContactoFormularioCampoRepository
            ->update($request->except('_token', 'campo_id', 'formulario_id'), $request->campo_id);

        return redirect()
            ->route('cajaverde.contacto.formularios.edit', $request->formulario_id)
            ->with('alert_success', 'El campo ha sido actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(CajaverdeContactoFormularioCampo $campo)
    {
        $campo->delete();

        return redirect()
            ->route('cajaverde.contacto.formularios.edit', $campo->formulario_id)
            ->with('alert_success', 'El campo ha sido eliminado exitosamente');
    }
}

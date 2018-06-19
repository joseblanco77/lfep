<?php

namespace Modules\Contacto\Http\Controllers\Crud;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Contacto\Entities\CajaverdeContactoFormularios;
use Modules\Contacto\Http\Requests\CrudFormularioRequest;
use Modules\Contacto\Repositories\CajaverdeContactoCamposRepository;
use Modules\Contacto\Repositories\CajaverdeContactoFormulariosRepository;


class FormularioController extends Controller
{
    protected $cajaverdeContactoCamposRepository;

	protected $cajaverdeContactoFormulariosRepository;

    public function __construct(
        CajaverdeContactoCamposRepository $cajaverdeContactoCamposRepository,
        CajaverdeContactoFormulariosRepository $cajaverdeContactoFormulariosRepository
    )
    {
        $this->cajaverdeContactoFormulariosRepository = $cajaverdeContactoFormulariosRepository;
        $this->cajaverdeContactoCamposRepository = $cajaverdeContactoCamposRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $formularios = $this->cajaverdeContactoFormulariosRepository->all();
        return view('contacto::crud.index')
            ->with(compact('formularios'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $campos = $this->cajaverdeContactoCamposRepository->all();

        return view('contacto::crud.create')
            ->with(compact('campos'));
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(CajaverdeContactoFormularios $formulario)
    {
        return view('contacto::crud.show')
            ->with(compact('formulario'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(CrudFormularioRequest $request)
    {
        $formulario = $this->cajaverdeContactoFormulariosRepository
            ->create($request->except('_token'));

        return redirect()
            ->route('cajaverde.contacto.formularios.show', $formulario->id)
            ->with('alert_success', 'El formulario ha sido creado exitosamente');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(CajaverdeContactoFormularios $formulario)
    {
        $campos = $this->cajaverdeContactoCamposRepository->all();

        return view('contacto::crud.edit')
            ->with(compact('campos', 'formulario'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(CrudFormularioRequest $request, CajaverdeContactoFormularios $formulario)
    {
        $formulario = $this->cajaverdeContactoFormulariosRepository
            ->update($request->except('_token'), $formulario->id);

        return redirect()
            ->route('cajaverde.contacto.formularios.show', $formulario->id)
            ->with('alert_success', 'El formulario ha sido actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(CajaverdeContactoFormularios $formulario)
    {
        $formulario->delete();

        return redirect()
            ->route('cajaverde.contacto.formularios.index')
            ->with('alert_success', 'El formulario ha sido eliminado exitosamente');
    }
}

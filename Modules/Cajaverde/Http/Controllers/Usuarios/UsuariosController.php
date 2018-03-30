<?php

namespace Modules\Cajaverde\Http\Controllers\Usuarios;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Cajaverde\Entities\CajaverdeUser;
use Modules\Cajaverde\Http\Requests\UsuariosStoreRequest;
use Modules\Cajaverde\Http\Requests\UsuariosUpdateRequest;
use Modules\Cajaverde\Repositories\CajaverdeUserRepository;

class UsuariosController extends Controller
{
	protected $cajaverdeUserRepository;

    public function __construct(CajaverdeUserRepository $cajaverdeUserRepository)
    {
        $this->cajaverdeUserRepository = $cajaverdeUserRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $usuarios = $this->cajaverdeUserRepository
            ->orderBy('apellido')
            ->paginate(10);

        return view('cajaverde::usuarios.index')
            ->with(compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('cajaverde::usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  UsuariosStoreRequest $request
     * @return Response
     */
    public function store(UsuariosStoreRequest $request)
    {
        session(['cajaverde.user.create' => true]);

        $this->cajaverdeUserRepository
            ->create($request->except('_token'));

        return redirect()
            ->route('cajaverde.usuarios.index')
            ->with('alert_success', 'El usuario ha sido creado.');
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(CajaverdeUser $usuario)
    {
        abortIfUserNotAllowedEditor($usuario);

        if (!isUserAllowedEditor($usuario)) abort(403);

        return view('cajaverde::usuarios.show')
            ->with(compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(CajaverdeUser $usuario)
    {
        abortIfUserNotAllowedEditor($usuario);

        return view('cajaverde::usuarios.edit')
            ->with(compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(UsuariosUpdateRequest $request, CajaverdeUser $usuario)
    {
        abortIfUserNotAllowedEditor($usuario);
        
        if (empty($request->password) ) {
            $data   = $request->except('_method','_token','id','password');
        } else {
            $data   = $request->except('_method','_token','id');
        }
        
        session(['cajaverde.user.update' => true]);

        $this->cajaverdeUserRepository
            ->update($data, $usuario->id);

        return redirect()
            ->route('cajaverde.usuarios.index')
            ->with('alert_success', 'El usuario ha sido actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(CajaverdeUser $usuario)
    {
        $usuario->delete();

        return redirect()
            ->back()
            ->with('alert_success', 'El usuario ha sido eliminado.');
    }
}

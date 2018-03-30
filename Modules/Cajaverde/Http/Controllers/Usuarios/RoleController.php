<?php

namespace Modules\Cajaverde\Http\Controllers\Usuarios;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Cajaverde\Entities\CajaverdeUser;

class RoleController extends Controller
{
    /**
     * Update the specified resource in storage.
     * @param  Request       $request
     * @param  CajaverdeUser $usuario
     * @return Response
     */
    public function update(Request $request, CajaverdeUser $usuario)
    {
        $usuario->assignRole($request->rol);

        return redirect()
            ->back()
            ->with('alert_success', 'El rol ha sido asignado.');
    }

    /**
     * Remove the specified resource from storage.
     * @param  Request       $request
     * @param  CajaverdeUser $usuario
     * @return Response
     */
    public function destroy(Request $request, CajaverdeUser $usuario)
    {
        $usuario->removeRole($request->rol);

        return redirect()
            ->back()
            ->with('alert_success', 'El rol ha sido revocado.');
    }
    
    /*
     * Display a listing of the resource.
     * @return Response
     *
    public function index()
    {
        return view('cajaverde::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     *
    public function create()
    {
        return view('cajaverde::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     *
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     *
    public function show()
    {
        return view('cajaverde::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     *
    public function edit()
    {
        return view('cajaverde::edit');
    }
    */

}

<?php

namespace Modules\Paginas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Paginas\Entities\CajaverdePaginas;
use Modules\Paginas\Http\Requests\PaginasRequest;
use Modules\Paginas\Repositories\CajaverdePaginasRepository;

class PaginasController extends Controller
{
	protected $cajaverdePaginasRepository;

    public function __construct(CajaverdePaginasRepository $cajaverdePaginasRepository)
    {
        $this->cajaverdePaginasRepository = $cajaverdePaginasRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $paginas = CajaverdePaginas::withDepth()->get()->toFlatTree();

        return view('paginas::crud.index')
            ->with(compact('paginas'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('paginas::crud.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(PaginasRequest $request)
    {

        $loggeduser = getCajaverdeLoggedUser();
        $request->request->add(['usuario_id' => $loggeduser->id]);
        
        $pagina = $this->cajaverdePaginasRepository
            ->create($request->except('_token'));

        return redirect()
            ->route('cajaverde.paginas.show', $pagina->id)
            ->with('alert_success', 'La página ha sido creada.');
        
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show(CajaverdePaginas $pagina)
    {
        return view('paginas::crud.show')
            ->with(compact('pagina'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit(CajaverdePaginas $pagina)
    {
        return view('paginas::crud.edit')
            ->with(compact('pagina'));
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(PaginasRequest $request)
    {
        $pagina = $this->cajaverdePaginasRepository
            ->update($request->except('_token'), $request->id);

        return redirect()
            ->route('cajaverde.paginas.show', $pagina->id)
            ->with('alert_success', 'La página ha sido actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy(CajaverdePaginas $pagina)
    {
        $pagina->delete();

        return redirect()
            ->back()
            ->with('alert_success', 'La página ha sido eliminada.');

    }
}

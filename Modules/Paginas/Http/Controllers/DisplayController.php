<?php

namespace Modules\Paginas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Paginas\Repositories\CajaverdePaginasRepository;

class DisplayController extends Controller
{
	protected $cajaverdePaginasRepository;

    public function __construct(CajaverdePaginasRepository $cajaverdePaginasRepository)
    {
        $this->cajaverdePaginasRepository = $cajaverdePaginasRepository;
    }


    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($slug)
    {
        $pagina = $this->cajaverdePaginasRepository
            ->findWhere([
                'slug' => $slug, 
                'activa' => 1
            ])
            ->first();

        if (!$pagina) {
            abort(404);
        }
        
        debug($pagina->getAttributes());
        return view('paginas::display.show')
            ->with(compact('pagina'));
    }
}

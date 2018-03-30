<?php

namespace Modules\Cajaverde\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    // In controllers meant for authenticated users:
    public function __construct()
    {
        //$this->middleware('auth:cajaverde');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('cajaverde::dashboard.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotizacionc;
use App\Models\Compras;
use App\Models\Producto;
use App\Models\Proveedor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coti = Cotizacionc::count();
        $compra = Compras::count();
        $produ = Producto::count();
        $prove = Proveedor::count();

        $cotizaciones = Cotizacionc::all();
        return view('home', compact('coti', 'compra', 'produ', 'prove', 'cotizaciones'));
    }
}

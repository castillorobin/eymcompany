<?php

namespace App\Http\Controllers;


use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Compras;
use App\Models\Detallecompra;
use \PDF;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras = Compras::all();
        return view('compra.index', compact('compras'));
        
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        $detalles = Detallecompra::all();
        return view('compra.crear', compact('proveedores', 'detalles'));
    }

    public function ver($id)
    {
        //$proveedores = Proveedor::all();
        $detalles = Detallecompra::where('idcompra', $id)->get();
        $ultimoid = Compras::find($id);
        return view('compra.ver', compact('ultimoid', 'detalles'));
    }

    
    public function verpdf($id)
    {
        //$proveedores = Proveedor::all();
        $detalles = Detallecompra::where('idcompra', $id)->get();
        $ultimoid = Compras::find($id);

        $pdf = PDF::loadView('compra.facturacompra', ['detalles'=>$detalles, 'ultimoid'=>$ultimoid]);
        return $pdf->stream();

        //return view('cotizacion.ver', compact('cotiactual', 'detalles'));
    }

    public function guardarenc(Request $request)
    {
        $proveedores = Proveedor::all();

        $encabezado = new Compras();

        $encabezado->Fecha = $request->get('fecha');
        $encabezado->CCF = $request->get('ccf');
        $encabezado->Proveedor = $request->get('proveedor');
        $encabezado->Total = $request->get('total');
        $encabezado->Nota = $request->get('nota');

        $encabezado->save();

       $ultimoid = Compras::latest('id')->first();
       $idcompr = $ultimoid->id;
 
       $linea = new Detallecompra();
       $linea->idcompra = $ultimoid->id;
       $linea->descripcion = $request->get('detalle');
       $linea->cantidad = $request->get('cantidad');
       $linea->preciouni = $request->get('precio');
       $linea->subtotal = $request->get('subtotal');
       $linea->save();
       $detalles = Detallecompra::where('idcompra', $idcompr)->get();

        return view('compra.creardetalles', compact('proveedores', 'ultimoid', 'detalles'));
    }

    public function guardardet(Request $request)
    {
        $proveedores = Proveedor::all();
        $comprasl = $request->get('id');
        $ultimoid = Compras::find($comprasl);
       //$idcompr = $ultimoid->id;

       $linea = new Detallecompra();
       $linea->idcompra = $request->get('id');
       $linea->descripcion = $request->get('detalle');
       $linea->cantidad = $request->get('cantidad');
       $linea->preciouni = $request->get('precio');
       $linea->subtotal = $request->get('subtotal');
       $linea->save();
       $detalles = Detallecompra::where('idcompra', $comprasl)->get();

        return view('compra.creardetalles', compact('proveedores', 'ultimoid', 'detalles'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function eliminar(string $id)
    {
        
    }
}

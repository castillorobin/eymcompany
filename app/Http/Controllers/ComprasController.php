<?php

namespace App\Http\Controllers;


use App\Models\Producto;
use App\Models\Proveedor; 
use App\Models\Compras;
use App\Models\Detallecompra;
use \PDF;
use App\Models\Cardex;

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
        $productos = Producto::all();
        return view('compra.crear', compact('proveedores', 'detalles', 'productos'));
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
        $id = $request->get('producto');  
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
       $linea->idproducto = $id;
       $linea->descripcion = $request->get('detalle');
       $linea->cantidad = $request->get('cantidad');
       $linea->preciouni = $request->get('precio');
       $linea->subtotal = $request->get('subtotal');
       $linea->save();
        
     
       $productos = Producto::all();

       $detalles = Detallecompra::where('idcompra', $idcompr)->get();

        return view('compra.creardetalles', compact('proveedores', 'ultimoid', 'detalles', 'productos'));
    }

    public function guardartodo(Request $request)
    {
        //$proveedores = Proveedor::all();
        $comprasl = $request->get('id');
        $detalles = Detallecompra::where('idcompra', $comprasl)->get();

        //$ultimoid = Compras::find($id);

        $id = $request->get('producto'); 

        foreach($detalles as $detalle)
        {
            $carde = new Cardex();
            $carde->idproducto = $detalle->idproducto;
            $carde->nota = $request->get('ccf');
            $carde->tipo = "Carga";
            $carde->Cantidad = $detalle->cantidad;
            $carde->save();

            $producto = Producto::find($detalle->idproducto);

        $producto->Cantidad =  $producto->Cantidad + $detalle->cantidad; 
        $producto->save();

        }

        

    
        $compras = Compras::all();
        return view('compra.index', compact('compras'));
    }

    public function guardardet(Request $request)
    {
        $proveedores = Proveedor::all();
        $comprasl = $request->get('id');
        $ultimoid = Compras::find($comprasl);
        $id = $request->get('producto'); 
       //$idcompr = $ultimoid->id;

       $linea = new Detallecompra();
       $linea->idcompra = $request->get('id');
       $linea->idproducto = $id;
       $linea->descripcion = $request->get('detalle');
       $linea->cantidad = $request->get('cantidad');
       $linea->preciouni = $request->get('precio');
       $linea->subtotal = $request->get('subtotal');
       $linea->save();
       $detalles = Detallecompra::where('idcompra', $comprasl)->get();

       $productos = Producto::all();

        return view('compra.creardetalles', compact('proveedores', 'ultimoid', 'detalles', 'productos'));


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

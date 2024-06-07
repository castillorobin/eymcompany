<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotizacionc;
use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Cotidetalle;

class CotizacioncController extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        $cotizaciones = Cotizacionc::all();
        return view('cotizacion.index', compact('cotizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marca=Cotidetalle::all();
     foreach($marca as $mar){
        $mar->delete();
     }
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('cotizacion.crear', compact('clientes', 'productos'));
    }

    public function detalleconcabe(Request $request)
    {
        $codigo = $request->get('codigo');
        $cotienca = new Cotizacionc();
        $cotienca->nombre = $request->get('nombre');
        $cotienca->codigo = $request->get('codigo');
        $cotienca->fecha = $request->get('fecha');
        $cotienca->empresa = $request->get('empresa');
        $cotienca->NCR = $request->get('registro');
        $cotienca->direccion = $request->get('direccion');
        $cotienca->contacto1 = $request->get('contacto1');
        $cotienca->orden = $request->get('orden');
        $cotienca->contacto2 = $request->get('contacto2');
        $cotienca->garantia = $request->get('garantia');
        //$cotienca-> = $request->get('');
        $cotienca->correo = $request->get('correo');

        $cotienca->save();
        $cotiactual = Cotizacionc::where('codigo', $codigo)->get();


        $detalles=Cotidetalle::all();
        $clientes = Cliente::all();
        $productos = Producto::all();
        return view('cotizacion.agregardetalle', compact('clientes', 'productos', 'detalles', 'cotiactual'));
    }



    

    /**
     * Store a newly created resource in storage. 
     */

     public function detalleadd(Request $request)
     {
        //$detalles = new Cotidetalle();
        $detalle = new Cotidetalle();
        
        $detalle->descripcion = $request->get('detalle');
        $detalle->cantidad = $request->get('cantidad');
        $detalle->preciouni = $request->get('precio');
        $detalle->total = $request->get('total');
        $detalle->recargado = $request->get('recarga');
        $detalle->preciorecargo = $request->get('unirecarga');
        $detalle->save();
        
        $codigo = $request->get('codigo');
        $cotiactual = Cotizacionc::where('codigo', $codigo)->get();
       $detalles = Cotidetalle::all();
       $clientes = Cliente::all();
        $productos = Producto::all();
       return view('cotizacion.agregardetalle', compact('clientes', 'productos', 'detalles', 'cotiactual'));
         
     }

     public function borrardet($id)
    {
        Cotidetalle::find($id)->delete();
        $detalles = Cotidetalle::all();
       $clientes = Cliente::all();
        $productos = Producto::all();
       return view('cotizacion.agregardetalle', compact('clientes', 'productos', 'detalles'));
    }
 
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
}

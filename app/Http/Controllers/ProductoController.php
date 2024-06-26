<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Cardex;
use App\Models\Ficha;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }
    public function cargar(Request $request)
    {
        $id = $request->get('idcarga');  

        $cargando = $request->get('cargando'); 
        $cantidad = $request->get('cantidad'); 

        $producto = Producto::find($id);

        $producto->Cantidad =  $cantidad + $cargando; 
        $producto->save();

        
        
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    public function descarga(Request $request)
    {
        $id = $request->get('iddesca');  

        $cargando = $request->get('cargandodes'); 
        $cantidad = $request->get('cantidaddes'); 
        $nota = $request->get('notades');

        $producto = Producto::find($id);

        $producto->Cantidad =  $cantidad - $cargando; 
        $producto->save();

        $carde = new Cardex();
        $carde->idproducto = $id;
        $carde->nota = $nota;
        $carde->tipo = "descarga";
        $carde->Cantidad = $cargando;
        $carde->save();

        
        
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    public function descargo()
    {   
        Ficha::truncate();
        $productos = Producto::all();
        return view('producto.descargo', compact('productos'));
    }
    public function descargoborrar($id)
    {   
        Ficha::find($id)->delete();
        $productos = Producto::all();
        $detalles = Ficha::all();
        return view('producto.descargodetalles', compact('productos', 'detalles'));
    }

    public function descargodetalle(Request $request)
    {   
        
        $id= $request->get('producto');
        $producto = Producto::find($id);
        

            $carde = new Ficha();
            $carde->idproducto = $id;
            $carde->producto = $producto->Nombre;
            $carde->nota = $request->get('nota');
            $carde->tipo = "Descarga";
            $carde->Cantidad = $request->get('cantidad');
            $carde->save();

            $detalles = Ficha::all();

        $productos = Producto::all();
        return view('producto.descargodetalles', compact('productos', 'detalles'));
    }

    public function descargoguardar()
    {   
        $detalles = Ficha::all();
        foreach($detalles as $detalle)
        {
            $carde = new Cardex();
            $carde->idproducto = $detalle->idproducto;
            $carde->nota = $detalle->nota;
            $carde->tipo = "Descarga";
            $carde->Cantidad = $detalle->cantidad;
            $carde->save();

            $producto = Producto::find($detalle->idproducto);

        $producto->Cantidad =  $producto->Cantidad - $detalle->cantidad; 
        $producto->save();

        }

        Ficha::truncate();

        $productos = Producto::all();

        return view('producto.descargo', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        return view('producto.crear', compact('proveedores'));
    }

    public function ver($id)
    {
       // $proveedores = Proveedor::all();
       $ultimoid = Producto::find($id);
       $detalles = Cardex::where('idproducto', $id)->orderBy('created_at', 'desc')->get();
        return view('producto.ver', compact('ultimoid', 'detalles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new Producto();

        $producto->Nombre = $request->get('nombre');
        $producto->Descripcion = $request->get('descripcion');
        $producto->Categoria = $request->get('categoria');
        $producto->Proveedor = $request->get('proveedor');
        $producto->Precio = $request->get('precio');
        $producto->Cantidad = $request->get('cantidad');
        $producto->Unidad_medida = $request->get('unidad');
        $producto->Revision = $request->get('revision');

        
        $producto->save();

        $ultimoid = Producto::latest('id')->first();
        $idprod = $ultimoid->id;

        $carde = new Cardex();
        $carde->idproducto = $idprod;
        $carde->nota = "Compra Inicial";
        $carde->tipo = "alta";
        $carde->Cantidad = $request->get('cantidad');
        $carde->save();

        $productos = Producto::all();
        return view('producto.index', compact('productos'));
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
        $producto = Producto::find($id);
        $proveedores = Proveedor::all();
        return view('producto.editar', compact('producto', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::find($id);

        $producto->Nombre = $request->get('nombre');
        $producto->Descripcion = $request->get('descripcion');
        $producto->Categoria = $request->get('categoria');
        $producto->Proveedor = $request->get('proveedor');
        $producto->Precio = $request->get('precio');
        $producto->Cantidad = $request->get('cantidad');
        $producto->Unidad_medida = $request->get('unidad');
        $producto->Revision = $request->get('revision');
        
        
        $producto->save();

        return redirect()->route('indexpr');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Producto::find($id)->delete();
        return redirect()->route('indexpr');
    }
}

@extends('adminlte::page')

@section('title', 'Cotización')

@section('content_header')
    <h1>Agregar Cotización</h1>
  

@stop

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Ingresar Datos</span>
                    
                </div>
                <div class="card-body bg-white">

                    
                    
                <form action="/cotizacion/detalleadd" method="get">
                        @csrf
                                @method('GET')
<div class="container">

        <div class="row my-2">

                    <div class="col-6">
                        
                        <div class="input-group">
                        <span class="input-group-text">Atencion</span>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cotiactual[0]->nombre}}" readonly>
 
                        </div>
                    </div>


                    <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" >Cotización</span>
                        <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $cotiactual[0]->codigo}}" readonly>

                    </div>
                    </div>

                    <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text">Fecha</span>
                        <input type="text" class="form-control" id="fecha" name="fecha" value="{{ $cotiactual[0]->fecha}}" readonly>
                    </div>
                    </div>
        </div>

        <div class="row my-2">

                    <div class=" col-6">
                    <div class="input-group">
                        <span class="input-group-text">Empresa</span>
                        <input type="text" class="form-control" id="empresa" name="empresa" value="{{ $cotiactual[0]->empresa}}" readonly>
                    </div>
                    </div>
    
        </div>

        <div class="row my-2">

                    <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">Ubicación</span>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $cotiactual[0]->direccion}}" readonly>
                    </div>
                    </div>


                    <div class="col-6">
                        <div class="input-group">
                        <span class="input-group-text">Contacto 1</span>
                        <input type="text" class="form-control" id="contacto1" name="contacto1" value="{{ $cotiactual[0]->contacto1}}" readonly>
                    </div>    
                    </div>     
        </div>

        <div class="row my-2" >

                    <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">Orden</span>
                        <input type="text" class="form-control" id="orden" name="orden" value="{{ $cotiactual[0]->orden}}" readonly >
                    </div>
                    </div>


                    <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">Contacto 2</span>
                        <input type="text" class="form-control" id="contacto2" name="contacto2" value="{{ $cotiactual[0]->contacto2}}" readonly>
                    </div>     
                    </div>  
        </div>

        <div class="row my-2" >

                    <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">Garantia del trabajo</span>
                        <input type="text" class="form-control" id="garantia" name="garantia" value="{{ $cotiactual[0]->garantia}}" readonly>
                    </div>
                    </div>


                    <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">Registro</span>
                        <input type="text" class="form-control" id="registro" name="registro" value="{{ $cotiactual[0]->NCR}}" readonly>
                    </div>  
                    </div>   
                      
        </div>

        <div class="row my-2">

                    <div class="col-6">
                        
                    </div>


                    <div class="col-6">
                    <div class="input-group">
                    <span class="input-group-text">Email</span>
                        <input type="text" class="form-control" id="correo" name="correo" value="{{ $cotiactual[0]->correo}}" readonly>
                    </div> 
                    </div>  


        </div>

        <div class="row my-3">

                    <div class="col-6 text-center">
                     <h3>Tenemos el gusto de cotizarle:</h3>
                    </div>


                    <div class="col-6">
                    <div class="input-group">
                    <span class="input-group-text">Proveedor No.</span>
                        <input type="text" class="form-control" id="correo" name="correo" >
                    </div> 
                    </div>  


        </div>
        @foreach($productos as $producto)
        
        <input type="text" hidden id="det{{ $producto->id }}" value="{{ $producto->Descripcion }}"> 
        <input type="text" hidden id="can{{ $producto->id }}" value="{{ $producto->Cantidad }}"> 
        <input type="text" hidden id="pre{{ $producto->id }}" value="{{ $producto->Precio }}"> 
        
        @endforeach
<hr>
        <div class="row">
            <form action="" class="row g-2" method="get">
                    <div class="mb-3 col-6">
                        <label class="form-label">Productos</label>
                        <select class="form-control js-example-basic-single produ" name="producto" id="producto" onChange="getComboA(this)">
                            @foreach($productos as $producto)
                            <option value="{{$producto->id}}">{{$producto->Nombre}}</option>
                            
                            
                            @endforeach
                            
                        </select>
                    </div>
                  
                    <div class=" col-3 " >
                    
                    
                    
                    </div>   
             
        </div>
       
        <div class="row">
            <div class="mb-3 col-2">
                <label class="form-label">Detalle </label>
                        <input type="text" class="form-control" id="detalle" name="detalle" placeholder="Ingrese descripción">
            </div>
            <div class=" col-1 " >
            
                <label class="form-label">Cantidad </label>
                        <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Ingrese cantidad" onChange="totalizar()">
                
            </div>  


            <div class=" col-1 " >
            
                <label class="form-label">Existencia</label>
                        <input type="text" class="form-control" id="existencia" name="existencia" readonly>
                
            </div>  



            <div class=" col-1 " >
            
                <label class="form-label">Costo</label>
                        <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese Precio" onChange="totalizar()">
                
            </div> 
            <div class=" col-1 " >
            
                <label class="form-label">Total</label>
                        <input type="text" class="form-control" id="total" name="total">
                
            </div> 
            <div class=" col-1 " >
            
                <label class="form-label">Recargado</label>
                        <input type="text" class="form-control" id="recarga" name="recarga" onChange="preciounit()">
                
            </div> 

            <div class=" col-2 " >
            
                <label class="form-label">Precio Uni Recargado</label>
                        <input type="text" class="form-control" id="unirecarga" name="unirecarga">
                
            </div> 
            <div class=" col-3 " >
            
            <button type="submit" class="btn btn-success mt-4" >Agregar</button>
        </form>
            </div>   
</div>

<table id="prove" class="table table-bordered shadow-lg mt-4 cell-border">
    <thead >
        <tr >
            
            <th scope="col">Detalle</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Total</th>
            <th scope="col">Recargado</th>
            <th scope="col">Precio Uni Recargado</th>
            <th scope="col">Accion</th>
        </tr>
    </thead>
    <tbody>
        
        @for ($i=0; $i< count($detalles); $i++)
        <tr >
        <td>{{ $detalles[$i]->descripcion }}</td>
       
        <td>{{ $detalles[$i]->cantidad }}</td>
        <td>${{ $detalles[$i]->preciouni }}</td>
        <td>${{ $detalles[$i]->total }}</td>
        <td>${{ $detalles[$i]->recargado }}</td>
        <td>${{ $detalles[$i]->preciorecargo }}</td>
    
        <td class="opciones text-center" style="">
           
            <a href="/cotizacion/borrardet/{{ $detalles[$i]->id }}">
            <button type="button" class="btn btn-danger">Borrar</button>
            </a>

        </td>
        </tr>
        @endfor
    </tbody>

    </table>
                    
<hr>
<a href="/cotizacion">
                    <button type="button" class="btn btn-danger">Cancelar</button> </a>
&nbsp; &nbsp; &nbsp;
<a href="/cotizacion">
                    <button type="button" class="btn btn-primary">Guardar</button></a>

                </form>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>





<script>
    function getComboA(selectObject) {
var id = selectObject.value;  
//var cant = document.getElementById('can1').text; 
var canti = document.getElementById('can' + id).value ;

document.getElementById("existencia").value = canti;

var deta = document.getElementById('det' + id).value ;

document.getElementById("detalle").value = deta;

var preci = document.getElementById('pre' + id).value ;

document.getElementById("precio").value = preci;

document.getElementById("total").value = preci * canti ;


}

function totalizar() {

    var canti = document.getElementById("cantidad").value ;
    var preci = document.getElementById('precio').value ;

    document.getElementById("total").value = preci * canti ;

}

function preciounit() {

const preuni = parseFloat(document.getElementById("precio").value); 
const subtotal2 = parseFloat(document.getElementById("recarga").value); 

const total = preuni * subtotal2 ;
//const total = subtotal;               


document.getElementById("unirecarga").value = total ;

}


</script>
@endsection



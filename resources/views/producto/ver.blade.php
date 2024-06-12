@extends('adminlte::page')

@section('title', 'Compra')

@section('content_header')
    <h1>Detalle de Producto</h1>
  

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
                    <span class="card-title">Ver</span>
                    
                </div>
                <div class="card-body bg-white">

                    
                    
<div class="container">

        <div class="row my-2">

                    <div class="col-6">
                        
                        <div class="input-group">
                        <span class="input-group-text">Nombre</span>
                        <input type="text" class="form-control" id="fecha" name="fecha" value="{{ $ultimoid->Nombre}}" readonly>
                        <input type="text" class="form-control" id="id" name="id" value="" hidden>
                        </div>
                    </div>


                    <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" >Cantidad</span>
                        <input type="text" class="form-control" id="ccf" name="ccf" value="{{ $ultimoid->Cantidad}}" readonly>

                    </div>
                    </div>

                    <div class="col-3">
                    
                    </div>
        </div>

        <div class="row my-2">   

            <div class=" col-6">
                <div class="input-group">
                    <span class="input-group-text">Descripcion</span>
                    <input type="text" class="form-control" id="proveedor" name="proveedor" value="{{ $ultimoid->Descripcion}}" readonly>
                </div>
                </div>
                    <div class=" col-3">
                    <div class="input-group">
                        <span class="input-group-text">Proveedor</span>
                        <input type="text" class="form-control" id="proveedor" name="proveedor" value="{{ $ultimoid->Proveedor}}" readonly>
                    </div>
                    </div>

    
        </div>

       


      
<hr>
        <div class="row">
            
                   
                    <div class=" col-3 " >
                    
                    
                    
                    </div>   
                
        </div>
        
      

<table id="prove" class="table table-bordered shadow-lg mt-4 cell-border">
    <thead >
        <tr >
            
            <th scope="col">ID</th>
            <th scope="col">Tipo</th>
            <th scope="col">Fecha</th>
            <th scope="col">Nota</th>
            <th scope="col">Cantidad</th>
           
        </tr>
    </thead>
    <tbody>
        
        @for ($i=0; $i< count($detalles); $i++)
        <tr >
        <td>{{ $i}}</td>        
        <td>{{ $detalles[$i]->tipo }}</td>
        <td>{{ $detalles[$i]->created_at }}</td>
        <td>{{ $detalles[$i]->nota }}</td>
        <td>{{ $detalles[$i]->cantidad }}</td>
        
    
        
        </tr>
        @endfor
    </tbody>

    </table>
                    
<hr>
<a href="/compra">
                    <button type="button" class="btn btn-danger">Regresar</button> </a>
                    &nbsp; &nbsp; &nbsp;
                    <a href="/compra/verpdf/{{ $ultimoid->id }}">
                                        <button type="button" class="btn btn-primary">Generar PDF</button></a>
                    
                </div>
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


function preciounit() {

                 const preuni = parseFloat(document.getElementById("precio").value); 
                 const subtotal2 = parseFloat(document.getElementById("cantidad").value); 
                
                 const total = preuni * subtotal2 ;
                 //const total = subtotal;               
                 

document.getElementById("subtotal").value = total ;

}

</script>




<script>
        

        $(document).ready(function() {
         
                              $("#recarga").change(function() {
                                                                            
                 
        
                           });
        

                        });
    </script>

@endsection



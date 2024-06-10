<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotizacion</title>

    
</head>
<body>
    

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                
                <div class="card-body bg-white">

                    
<div class="container">



        <div class="row my-2">
        <table> 
    <tr>
        <td style="width:200px;">
        <div class="col-6">
                        
                        <div class="input-group">
                        <span class="input-group-text">Atencion: </span>
                        <span class="input-group-text">{{ $cotiactual[0]->nombre}}</span>
                        
 
                        </div>
                    </div>
        </td>
        <td>
        <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" >Cotización: </span>
                        <span class="input-group-text">{{ $cotiactual[0]->codigo}}</span>

                    </div>
                    </div>
        </td>
        </tr>

                    


                   

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
        
<hr>
       
       





           
           
          
          
            
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
    
       
        </tr>
        @endfor
    </tbody>

    </table>
                    

                </div>
            </div>
        </div>
    </div>
</section>




</body>
</html>
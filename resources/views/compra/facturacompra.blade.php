<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
</head>
<body>
    


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

                    
                    
                    <form action="/compra/guardardet" method="get">
                        @csrf
                                @method('GET')
<div class="container">

        <div class="row my-2">

                    <div class="col-6">
                        
                        <div class="input-group">
                        <span class="input-group-text">Fecha</span>
                        <input type="date" class="form-control" id="fecha" name="fecha" value="{{ $ultimoid->Fecha}}" readonly>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $ultimoid->id}}" hidden>
                        </div>
                    </div>


                    <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text" >Credito fiscal</span>
                        <input type="text" class="form-control" id="ccf" name="ccf" value="{{ $ultimoid->CCF}}" readonly>

                    </div>
                    </div>

                    <div class="col-3">
                    
                    </div>
        </div>

        <div class="row my-2">   

                    <div class=" col-6">
                    <div class="input-group">
                        <span class="input-group-text">Proveedor</span>
                        <input type="text" class="form-control" id="proveedor" name="proveedor" value="{{ $ultimoid->Proveedor}}" readonly>
                    </div>
                    </div>

                    <div class="col-3">
                    <div class="input-group">
                        <span class="input-group-text">Total</span>
                        <input type="text" class="form-control" id="total" name="total" value="{{ $ultimoid->Total}}" readonly>
                    </div>
                    </div>
    
        </div>

        <div class="row my-2">

                    <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">Nota</span>
                        <textarea name="nota" id="nota" cols="65" readonly>{{ $ultimoid->Nota}}</textarea>
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
            
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Costo</th>
            <th scope="col">Subtotal</th>
           
        </tr>
    </thead>
    <tbody>
        
        @for ($i=0; $i< count($detalles); $i++)
        <tr >
        <td>{{ $detalles[$i]->descripcion}}</td>
       
        <td>{{ $detalles[$i]->cantidad }}</td>
        <td>${{ $detalles[$i]->preciouni }}</td>
        <td>${{ $detalles[$i]->subtotal }}</td>
        
    
        
        </tr>
        @endfor
    </tbody>

    </table>
                    
<hr>

                </div>
                </div>
            </div>
        </div>
    </div>
</section>






</body>
</html>
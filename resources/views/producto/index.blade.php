@extends('adminlte::page')

@section('title', 'Proveedor')

@section('content_header')
    <h1>Listado de Productos</h1>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop

@section('content')



<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Productos</span>
                    <a href="/producto/crear">
                    <button type="button" class="btn btn-success" style="float: right;">Agregar Producto</button>
                </a>
                </div>
                <div class="card-body bg-white">


                    <table id="prove" class="table table-bordered shadow-lg mt-4 cell-border">
                        <thead >
                            <tr >
                                
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Proveedor</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @for ($i=0; $i< count($productos); $i++)
                            <tr >
                            <td>{{ $productos[$i]->id }}</td>
                           
                            <td>{{ $productos[$i]->Nombre }}</td>
                            <td>{{ $productos[$i]->Descripcion }}</td>
                            <td>{{ $productos[$i]->Proveedor }}</td>
                            <td>{{ $productos[$i]->Cantidad }}</td> 
                        
                            <td class="opciones text-center" style="">
                                <a href="/producto/ver">
                                <button type="button" class="btn btn-primary">Ver</button>
                            </a>           

                            <a href="/producto/editar/{{ $productos[$i]->id }}">
                                <button type="button" class="btn btn-warning">Editar</button>
                            </a>

                                <a href="/producto/borrar/{{ $productos[$i]->id }}">
                                <button type="button" class="btn btn-danger">Borrar</button>
                                </a>
 
                            </td>
                            </tr>
                            @endfor
                        </tbody>

                        </table>
                        



                    
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>


<script>
     /*
$(document).ready( function () {
    $('#prove').DataTable();
} );
*/

new DataTable('#prove', {
    
    
});

</script>



@endsection



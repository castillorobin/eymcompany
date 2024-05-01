@extends('adminlte::page')

@section('title', 'Cotización')

@section('content_header')
    <h1>Agregar Cotización</h1>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop

@section('content')



<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Ingresar Datos</span>
                    
                </div>
                <div class="card-body bg-white">

                    
                    
<form action="/proveedor/guardar" method="get">
@csrf
        @method('GET')
        <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Atención</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre">
                    </div>


                    <div class="mb-3 col-3">
                        <label class="form-label">Cotización</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el #">
                    </div>

                    <div class="mb-3 col-3">
                        <label class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el # telefono">
                    </div>
        </div>

        <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Empresa</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Empresa">
                    </div>


                    <div class="mb-3 col-3">
                        <label class="form-label">Registro</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el #">
                    </div>      
        </div>

        <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Ubicación</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
                    </div>


                    <div class="mb-3 col-3">
                        <label class="form-label">Contacto 1</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el contacto">
                    </div>      
        </div>

        <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Orden</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
                    </div>


                    <div class="mb-3 col-3">
                        <label class="form-label">Contacto 2</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el contacto">
                    </div>      
        </div>

        <div class="row">

                    <div class="mb-3 col-6">
                        <label class="form-label">Garantia</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="">
                    </div>


                    <div class="mb-3 col-3">
                        <label class="form-label">Registro</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el #">
                    </div>     
                    <div class="mb-3 col-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el Email">
                    </div>   
        </div>

        <div class="row">
                    <div class="mb-3 col-6">
                        <label class="form-label">Productos</label>
                        <select class="form-control" name="productos" id="productos">
                            @foreach($productos as $producto)
                            <option value="{{$producto->Nombre}}">{{$producto->Nombre}}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <div class=" col-3 " >
                    
                    <button type="button" class="btn btn-success mt-4" >Success</button>
                    
                    </div>   
        </div>
                    
<hr>
<a href="/proveedor">
                    <button type="button" class="btn btn-danger">Cancelar</button> </a>
&nbsp; &nbsp; &nbsp;
                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  



@endsection



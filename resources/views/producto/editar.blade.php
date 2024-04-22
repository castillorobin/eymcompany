@extends('adminlte::page')

@section('title', 'Proveedor')

@section('content_header')
    <h1>Editar Producto</h1>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
@stop

@section('content')



<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">Editar Datos</span>
                    
                </div>
                <div class="card-body bg-white">

                    
                    
<form action="/producto/update/{{ $producto->id }}" method="get">
@csrf
        @method('GET')

                    
        <div class="mb-3 col-8">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->Nombre }}">
        </div>


        <div class="mb-3 col-4">
            <label class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $producto->Descripcion }}">
        </div>

        <div class="mb-3 col-4">
            <label class="form-label">Categoría</label>
            <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $producto->Categoria }}">
        </div>

        <div class="mb-3 col-4">
            <label class="form-label">Proveedor</label>
            <select class="form-control" name="proveedor" id="proveedor">
                <option value="{{ $producto->Proveedor }}">{{ $producto->Proveedor }}</option>
                @foreach ($proveedores as $proveedor)
                <option value="{{ $proveedor->Nombre }}">{{ $proveedor->Nombre }}</option>
                @endforeach
                
            </select>
        </div>


        <div class="mb-3 col-8">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" value="{{ $producto->Precio }}">
        </div>

        <div class="mb-3 col-8">
            <label class="form-label">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{ $producto->Cantidad }}">
        </div>

        <div class="mb-3 col-4">
            <label class="form-label">Unidad de medida</label>
            <input type="text" class="form-control" id="unidad" name="unidad" value="{{ $producto->Unidad_medida }}">
        </div>

        <div class="mb-3 col-4">
            <label class="form-label">Periodo de revisión</label>
            <input type="text" class="form-control" id="revision" name="revision" value="{{ $producto->Revision }}">
        </div>
       


<hr>
<a href="/producto">
                    <button type="button" class="btn btn-danger">Cancelar</button> </a>
&nbsp; &nbsp; &nbsp;
                    <button type="submit" class="btn btn-primary">Editar</button>

                </form>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  



@endsection



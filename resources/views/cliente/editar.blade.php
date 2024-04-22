@extends('adminlte::page')

@section('title', 'Proveedor')

@section('content_header')
    <h1>Editar Cliente</h1>
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

                    
                    
<form action="/cliente/update/{{ $cliente->id }}" method="get">
@csrf
        @method('GET')

                    <div class="mb-3 col-8">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $cliente->Nombre }}">
                    </div>

                    

                    <div class="mb-3 col-8">
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $cliente->Direccion }}">
                    </div>

                    <div class="mb-3 col-4">
                        <label class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $cliente->Telefono }}">
                    </div>


                    <div class="mb-3 col-4">
                        <label class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" value="{{ $cliente->Correo }}">
                    </div>

                    <div class="mb-3 col-4">
                        <label class="form-label">NCR</label>
                        <input type="text" class="form-control" id="ncr" name="ncr" value="{{ $cliente->NCR }}">
                    </div>
                    


<hr>
<a href="/cliente">
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



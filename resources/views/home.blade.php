@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Panel de Administración</h1>
@stop

@section('content')
   
<section class="content">
    <div class="container-fluid">
    
    <div class="row">
    <div class="col-lg-3 col-6">
    
    <div class="small-box bg-info">
    <div class="inner">
    <h3>{{ $coti }}</h3>
    <p>Cotizaciones</p>
    </div>
    <div class="icon">
        <i class="fas fa-file-invoice"></i>
    </div>
    <a href="/cotizacion" class="small-box-footer">Ver Listado <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-3 col-6">
    
    <div class="small-box bg-success">
    <div class="inner">
    <h3>{{ $coti }}<sup style="font-size: 20px"></sup></h3>
    <p>Compras</p>
    </div>
    <div class="icon">
        <i class="fas fa-cart-plus"></i>
    </div>
    <a href="/compra" class="small-box-footer">Ver Listado <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-3 col-6">
    
    <div class="small-box bg-warning">
        <div class="inner">
    <h3>{{ $produ }}</h3>
    <p>Inventario</p>
        </div>
        <div class="icon">
            <i class="fas fa-boxes"></i>
        </div>
    <a href="/producto" class="small-box-footer">Ver listado <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    
    <div class="col-lg-3 col-6">
    
    <div class="small-box bg-danger">
        <div class="inner">
    <h3>{{ $prove }}</h3>
    <p>Proveedores</p>
        </div>
        <div class="icon">
            <i class="fas fa-truck"></i>
        </div>
    <a href="/proveedor" class="small-box-footer">Ver listado <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>



    
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card-header">
            <span class="card-title">Últimas Cotizaciones</span>
            <a href="/cotizacion/crear">
            <button type="button" class="btn btn-success" style="float: right;">Crear Cotización</button>
        </a>
        </div>
        <table id="prove" class="table table-bordered shadow-lg mt-4 cell-border">
            <thead >
                <tr >
                    
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                
                @for ($i=0; $i< count($cotizaciones); $i++)
                <tr >
                <td>{{ $cotizaciones[$i]->codigo }}</td>
               
                <td>{{ $cotizaciones[$i]->nombre }}</td>
                <td>{{ $cotizaciones[$i]->empresa }}</td>
                <td>{{ $cotizaciones[$i]->fecha }}</td>
            
                <td class="opciones text-center" style="">
                    <a href="/cotizacion/ver/{{ $cotizaciones[$i]->codigo }} ">
                    <button type="button" class="btn btn-primary"><i class="fas fa-eye"></i></button>
                </a>           

                <a href="/proveedor/editar/{{ $cotizaciones[$i]->id }}">
                    <button type="button" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                </a>

                    <a href="/proveedor/borrar/{{ $cotizaciones[$i]->id }}">
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </a>

                </td>
                </tr>
                @endfor
            </tbody>

            </table>
    </div>
</div>
    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    
    <script src="/public/vendor/adminlte/dist/js/adminlte.js"></script>
@stop
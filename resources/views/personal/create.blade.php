

@extends('adminlte::page')

@section('title', 'Agregar')

@section('content_header')
    <h1>Crear Registro</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Personal</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('personals.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('personal.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

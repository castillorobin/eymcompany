@extends('layouts.app')

@section('template_title')
    {{ $personal->name ?? __('Show') . " " . __('Personal') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Personal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('personals.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $personal->Nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Dui:</strong>
                            {{ $personal->DUI }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fehca Ingreso:</strong>
                            {{ $personal->Fehca_ingreso }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cargo:</strong>
                            {{ $personal->Cargo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nacimiento:</strong>
                            {{ $personal->Nacimiento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Contacto:</strong>
                            {{ $personal->Contacto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Parentesco:</strong>
                            {{ $personal->Parentesco }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $personal->Telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion:</strong>
                            {{ $personal->Direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

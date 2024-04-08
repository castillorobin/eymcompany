@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Personal</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personal') }}
                            </span>

                             <div class="float-right">
                                <a href="personal.create" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Dui</th>
										<th>Fehca Ingreso</th>
										<th>Cargo</th>
										<th>Nacimiento</th>
										<th>Contacto</th>
										<th>Parentesco</th>
										<th>Telefono</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personals as $personal)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $personal->Nombre }}</td>
											<td>{{ $personal->DUI }}</td>
											<td>{{ $personal->Fehca_ingreso }}</td>
											<td>{{ $personal->Cargo }}</td>
											<td>{{ $personal->Nacimiento }}</td>
											<td>{{ $personal->Contacto }}</td>
											<td>{{ $personal->Parentesco }}</td>
											<td>{{ $personal->Telefono }}</td>
											<td>{{ $personal->Direccion }}</td>

                                            <td>
                                                <form action="{{ route('personals.destroy',$personal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personals.show',$personal->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personals.edit',$personal->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $personals->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
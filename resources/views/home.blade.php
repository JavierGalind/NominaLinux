@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1 style="text-align: center">Bienvenido al Sistema de Nomina</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group">
                        <label>Seleccione la empresa a administrar:</label>
                        <select class="form-control">
                        @foreach ($empresas as $emp)
                        <option value="{{$emp->id}}">{{$emp->nombre_empresa}}</option>  
                        @endforeach
                          
                        </select>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

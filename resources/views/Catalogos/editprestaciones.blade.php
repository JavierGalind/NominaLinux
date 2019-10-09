@extends('layouts.layout')

@section('content')
  <div class="container">
    <h1>Editar prestaciones </h1>
    <form method="post" action="{{route('prestaciones.update',$prestaciones->id)}}" enctype="multipart/form-data" file="true">
      @method('PUT')
      @csrf
    <div class="row">
      <div class="col-md-8">

          <div class="form-group required autocomplete">
            <label>Numero de años:</label>
            <input type="number" name="anio" value="{{$prestaciones->anio}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Aguinaldo:</label>
            <input type="number" name="aguinaldo" value="{{$prestaciones->aguinaldo}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Numero de dia de vacaciones:</label>
            <input type="number" name="vacaciones" value="{{$prestaciones->vacaciones}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>% de prima vacacional:</label>
            <input type="number" name="prima_vacacional" value="{{$prestaciones->vacaciones}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete col-sm-6">
              <label>Empresa:</label>
              <select name="id_empresa" id="id_empresa" class="form-control">
              <option value="{{$emp->id}}"></option>
               @foreach ($empresa as $emp)
                   <option value="{{$emp->id}}">{{$emp->nombre_empresa}}</option>
               @endforeach

              </select>
          </div>
           <div class="form_group">
             <button class="btn btn-primary">Guardar</button>
            </div>
      </div>
        
      </div>
    </form>
  </div>
@endsection
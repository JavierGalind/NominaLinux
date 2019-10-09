@extends('layouts.layout')

@section('content')
  <div class="container">
    <h1>Editar nombre del Departamento </h1>
    <form method="post" action="{{route('departamento.update',$departamento->id)}}" enctype="multipart/form-data" file="true">
      @method('PUT')
      @csrf
    <div class="row">
      <div class="col-md-8">

          <div class="form-group required autocomplete">
            <label>Nombre del Departamento:</label>
            <input type="text" name="departamento" value="{{$departamento->departamento}}" class="form-control" required>
          </div>
           <div class="form_group">
             <button class="btn btn-primary">Guardar</button>
            </div>
      </div>
        
      </div>
    </form>
  </div>
@endsection
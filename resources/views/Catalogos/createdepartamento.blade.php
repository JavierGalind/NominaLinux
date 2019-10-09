@extends('layouts.layout')

@section('content')
  <div class="container">
    <h1>Añadir un nuevo departamento </h1>
    <form method="post" action="{{route('departamento.store')}}" enctype="multipart/form-data" file="true">
      @csrf
    <div class="row">
      <div class="col-md-8">

          <div class="form-group required autocomplete">
            <label>Nombre del nuevo departamento:</label>
            <input type="text" name="departamento" placeholder="Ingresa el nombre del nuevo departamento" class="form-control" required>
          </div>
           <div class="form_group">
             <button class="btn btn-primary">Guardar</button>
            </div>
      </div>
        
      </div>
    </form>
  </div>
@endsection
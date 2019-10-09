@extends('layouts.layout')

@section('content')
  <div class="container">
    <h1>Editar nombre del puesto </h1>
    <form method="post" action="{{route('jobs.update',$job->id)}}" enctype="multipart/form-data" file="true">
      @method('PUT')
      @csrf
    <div class="row">
      <div class="col-md-8">

          <div class="form-group required autocomplete">
            <label>Nombre del puesto:</label>
            <input type="text" name="job" value="{{$job->job}}" class="form-control" required>
          </div>
           <div class="form_group">
             <button class="btn btn-primary">Guardar</button>
            </div>
      </div>
        
      </div>
    </form>
  </div>
@endsection
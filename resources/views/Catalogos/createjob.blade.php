@extends('layouts.layout')

@section('content')
  <div class="container" id="puestos">
    <h1>Añadir un nuevo puesto </h1>
    <div class="row">
    <form method="post" action="{{route('jobs.store')}}" enctype="multipart/form-data" file="true">
      @csrf
    
      <div class="col-md-8" id="copiar">

          <div class="form-group required autocomplete">
            <label>Nombre del puesto:</label>
            <input type="text" name="job" placeholder="Ingresa el nombre del puesto nuevo" class="form-control" required>
          </div>
           <div class="form_group">
             <button class="btn btn-primary">Guardar</button>
            </div>
      </div>
        

    </form>
  </div>
  </div>
@endsection
<!-- bootstrap datepicker -->
@push('styles')
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link href="../../simple-iconpicker.min.css" rel='stylesheet' type='text/css' />
@endpush

@push('scripts')
  <!-- CK Editor -->
  <script src="../../bower_components/ckeditor/ckeditor.js"></script>
  <script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script>
  $('#datepicker').datepicker({
    autoclose: true
  })
   CKEDITOR.replace('editor')
  </script>

<script type='text/javascript' src="../../simple-iconpicker.min.js"></script>
<script>
$(document).ready(function(){
  $('.input1').iconpicker(".input1");
});
</script>
@endpush

@extends('layouts.layout')

@section('content')
  <div class="container">
    <h1>Añadir un nuevo concepto </h1>
    <form method="post" action="{{route('conceptsat.store')}}" enctype="multipart/form-data" file="true">
      @csrf
    <div class="row">
      <div class="col-md-8">

        <div class="form-group required">
          <label for="">Clave del concepto</label>
          <input type="text" name="clave_sat" placeholder="Ingresa la clave del concepto">
        </div>  
        <div class="form-group required autocomplete">
            <label>Nombre la descripción:</label>
            <input type="text" name="concepto" placeholder="Ingresa el nuevo concepto" class="form-control" required>
        </div>
        <div class="form-group col-sm-4">
            <label>Fecha de vigencia:</label>
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" name= "fecha_vigencia" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
            </div>
        </div>
        <div class="form-group required autocomplete col-sm-4">
            <label>Tipo:</label>
            <select name="tipo" id="tipo" class="form-control">
            <option value="">Selecciona eltipo de concepto</option>
             
                 <option>Deduccion</option>
                 <option>Persepcion</option>

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
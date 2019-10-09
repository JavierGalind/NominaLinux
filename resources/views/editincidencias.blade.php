@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Editar incidencia </h1>
    <form method="post" action="{{route('incidencias.update',$incidencia->id)}}" enctype="multipart/form-data" file="true">
        @method('PUT')
      @csrf
    <div class="row">
      <div class="col-md-8">

        <div class="form-group required autocomplete">
            <label>Eempleado:</label>
            <select name="id_empleado" id="id_empleado" class="form-control">
            <option value="">Selecciona al empleado</option>
             @foreach ($empleado as $emp)
                 <option value="{{$emp->id}}">{{$emp->nombre_empleado}}</option>
             @endforeach

            </select>
          </div>
          <div class="form-group required autocomplete">
            <label>Seleccione el concepto:</label>
            <select name="id_concepto" id="id_concepto" class="form-control">
            <option value="">Elija un un concepto</option>
             @foreach ($concepto as $cons)
                 <option value="{{$cons->id}}">{{$cons->nombre}}</option>
             @endforeach

            </select>
          </div>
          <div class="form-group required autocomplete">
            <label>Cantidad:</label>
            <input type="text" name="cantidad" value="{{$incidencia->cantidad}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
                <label>Importe:</label>
                <input type="number" name="importe" value="{{$incidencia->importe}}" class="form-control" required>
              </div>
              <div class="form-group required autocomplete">
                <label>Monto:</label>
                <input type="text" name="monto" value="{{$incidencia->monto}}" class="form-control" required>
              </div>
              <div class="form-group required autocomplete">
                    <label>Observaciones:</label>
                    <input type="text" name="observaciones" value="{{$incidencia->observaciones}}" class="form-control" required>
                  </div>
                  <div class="form-group required autocomplete">
                        <label>Soporte:</label>
                        <input type="text" name="soporte" value="{{$incidencia->soporte}}" class="form-control" required>
                      </div>
                                  
           <div class="form_group">
             <button class="btn btn-primary">Guardar</button>
            </div>
      </div>
        
      </div>
    </form>
  </div>
@endsection
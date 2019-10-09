@extends('layouts.layout')

@section('content')
<div class="container">
    <form method="post" action="{{route('incidencias.store')}}" enctype="multipart/form-data" file="true">
      @csrf
    <div class="row">
      <div class="col-md-8">

          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Añadir incidencia</h3>
              </div>
              <div class="box-header">
  
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
              <input type="text" name="cantidad" placeholder="Ingresa la cantidad" class="form-control" required>
            </div>
            <div class="form-group required autocomplete">
                  <label>Importe:</label>
                  <input type="number" name="importe" placeholder="Ingresa el importe" class="form-control" required>
                </div>
                <div class="form-group required autocomplete">
                  <label>Monto:</label>
                  <input type="text" name="monto" placeholder="Ingresa el monto" class="form-control" required>
                </div>
                <div class="form-group required autocomplete">
                      <label>Observaciones:</label>
                      <input type="text" name="observaciones" placeholder="Ingresa tus observaciones" class="form-control" required>
                    </div>
                    <div class="form-group required autocomplete">
                          <label>Soporte:</label>
                          <input type="text" name="soporte" placeholder="Ingresa el soporte" class="form-control" required>
                        </div>
                                    
             <div class="form_group">
               <button class="btn btn-primary">Guardar</button>
              </div>
        </div>
          
        </div>
          </div>
      </div>
             
    </form>
  </div>
@endsection
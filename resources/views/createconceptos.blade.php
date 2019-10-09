@extends('layouts.layout')

@section('content')
<style>
  .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
</style>
  <div class="container">
  
    <form method="post" action="{{route('conceptosempresas.store')}}" enctype="multipart/form-data" file="true">
      @csrf

      <div class="row flex-center position-ref full-height">
        <div class="col-md-12">
  
  
          <div class="box box-primary">
            <div class="box-header with-border flex-center position-ref full-height" style="background-color:gray">
              <h1>Añadir un nuevo concepto </h1>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-header">

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group required autocomplete">
                          <label>Nombre del nuevo concepto:</label>
                          <input type="text" name="nombre" placeholder="Ingresa el nuevo concepto" class="form-control" required>
                        </div>
                        <div class="form-group required autocomplete col-sm-6">
                              <label>Cantidad:</label>
                              <input type="number" name="cantidad" placeholder="Ingresa la cantidad" class="form-control" required>
                            </div>
                            <div class="form-group required autocomplete col-sm-6">
                              <label>Formula:</label>
                              <input type="text" name="formula" placeholder="Ingresa la cantidad" class="form-control" required>
                            </div>
                            <div class="form-group required autocomplete col-sm-6">
                                  <label>Importe:</label>
                                  <input type="number" name="importe" placeholder="Ingresa el importe" class="form-control" required>
                                </div>
                                <div class="form-group required autocomplete col-sm-6">
                                      <label>Ingresa el ISR:</label>
                                      <input type="text" name="isr" placeholder="Ingresa el ISR" class="form-control" required>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-6">
                                          <label>Numero del IMSS:</label>
                                          <input type="text" name="imss" placeholder="Ingresa el numero del IMSS" class="form-control" required>
                                        </div>
                                        <div class="form-group required autocomplete col-sm-6">
                                              <label>Erogacion de Estado:</label>
                                              <input type="text" name="erogacion_estado" placeholder="Ingresa la erogacion de estado" class="form-control" required>
                                            </div>
                                            <div class="form-group required autocomplete col-sm-6">
                                                  <label>Codificacion Contable:</label>
                                                  <input type="text" name="codificacion_contable" placeholder="Ingresa la codificacion contable" class="form-control" required>
                                                </div>
                                                <div class="form-group required autocomplete col-sm-6">
                                                      <label>Tipo:</label>
                                                      <input type="text" name="tipo" placeholder="Ingresa el tipo" class="form-control" required>
                                                    </div>
                                                    <div class="form-group required autocomplete col-sm-6">
                                                      <label>Concepto del SAT asociado:</label>
                                                      <select name="id_conceptosat" id="id_conceptosat" class="form-control">
                                                      <option value="">Elija el concepto</option>
                                                       @foreach ($conceptosat as $con)
                                                           <option value="{{$con->id}}">{{$con->clave_sat}} {{$con->concepto}}</option>
                                                       @endforeach
              
                                                      </select>
                                                    </div>
                         <div class="form_group col-sm-6">
                           <button class="btn btn-primary">Guardar</button>
                          </div>
                    </div>
                      
                    </div>
            </div>
          </div>
        </div>

    
    </form>
  </div>
@endsection
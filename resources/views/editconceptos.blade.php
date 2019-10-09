@extends('layouts.layout')

@section('content')
  <div class="container">
    <h1>Editar Concepto </h1>
    <form method="post" action="{{route('conceptosempresas.update',$conceptos->id)}}" enctype="multipart/form-data" file="true">
      @method('PUT')
      @csrf
    <div class="row">
      <div class="col-md-8">

          <div class="form-group required autocomplete">
            <label>Nombre del nuevo concepto:</label>
            <input type="text" name="nombre" value="{{$conceptos->nombre}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
                <label>Cantidad:</label>
                <input type="number" name="cantidad" value="{{$conceptos->cantidad}}" class="form-control" required>
              </div>
              <div class="form-group required autocomplete">
                    <label>Importe:</label>
                    <input type="number" name="importe" value="{{$conceptos->importe}}" class="form-control" required>
                  </div>
                  <div class="form-group required autocomplete">
                    <label>Formula:</label>
                    <input type="text" name="formula" value="{{$conceptos->formula}}" class="form-control" required>
                  </div>
                  <div class="form-group required autocomplete">
                        <label>Ingresa el ISR:</label>
                        <input type="text" name="isr" value="{{$conceptos->isr}}" class="form-control" required>
                      </div>
                      <div class="form-group required autocomplete">
                            <label>Numero del IMSS:</label>
                            <input type="text" name="imss" value="{{$conceptos->imss}}" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete">
                                <label>Erogacion de Estado:</label>
                                <input type="text" name="erogacion_estado" value="{{$conceptos->erogacion_estado}}" class="form-control" required>
                              </div>
                              <div class="form-group required autocomplete">
                                    <label>Codificacion Contable:</label>
                                    <input type="text" name="codificacion_contable" value="{{$conceptos->codificacion_contable}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                        <label>Tipo:</label>
                                        <input type="text" name="tipo" value="{{$conceptos->tipo}}" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete">
                                        <label>Empresa:</label>
                                        <input type="number" name="id_empresas" value="{{$conceptos->id_empresas}}" class="form-control" required>
                                      </div>
           <div class="form_group">
             <button class="btn btn-primary">Guardar</button>
            </div>
      </div>
        
      </div>
    </form>
  </div>
@endsection
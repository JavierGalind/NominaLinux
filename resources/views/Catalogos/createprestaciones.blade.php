@extends('layouts.layout')

@section('content')
  <div class="container">
    <h1>Añadir nueva prestacion </h1>
    <form method="post" action="{{route('prestaciones.store')}}" enctype="multipart/form-data" file="true">
      @csrf
    <div class="row">
      <div class="col-md-8">
              <div class="box-header">
                  <div class="row flex-center position-ref full-height">
                      <div class="col-md-8">
            <h1>Añadir nueva prestacion </h1>
            <div class="form-group required autocomplete">
                <label>Numero de Años:</label>
                <input type="number" name="anio" placeholder="Ingresa el numero de años" class="form-control" required>
              </div>
              <div class="form-group required autocomplete">
                <label>Aguinaldo:</label>
                <input type="number" name="aguinaldo" placeholder="Ingresa el numero de dias de aguinaldo" class="form-control" required>
              </div>
              <div class="form-group required autocomplete">
                <label>Numero de vacaciones :</label>
                <input type="number" name="vacaciones" placeholder="Ingresa el numero de dias de vacaciones" class="form-control" required>
              </div>
              <div class="form-group required autocomplete">
                <label>Prima vacacional:</label>
                <input type="number" name="prima_vacacional" placeholder="Ingresa el porcentaje de prima vacacional" class="form-control" required>
              </div>
              <div class="form-group required autocomplete">
                  <label>Bono:</label>
                  <input type="number" name="bono" placeholder="Ingresa el monto del bono" class="form-control" required>
                </div>
                <div class="form-group required autocomplete">
                    <label>Monto de vales de despensa:</label>
                    <input type="number" name="vales" placeholder="Ingresa el monto de vales" class="form-control" required>
                  </div>
                  <div class="form-group required autocomplete">
                      <label>Fondo de ahorro:</label>
                      <input type="number" name="fondo" placeholder="Ingresa el monto del fondo de ahorro" class="form-control" required>
                    </div>
                    <div class="form-group required autocomplete col-sm-12">
                        <label>Empresa:</label>
                        <select name="id_empresa" id="id_empresa" class="form-control">
                        <option value="">Elija la empresa</option>
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
                  </div>
              </div>
          </div>
         
        
      
    </form>
  </div>
@endsection
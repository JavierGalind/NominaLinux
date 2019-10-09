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
   
    <form method="post" action="{{route('empresas.store')}}" enctype="multipart/form-data" file="true">
      @csrf
      <div class="row flex-center position-ref full-height">
          <div class="col-md-12">
    
    
            <div class="box box-primary">
              <div class="box-header with-border flex-center position-ref full-height" style="background-color:gray">
                <h1>Añadir una nueva empresa </h1>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <div class="box-header">
                  <div class="row flex-center position-ref full-height">
                      <div class="col-md-8">
                          <div class="form-group required autocomplete">
                            <label>Nombre de la empresa:</label>
                            <input type="text" name="nombre_empresa" placeholder="Ingresa el nombre de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>RFC de la empresa:</label>
                            <input type="text" name="rfc" placeholder="Ingresa el RFC de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Registro de estado :</label>
                            <input type="text" name="registro_estado" placeholder="Ingresa el registro de estado" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Telefono:</label>
                            <input type="number" name="telefono" placeholder="Ingresa el telefono de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Estatus:</label>
                            <input type="text" name="status" placeholder="Ingresa el estatus de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Registro Patronal:</label>
                            <input type="text" name="registro_patronal" placeholder="Ingresa el registro patronal de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                              <label>Razon Social:</label>
                              <input type="text" name="razon_social" placeholder="Ingresa la razon social de la empresa" class="form-control" required>
                            </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Nombre del representante legal:</label>
                            <input type="text" name="representante_laboral" placeholder="Ingresa el nombre del representante de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>RFC del representante legal:</label>
                            <input type="text" name="rfc_representante" placeholder="Ingresa el RFC del representante de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Direccion de la empresa:</label>
                            <input type="text" name="direccion" placeholder="Ingresa la direccion de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Numero interno:</label>
                            <input type="number" name="numero_interno" placeholder="Ingresa el numero interno de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Numero externo:</label>
                            <input type="number" name="numero_externo" placeholder="Ingresa el numero externo de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Colonia:</label>
                            <input type="text" name="colonia" placeholder="Ingresa la colonia de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Estado:</label>
                            <input type="text" name="estado" placeholder="Ingresa el estado de la empresa" class="form-control" required>
                          </div>
                          <div class="form-group required autocomplete col-sm-6">
                            <label>Codigo Postal:</label>
                            <input type="text" name="cp" placeholder="Ingresa el codigo postal de la empresa" class="form-control" required>
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
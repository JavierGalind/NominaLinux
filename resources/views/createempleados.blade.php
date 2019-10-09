@extends('layouts.layout')

@section('content')
  <div class="container">
    <h1>Añadir un nuevo empleado </h1>
    <form method="post" action="{{route('empleados.store')}}" enctype="multipart/form-data" file="true">
      @csrf
      

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                      <!-- Custom Tabs -->
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab">Datos Personales </a></li>
                          <li><a href="#tab_2" data-toggle="tab">Datos de Contratación</a></li>
                          <li><a href="#tab_3" data-toggle="tab">Datos Medicos</a></li>
                          <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_1">
                              <div class="box box-primary">
                                  <div class="box-header with-border">
                                  
                                    <div class="form-group required autocomplete col-sm-4">
                                          <label>Nombre(s):</label>
                                          <input type="text" name="nombre_empleado" placeholder="Inrese el nombre" class="form-control" required>
                                        
                                    </div>
                                    <div class="form-group required autocomplete col-sm-4">
                                        <label>Apellido Paterno:</label>
                                        <input type="text" name="ap_paterno" placeholder="Apellido paterno" class="form-control" required>
                                      
                                    </div>
                                    <div class="form-group required autocomplete col-sm-4">
                                        <label>Apellido Materno:</label>
                                        <input type="text" name="ap_materno" placeholder="Apellido Materno" class="form-control" required>
                                      
                                    </div>
                                    <div class="form-group required autocomplete col-sm-4">
                                        <label>Sexo:</label>
                                        <select name="sexo" id="sexo" class="form-control">
                                        <option value="">Selecciona el sexo</option>
                                         
                                             <option>Mujer</option>
                                             <option>Hombre</option>
                          
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Fecha de nacimiento:</label>
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="text" name= "fecha_nacimiento" class="form-control" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-4">
                                        <label>Estado Civil:</label>
                                         <select name="estado_civil" id="estado_civil" class="form-control">
                                         <option value="">Selecciona el estado civil</option>
                                         <option>Casado</option>
                                         <option>Soltero</option>
                                        </select>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-4">
                                        <label>Correo:</label>
                                        <input type="text" name="email" placeholder="Ingresa el correo electronico" class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label>Telefono:</label>
                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                          </div>
                                          <input type="text" class="form-control" name="telefono" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                        </div>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-4">
                                        <label>CURP:</label>
                                        <input type="text" name="curp" placeholder="Ingresa el CURP" class="form-control" required>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-2">
                                        <label>Codigo Postal:</label>
                                        <input type="text" name="cp" placeholder="Ingresa el C.P." class="form-control" required>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-6">
                                        <label>Calle:</label>
                                        <input type="text" name="calle" placeholder="Ingresa la calle" class="form-control" required>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-2">
                                        <label>Numero interno:</label>
                                        <input type="number" name="numero_interno" placeholder="Numero Interno" class="form-control" required>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-2">
                                        <label>Numero externo:</label>
                                        <input type="number" name="numero_externo" placeholder="Numero Externo" class="form-control" required>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-4">
                                        <label>Colonia</label>
                                        <input type="text" name="colonia" placeholder="Ingresa la colonia" class="form-control" required>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-4">
                                        <label>Ciudad:</label>
                                        <input type="text" name="ciudad" placeholder="Ingresa la ciudad" class="form-control" required>
                                    </div>
                                    <div class="form-group required autocomplete col-sm-4">
                                        <label>Estado:</label>
                                        <input type="text" name="estado" placeholder="Ingresa el estado" class="form-control" required>
                                    </div>

                                  
                          </div>
                          </div>
                          </div>
                          <!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_2">
                              <div class="box box-primary">
                                  <div class="box-header with-border">
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Empresa:</label>
                                          <select name="id_empresa" id="id_empresa" class="form-control">
                                          <option value="">Elija la empresa</option>
                                           @foreach ($empresa as $emp)
                                               <option value="{{$emp->id}}">{{$emp->nombre_empresa}}</option>
                                           @endforeach
                            
                                          </select>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Puesto:</label>
                                          <select name="id_puesto" id="id_puesto" class="form-control">
                                          <option value="">Elija el puesto</option>
                                           @foreach ($puesto as $pues)
                                               <option value="{{$pues->id}}">{{$pues->job}}</option>
                                           @endforeach
                            
                                          </select>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Departamento:</label>
                                          <select name="id_departamento" id="id_departamento" class="form-control">
                                          <option value="">Elija el departamento asignado</option>
                                           @foreach ($depart as $depa)
                                               <option value="{{$depa->id}}">{{$depa->departamento}}</option>
                                           @endforeach
                            
                                          </select>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Numero de Cuenta:</label>
                                          <input type="text" name="numero_cuenta" placeholder="Ingresa el numero de cuenta" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Clave interbancaria:</label>
                                          <input type="text" name="clave_interbancaria" placeholder="Ingresa la clave interbancaria" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Banco:</label>
                                          <select name="banco" id="banco" class="form-control">
                                          <option value="">Selecciona el banco</option>
                                           
                                               <option>Bancomer</option>
                                               <option>Banorte</option>
                            
                                           </select>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Tipo de sueldo:</label>
                                          <input type="text" name="tipo_sueldo" placeholder="Ingresa el tipo de sueldo" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Forma de pago</label>
                                          <input type="text" name="forma_pago" placeholder="Ingresa la forma de pago" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Salario diario:</label>
                                          <input type="text" name="salario_diario" placeholder="Ingresa el monto del salario diario" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-6">
                                          <label>Prestaciones:</label>
                                          <select name="id_prestaciones" id="id_prestaciones" class="form-control">
                                          <option value="">Elija las prestaciones</option>
                                           @foreach ($presta as $pres)
                                               <option value="{{$pres->id}}">{{$pres->anio}}</option>
                                           @endforeach
                              
                                          </select>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-6">
                                            <label>Contrato:</label>
                                            <input type="text" name="contrato" placeholder="subida de contrato" class="form-control" required>
                                      </div>
                          </div>
                          </div>  
                          </div>
                          <!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_3">
                              <div class="box box-primary">
                                  <div class="box-header with-border">
                                  
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>RFC:</label>
                                          <input type="text" name="rfc" placeholder="Ingresa el RFC" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Numero de seguro social:</label>
                                          <input type="text" name="imss" placeholder="Ingresa el numero de seguro social" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Numero de afore:</label>
                                          <input type="text" name="afore" placeholder="Ingresa el numero de afore" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-2">
                                          <label>Tipo de sangre:</label>
                                          <input type="text" name="tipo_sangre" placeholder="Ingresa el tipo de sangre" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-4">
                                          <label>Numero de infonavit:</label>
                                          <input type="text" name="infonabit" placeholder="Ingresa el numero de infonavit" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-6">
                                          <label>Alergias</label>
                                          <input type="text" name="alergias" placeholder="" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-6">
                                          <label>Nombre de contacto:</label>
                                          <input type="text" name="nombre_contacto" placeholder="Ingresa el nombre del contacto" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete col-sm-6">
                                          <label>Numero Telefonico del Contacto:</label>
                                          <input type="text" name="numero_contacto" placeholder="Ingresa el numero del contacto" class="form-control" required>
                                      </div>
                                  
                                  </div>
                              </div>
                          </div>
                          <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                      </div>
                      <!-- nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
           <div class="form_group">
             <button class="btn btn-primary">Guardar</button>
            </div>
      </div>
    </div>
    </form>
  </div>
@endsection

@push('styles')

@endpush
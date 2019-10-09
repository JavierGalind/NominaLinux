@extends('layouts.layout')

@section('content')
  <div class="container">
    <h1>Editar empleado </h1>
    <form method="post" action="{{route('empleados.update',$empleado->id)}}" enctype="multipart/form-data" file="true">
    @method('PUT')
      @csrf
    <div class="row">
        <div class="col-md-8">

            <div class="form-group required autocomplete">
              <label>Nombre del empleado:</label>
              <input type="text" name="nombre_empleado" value="{{$empleado->nombre_empleado}}" class="form-control" required>
            </div>
            <div class="form-group required autocomplete">
                  <label>Apellido Paterno:</label>
                  <input type="text" name="ap_paterno" value="{{$empleado->ap_paterno}}" class="form-control" required>
                </div>
                <div class="form-group required autocomplete">
                  <label>Apellido Materno:</label>
                  <input type="text" name="ap_materno" value="{{$empleado->ap_materno}}" class="form-control" required>
                </div>
                <div class="form-group required autocomplete">
                      <label>Sexo:</label>
                      <input type="text" name="sexo" value="{{$empleado->sexo}}" class="form-control" required>
                    </div>
                    <div class="form-group required autocomplete">
                          <label>Correo:</label>
                          <input type="text" name="email" value="{{$empleado->email}}" class="form-control" required>
                        </div>
                        <div class="form-group required autocomplete">
                              <label>Telefono:</label>
                              <input type="text" name="telefono" value="{{$empleado->telefono}}" class="form-control" required>
                            </div>
                            <div class="form-group required autocomplete">
                                  <label>CURP:</label>
                                  <input type="text" name="curp" value="{{$empleado->curp}}" class="form-control" required>
                                </div>
                                <div class="form-group required autocomplete">
                                      <label>Fecha de nacimiento:</label>
                                      <input type="text" name="fecha_nacimiento" value="{{$empleado->fecha_nacimiento}}"  class="form-control" required>
                                    </div>
                                    <div class="form-group required autocomplete">
                                      <label>Estado Civil:</label>
                                      <input type="text" name="estado_civil" value="{{$empleado->estado_civil}}" class="form-control" required>
                                  </div>
                                    ////////////////////////////////////////////////////////////
                                    <div class="form-group required autocomplete">
                                          <label>Codigo Postal:</label>
                                          <input type="text" name="cp" value="{{$empleado->cp}}" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete">
                                          <label>Calle:</label>
                                          <input type="text" name="calle" value="{{$empleado->calle}}" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete">
                                          <label>Numero interno:</label>
                                          <input type="number" name="numero_interno" value="{{$empleado->numero_interno}}" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete">
                                          <label>Numero externo:</label>
                                          <input type="number" name="numero_externo" value="{{$empleado->numero_externo}}" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete">
                                          <label>Colonia</label>
                                          <input type="text" name="colonia" value="{{$empleado->colonia}}" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete">
                                          <label>Ciudad:</label>
                                          <input type="text" name="ciudad" value="{{$empleado->ciudad}}" class="form-control" required>
                                      </div>
                                      <div class="form-group required autocomplete">
                                          <label>Estado:</label>
                                          <input type="text" name="estado" value="{{$empleado->estado}}" class="form-control" required>
                                      </div>
                                     //////////////////////////////////////////////////////////
                              
                                     
                                     <div class="form-group required autocomplete">
                                      <label>Empresa:</label>
                                      <select name="id_empresa" id="id_empresa" class="form-control">
                                      <option value=""></option>
                                       @foreach ($empresa as $emp)
                                           <option value="{{$emp->id}}">{{$emp->nombre_empresa}}</option>
                                       @endforeach
  
                                      </select>
                                    </div>
                                     <div class="form-group required autocomplete">
                                      <label>Puesto:</label>
                                      <select name="id_puesto" id="id_puesto" class="form-control">
                                      <option value="">Elija el puesto</option>
                                       @foreach ($puesto as $pues)
                                           <option value="{{$pues->id}}">{{$pues->job}}</option>
                                       @endforeach
  
                                      </select>
                                    </div>
                                     <div class="form-group required autocomplete">
                                      <label>Departamento:</label>
                                      <select name="id_departamento" id="id_departamento" class="form-control">
                                      <option value="">Elija el departamento asignado</option>
                                       @foreach ($depart as $depa)
                                           <option value="{{$depa->id}}">{{$depa->departamento}}</option>
                                       @endforeach
  
                                      </select>
                                    </div>
                                     <div class="form-group required autocomplete">
                                      <label>numero_cuenta:</label>
                                      <input type="text" name="numero_cuenta" value="{{$empleado->numero_cuenta}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Clave interbancaria:</label>
                                      <input type="text" name="clave_interbancaria" value="{{$empleado->clave_interbancaria}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Banco:</label>
                                      <input type="text" name="banco" value="{{$empleado->banco}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Tipo de sueldo:</label>
                                      <input type="text" name="tipo_sueldo" value="{{$empleado->tipo_sueldo}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Forma de pago</label>
                                      <input type="text" name="forma_pago" value="{{$empleado->forma_pago}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Salario diario:</label>
                                      <input type="text" name="salario_diario" value="{{$empleado->salario_diario}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                    <label>Prestaciones:</label>
                                    <select name="id_prestaciones" id="id_prestaciones" class="form-control">
                                    <option value="">Elija las prestaciones</option>
                                     @foreach ($presta as $pres)
                                         <option value="{{$pres->id}}">{{$pres->anio}}</option>
                                     @endforeach
     
                                    </select>
                                  </div>
                                
                              
                                  <div class="form-group required autocomplete">
                                      <label>Contrato:</label>
                                      <input type="text" name="contrato" value="{{$empleado->contrato}}" class="form-control" required>
                                  </div>
                                  /////////////////////////////////////////////////////////
                                  <div class="form-group required autocomplete">
                                      <label>RFC:</label>
                                      <input type="text" name="rfc" value="{{$empleado->rfc}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Numero de seguro social:</label>
                                      <input type="text" name="imss" value="{{$empleado->imss}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Numero de afore:</label>
                                      <input type="text" name="afore" value="{{$empleado->afore}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Numero de infonavit:</label>
                                      <input type="text" name="infonabit" value="{{$empleado->infonabit}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Alergias</label>
                                      <input type="text" name="alergias" value="{{$empleado->alergias}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Tipo de sangre:</label>
                                      <input type="text" name="tipo_sangre" value="{{$empleado->tipo_sangre}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Nombre de contacto:</label>
                                      <input type="text" name="nombre_contacto" value="{{$empleado->nombre_contacto}}" class="form-control" required>
                                  </div>
                                  <div class="form-group required autocomplete">
                                      <label>Numero:</label>
                                      <input type="text" name="numero_contacto" value="{{$empleado->numero_contacto}}" class="form-control" required>
                                  </div>
                                  
             <div class="form_group">
               <button class="btn btn-primary">Guardar</button>
              </div>
        </div>
        
      </div>
    </form>
  </div>
@endsection
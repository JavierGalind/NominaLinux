@extends('layouts.layout')

@section('content')
  <div class="container">
    <h1>Editar datos de empresa</h1>
    <form method="post" action="{{route('empresas.update',$empresa->id)}}" enctype="multipart/form-data" file="true">
      @method('PUT')
      @csrf
    <div class="row">
      <div class="col-md-8">

          <div class="form-group required autocomplete">
            <label>Nombre de la empresa:</label>
            <input type="text" name="nombre_empresa" value="{{$empresa->nombre_empresa}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>RFC de la empresa:</label>
            <input type="text" name="rfc" value="{{$empresa->rfc}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Registro de estado :</label>
            <input type="text" name="registro_estado" value="{{$empresa->registro_estado}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Telefono:</label>
            <input type="number" name="telefono" value="{{$empresa->telefono}}" class="form-control" required>
          </div>
          
          <div class="form-group required autocomplete">
            <label>Estatus:</label>
            <input type="text" name="status" value="{{$empresa->status}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Registro Patronal:</label>
            <input type="text" name="registro_patronal" value="{{$empresa->registro_patronal}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete col-sm-6">
              <label>Razon Social:</label>
              <input type="text" name="razon_social" value="{{$empresa->razon_social}}" class="form-control" required>
            </div>
          <div class="form-group required autocomplete">
            <label>Nombre del representante legal:</label>
            <input type="text" name="representante_laboral" value="{{$empresa->representante_laboral}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>RFC del representante legal:</label>
            <input type="text" name="rfc_representante" value="{{$empresa->rfc_representante}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Direccion de la empresa:</label>
            <input type="text" name="direccion" value="{{$empresa->direccion}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Numero interno:</label>
            <input type="number" name="numero_interno" value="{{$empresa->numero_interno}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Numero externo:</label>
            <input type="number" name="numero_externo" value="{{$empresa->numero_externo}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Colonia:</label>
            <input type="text" name="colonia" value="{{$empresa->colonia}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Estado:</label>
            <input type="text" name="estado" value="{{$empresa->estado}}" class="form-control" required>
          </div>
          <div class="form-group required autocomplete">
            <label>Codigo Postal:</label>
            <input type="text" name="cp" value="{{$empresa->cp}}" class="form-control" required>
          </div>
           <div class="form_group">
             <button class="btn btn-primary">Guardar</button>
            </div>
      </div>
        
      </div>
    </form>
  </div>
@endsection
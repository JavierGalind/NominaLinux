@extends('layouts.layout')

@section('content')
<div class="container">
    <h1 style="text-align:center;">Incidencias</h1>
    <br><br>
    <a href="{{route('incidencias.create')}}" class="btn btn-info">Registrar incidencia</a>
    <br><br>
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                
                    <tr>
                        <th scope="col">Clave</th>
                      <th scope="col">Empleado</th>
                      <th scope="col">Clave concepto</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">Importe</th>
                      <th scope="col">Monto</th>
                      <th scope="col">Soporte</th>
                      <th scope="col">Fecha de Registro</th>
                      <th scope="col">Observaciones</th>
                      <th scope="col">Acciones</th>
                    </tr>
                
                </thead>
                <tbody>
                    @foreach ($incid as $ins)
                    <tr>
                        <th scope="row">{{$ins->id}}</th>
                        <td>{{$ins->nombre_empleado}}</td>
                        <td>{{$ins->id_concepto}}</td>
                        <td>{{$ins->importe}}</td>
                        <td>{{$ins->monto}}</td>
                        <td>{{$ins->soporte}}</td>
                        <td>{{$ins->created_at}}</td>
                        <td>{{$ins->observaciones}}</td>
                        <td width="20%">
                                <a href="{{route('incidencias.edit',$ins->id)}}" class="btn btn-info"><i class="fa fa-fw fa-pencil"></i></a>  
                                <form class="form-group" method="POST" action="{{route('incidencias.destroy',$ins->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
        </div>        
    </div>        
    </div>
    
    

@endsection 
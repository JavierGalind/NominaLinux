@extends('layouts.layout')

@section('content')
<div class="container">
<h1 style="text-align:center;">Conceptos de Empresa</h1>
<br><br>
<a href="{{route('conceptosempresas.create')}}" class="btn btn-info">Añadir un nuevo concepto</a>
<div class="col-md-10">
    <div class="box">
        <div class="box-header">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            
                <tr>
                    <th scope="col">Clave</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Importe</th>
                    <th scope="col">Codificacion Contable</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Concepto SAT</th>
                    <th scope="col">Acciones</th>
                </tr>
            
            </thead>
            <tbody>
                @foreach ($conceptos as $cons)
                <tr>
                    <th scope="row">{{$cons->id}}</th>
                    <td>{{$cons->nombre}}</td>
                    <td>{{$cons->cantidad}}</td>
                    <td>{{$cons->importe}}</td>
                    <td>{{$cons->codificacion_contable}}</td>
                    <td>{{$cons->tipo}}</td>
                    <td>{{$cons->clave_sat}} {{$cons->concepto}}</td>
                    <td width="20%">
                            <a href="{{route('conceptosempresas.edit',$cons->id)}}" class="btn btn-info"><i class="fa fa-fw fa-pencil"></i></a>  
                            <form class="form-group" method="POST" action="{{route('conceptosempresas.destroy',$cons->id)}}">
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
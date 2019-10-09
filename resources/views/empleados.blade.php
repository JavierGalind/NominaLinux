@extends('layouts.layout')

@section('content')
<div class="container">
<h1 style="text-align:center;">Empleados</h1>
<br><br>
<a href="{{route('empleados.create')}}" class="btn btn-info">Añadir un nuevo empleado</a>
<div class="col-md-8">
    <div class="box">
        <div class="box-header">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            
                <<tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Acciones</th>
                </tr>
            
            </thead>
            <tbody>
                @foreach ($emple as $emp)
                <tr>
                    <th scope="row">{{$emp->nombre_empleado}}</th>
                    <td>{{$emp->email}}</td>
                    <td>{{$emp->nombre_empresa}}</td>
                    <td width="20%">
                            <a href="{{route('empleados.edit',$emp->id)}}" class="btn btn-info"><i class="fa fa-fw fa-pencil"></i></a>  
                            <form class="form-group" method="POST" action="{{route('empleados.destroy',$emp->id)}}">
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
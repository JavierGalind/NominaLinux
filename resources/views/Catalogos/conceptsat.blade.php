@extends('layouts.layout')

@section('content')
<div class="container">
<h1 style="text-align:center;">Conceptos del SAT</h1>
<br><br>
<a href="{{route('conceptsat.create')}}" class="btn btn-info">Añadir nuevo concepto</a>
<div class="col-md-8">
    <div class="box">
        <div class="box-header">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">Clave</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha de vijencia</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($conceptsat as $con)
                        <tr>
                            <th scope="row">{{$con->clave_sat}}</th>
                            <td>{{$con->concepto}}</td>
                            <td>{{$con->fecha_vigencia}}</td>
                            <td>{{$con->tipo}}</td>
                            <td width="20%">
                                    <a href="{{route('conceptsat.edit',$con->id)}}" class="btn btn-info"><i class="fa fa-fw fa-pencil"></i></a>  
                                    <form class="form-group" method="POST" action="{{route('conceptsat.destroy',$con->id)}}">
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
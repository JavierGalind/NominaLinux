@extends('layouts.layout')

@section('content')
<div class="container">
<h1 style="text-align:center;">Prestaciones</h1>
<br><br>
<a href="{{route('prestaciones.create')}}" class="btn btn-info">Añadir nuevos parametros de prestaciones</a>
<div class="col-md-10">
      
    <div class="box">
        <div class="box-header">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Años</th>
                <th scope="col">Numero de dias de aguinaldo</th>
                <th scope="col">Numero de dias de vacaciones</th>
                <th scope="col">Prima vacacional</th>
                <th scope="col">Bono</th>
                <th scope="col">Monto de vales de despensa</th>
                <th scope="col">Fondo de ahorro</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($prestaciones as $presta)
                <tr>
                    <th scope="row">{{$presta->id}}</th>
                    <td>{{$presta->anio}}</td>
                    <td>{{$presta->aguinaldo}}</td>
                    <td>{{$presta->vacaciones}}</td>
                    <td>{{$presta->prima_vacacional}}</td>
                    <td>{{$presta->bono}}</td>
                    <td>{{$presta->vales}}</td>
                    <td>{{$presta->fondo}}</td>
                    <td width="20%">
                            <a href="{{route('prestaciones.edit',$presta->id)}}" class="btn btn-info"><i class="fa fa-fw fa-pencil"></i></a>  
                            <form class="form-group" method="POST" action="{{route('prestaciones.destroy',$presta->id)}}">
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
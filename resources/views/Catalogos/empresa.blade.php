@extends('layouts.layout')

@section('content')
<div class="container">
<h1 style="text-align:center;">Empresas</h1>
<br><br>
<a href="{{route('empresas.create')}}" class="btn btn-info">Añadir una nueva empresa</a>
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
                <th scope="col">Nombre</th>
                        <th scope="col">RFC</th>
                        <th scope="col">Registro estatal de contribuyentes</th>
                        <th scope="col">Razon Social</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Registro Patronal</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Representante</th>
                        <th scope="col">RFC del Representante</th>
                        <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($empresa as $emp)
                        <tr>
                            <th scope="row">{{$emp->nombre_empresa}}</th>
                            <td>{{$emp->rfc}}</td>
                            <td>{{$emp->registro_estado}}</td>
                            <td>{{$emp->razon_social}}</td>
                            <td>{{$emp->telefono}}</td>
                            <td>{{$emp->registro_patronal}}</td>
                            <td>{{$emp->direccion}}</td>
                            <td>{{$emp->representante_laboral}}</td>
                            <td>{{$emp->rfc_representante}}</td>
                            <td width="20%">
                                    <a href="{{route('empresas.edit',$emp->id)}}" class="btn btn-info"><i class="fa fa-fw fa-pencil"></i></a>  
                                    <form class="form-group" method="POST" action="{{route('empresas.destroy',$emp->id)}}">
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
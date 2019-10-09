@extends('layouts.layout')

@section('content')
<div class="container">
<h1 style="text-align:center;">Departamentos de la Empresa</h1>
<br><br>
<a href="{{route('departamento.create')}}" class="btn btn-info">Añadir nuevo departamento</a>
<div class="col-md-8">
    <div class="box">
        <div class="box-header">
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($departamento as $depa)
                        <tr>
                            <th scope="row">{{$depa->id}}</th>
                            <td>{{$depa->departamento}}</td>
                            <td width="20%">
                                    <a href="{{route('departamento.edit',$depa->id)}}" class="btn btn-info"><i class="fa fa-fw fa-pencil"></i></a>  
                                    <form class="form-group" method="POST" action="{{route('departamento.destroy',$depa->id)}}">
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
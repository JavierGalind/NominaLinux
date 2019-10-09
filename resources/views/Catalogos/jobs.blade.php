@extends('layouts.layout')

@section('content')
<div class="container">
<h1 style="text-align:center;">Puestos Canto Contadores</h1>
<br><br>
<a href="{{route('jobs.create')}}" class="btn btn-info">Añadir nuevo puesto</a>
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
                        <th scope="col">Puesto</th>
                        <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($job as $jobs)
                        <tr>
                            <th scope="row">{{$jobs->id}}</th>
                            <td>{{$jobs->job}}</td>
                            <td width="20%">
                                    <a href="{{route('jobs.edit',$jobs->id)}}" class="btn btn-info"><i class="fa fa-fw fa-pencil"></i></a>  
                                    <form class="form-group" method="POST" action="{{route('jobs.destroy',$jobs->id)}}">
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Puesto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="post" action="{{route('jobs.store')}}" enctype="multipart/form-data" file="true">
                @csrf
              
                <div class="col-md-8" id="copiar">
          
                    <div class="form-group required autocomplete">
                      <label>Nombre del puesto:</label>
                      <input type="text" name="job" placeholder="Ingresa el nombre del puesto nuevo" class="form-control" required>
                    </div>
                     <div class="form_group">
                       <button class="btn btn-primary">Guardar</button>
                      </div>
                </div>
                  
          
              </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
           

@endsection
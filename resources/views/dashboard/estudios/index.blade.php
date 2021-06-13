@extends('dashboard.master')

@section('content')

<a class="btn btn-success mt-3 mb-4" href="{{route('estudio.create')}}">Crear</a>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Created</th>
        <th scope="col">Updated</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($estudios as $estudio)
            <tr>
                <th scope="row">{{$estudio->id}}</th>
                <td>{{$estudio->title}}</td>
                <td>{{$estudio->created_at->format('d-m-y')}}</td>
                <td>{{$estudio->updated_at}}</td>
                <td>
                  <a class="btn btn-primary" href="{{route('estudio.show', $estudio->id)}}">Ver</a>
                  <a class="btn btn-primary" href="{{route('estudio.edit', $estudio->id)}}">Editar</a>
                </td>
                <td>
                  <button data-toggle="modal" data-target="#deleteModal" data-id="{{$estudio->id}}" class="btn btn-danger" type="submit">Eliminar</button>
                  </form>                  
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  {{ $estudios->links() }}
  
  <div class="modal fade" id="deleteModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>¿Estás seguro de borrar el registro seleccionado?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form id="formDelete" action="{{route('estudio.destroy', $estudio->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Eliminar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>  
    window.onload = function(){
      $("#deleteModal").on('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = $(event.relatedTarget);
        var id = button.data('id');

        action = $('#formDelete').attr('data-action');
        action += id;

        var modal = $(this);
        modal.find('.modal-title').text('Eliminar el estudio: ' + id);
      });
    }
  </script>
  
@endsection      

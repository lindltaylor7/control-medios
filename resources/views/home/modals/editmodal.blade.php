<div class="modal fade" id="editModal{{$consession->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{route('editCons', $consession)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Ingrese el nombre</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$consession->name}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-primary" value="Editar"></input>
        </div>
        </form>
      </div>
    </div>
  </div>
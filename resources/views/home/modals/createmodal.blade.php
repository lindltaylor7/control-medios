<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingresar registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="{{route('insertCons')}}" method="POST">
            @csrf
            <label for="name">Ingrese el nombre</label>
            <input type="text" class="form-control" name="name" id="name">
            <label for="type">Tipo de Medio</label>
            <select name="type" id="type" class="form-select">
              <option value="1">Radio</option>
              <option value="2">Tv</option>
              <option value="3">Telecomunicaciones</option>
            </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-primary" value="Guardar"></input>
        </div>
        </form>
      </div>
    </div>
  </div>
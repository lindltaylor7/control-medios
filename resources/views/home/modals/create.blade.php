<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
    <div class="modal-content position-relative">
      <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
          <h4 class="mb-1" id="modalExampleDemoLabel">Agregar expediente </h4>
        </div>
        <div class="p-4 pb-0">
          <form action="{{route('insertCons')}}" method="post">
            @csrf
            <div class="mb-3">
              <label class="col-form-label" for="name">Nombre:</label>
              <input class="form-control" name="name" id="name" type="text" />
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="enterprise">Empresa:</label>
              <input class="form-control" name="enterprise" id="enterprise" type="text" />
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="ruc">Ruc:</label>
              <input class="form-control" name="ruc" id="ruc" type="text" />
            </div>
            <div class="mb-3">
              <label class="col-form-label" for="department">Departamento:</label>
              <input class="form-control" name="department" id="department" type="text" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="start">Fecha de Inicio</label>
              <input class="form-control datetimepicker" name="start" id="start" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}' />
            </div>
            <div class="mb-3">
              <label class="form-label" for="vigency">Vigencia</label>
              <input class="form-control datetimepicker" name="vigency" id="vigency" type="text" placeholder="d/m/y" data-options='{"disableMobile":true}' />
            </div>
            <div class="mb-3">
              <select name="type" class="form-select" aria-label="Default select example">
                <option selected="">Tipo</option>
                <option value="1">TV</option>
                <option value="2">Radio</option>
                <option value="3">Telecomunicaciones</option>
              </select>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" value="Guardar"></input>
      </div>
    </form>
    </div>
  </div>
</div>
<main class="d-flex flex-column w-100 mx-5 mt-5">
    <div class="row">
        <h3>Procesos de Urgencia</h3>
        <div class="row">
            <form class="d-flex align-items-center" action="{{route('searchCons')}}" method="POST">
                @csrf    
                <input type="text" name="buscar" id="" class="form-control w-50" placeholder="Buscar por nombre">
                <input type="submit" value="Buscar" class="btn btn-primary w-auto mx-2"></input>
                <button type="button" class="btn btn-primary w-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Agregar registro
                </button>
            </form>
            @include('home.modals.createmodal')
        </div>
    </div>
    <div class="mt-2">
        <table class="table align-middle table-secondary table-hover">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Empresa</th>
                <th scope="col">RUC</th>
                <th scope="col">Dep.</th>
                <th scope="col">Vigencia del Servicio</th>
                <th scope="col">Tlf</th>
                <th scope="col">Correo</th>
                <th scope="col">Concesión / Valor Añadido</th>
                <th scope="col">Inicio de Operaciones</th>
              </tr>
            </thead>
            <tbody>
                @if (count($conssesions) === 0)
                    <p class="text-danger">No se encontraron coincidencias.</p>
                @else
                    @foreach ($conssesions as $consession)
                    <tr>
                        <td>{{$consession->name}}</td>
                        <td>AGC EIRL</td>
                        <td>20602401155</td>
                        <td>TRUJILLO</td>
                        <td>11/02/22</td>
                        <td>914095583-995006509</td>
                        <td>emp_tecseragc@hotmail.com / casma25@hotmail.com</td>
                        <td>CONCESION</td>
                        <td>YA</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
          </table>
    </div>
    
    
</main>
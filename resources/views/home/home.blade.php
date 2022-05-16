<main class="d-flex flex-column w-100 mx-5 mt-3">
    <div class="row">
        <h1>Procesos de Urgencia</h1>
        <div class="row">
            <form class="d-flex align-items-center" action="{{route('searchCons')}}" method="POST">
                @csrf    
                <input type="text" name="buscar" id="" class="form-control w-50" placeholder="Buscar por nombre">
                <input type="submit" value="Buscar" class="btn btn-primary w-auto mx-2"></input>
                <button type="button" class="btn btn-primary w-auto" data-bs-toggle="modal" data-bs-target="#addModal">
                    Agregar registro
                </button>
            </form>
            
        </div>
        @include('home.modals.createmodal')
    </div>
    <div class="mt-2">
        <table class="dataTable-table">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Empresa</th>
                <th scope="col">RUC</th>
                <th scope="col">Dep.</th>
                <th scope="col">Vigencia</th>
                <th scope="col">Conc.- V. A.</th>
                <th scope="col">Inicio</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
                
                @if (count($conssesions) === 0 && str_contains(Request::url(),'searchCons'))
                    <tr>
                    <p class="text-danger">No se encontraron coincidencias.</p>
                    </tr>
                @else
                    @foreach ($conssesions as $consession)
                    @if ($loop->index+1 < 3)
                        <tr class="table-primary">
                            <td>{{$consession->name}}</td>
                            <td>AGC EIRL</td>
                            <td>20602401155</td>
                            <td>TRUJILLO</td>
                            <td>11/02/22</td>
                            <td>CONCESION</td>
                            <td>10/05/2022</td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#contactModal{{$consession->id}}" class="btn btn-primary"><i class="fa-solid fa-circle-user"></i></a>
                                @include('home.modals.contactmodal')
                                <a href="" data-bs-toggle="modal" data-bs-target="#editModal{{$consession->id}}" class="btn btn-primary">Editar</a>
                                @include('home.modals.editmodal')
                            </td>
                        </tr>
                    @else
                    <tr>
                        <td>{{$consession->name}}</td>
                        <td>AGC EIRL</td>
                        <td>20602401155</td>
                        <td>TRUJILLO</td>
                        <td>11/02/22</td>
                        <td>CONCESION</td>
                        <td>YA</td>
                        <td>
                            <button class="btn btn-primary">Editar</button>
                        </td>
                    </tr>
                    @endif
                    
                    @endforeach
                @endif
            </tbody>
          </table>
          {{$conssesions->links()}}
    </div>
    
    
</main>
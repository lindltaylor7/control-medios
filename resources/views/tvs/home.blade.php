@extends('template.home')

@section('content')
<div class="col-xxl-6 px-xxl-2">
  <div class="card mb-3">
    <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);">
    </div>
    <!--/.bg-holder-->

    <div class="card-body position-relative">
      <div class="row">
        <div class="col-lg-8">
          <h3>TV</h3>
          <p class="mb-2">A continuación podrá apreciar los expedientes de televisión.</p>
          <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                  data-bs-target="#create-modal">Agregar Expediente
          </button>
          @include('home.modals.create')
        </div>
      </div>
    </div>
  </div>
  

  <div class="card">
    <div class="card-header bg-light py-2">
      <div class="row flex-between-center">
        <div class="col-auto">
          <h5 class="mb-0">Expedientes Urgentes</h5>
        </div>

      </div>
    </div>
    <div class="card-body h-100">
      <div class="table-responsive scrollbar">
        <table class="table table-hover table-striped overflow-hidden">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Empresa</th>
              <th scope="col">RUC</th>
              <th scope="col">Dep.</th>
              <th scope="col">Vigencia</th>
              <th scope="col">Tipo</th>
              <th scope="col">Estado</th>
              <th class="text-end" scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tvs as $tv)
            <tr class="align-middle">
              <td class="text-nowrap">
                <div class="d-flex align-items-center">
                  <div class="ms-2">{{$tv->name}}</div>
                </div>
              </td>
              <td class="text-nowrap">{{$tv->enterprise}}</td>
              <td class="text-nowrap">{{$tv->ruc}}</td>
              <td class="text-nowrap">{{$tv->department}}</td>
              <td class="text-nowrap">{{$tv->vigency}}</td>
              <td class="text-nowrap">
                @if ($tv->type == 2)
                    Radio
                @elseif ($tv->type == 1)
                    Tv
                @endif
              </td>
              <td><span class="badge badge rounded-pill d-block p-2 badge-soft-danger">Urgente<span
                    class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span< /span>
              </td>
              <td class="text-end">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                  data-bs-target="#create-modal{{$tv->id}}"><span class="far fa-user"></span>
                </button>
              </td>
              @include('tvs.modals.contact')
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
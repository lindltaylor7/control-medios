@extends('home')

@section('content')
<div class="col-xxl-6 px-xxl-2">
    <div class="card h-100">
      <div class="card-header bg-light py-2">
        <div class="row flex-between-center">
          <div class="col-auto">
            <h6 class="mb-0">Expedientes Urgentes</h6>
          </div>
          <div class="col-auto d-flex"><a class="btn btn-link btn-sm me-2" href="#!">View Details</a>
            <div class="dropdown font-sans-serif btn-reveal-trigger">
              <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-top-products" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
              <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-top-products"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body h-100">
        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Address</th>
                  <th scope="col">Status</th>
                  <th class="text-end" scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr class="align-middle">
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="../../assets/img/team/4.jpg" alt="" />
                      </div>
                      <div class="ms-2">Ricky Antony</div>
                    </div>
                  </td>
                  <td class="text-nowrap">ricky@example.com</td>
                  <td class="text-nowrap">(201) 200-1851</td>
                  <td class="text-nowrap">2392 Main Avenue, Penasauka</td>
                  <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                  </td>
                  <td class="text-end">$99</td>
                </tr>
                <tr class="align-middle">
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="../../assets/img/team/13.jpg" alt="" />
                      </div>
                      <div class="ms-2">Emma Watson</div>
                    </div>
                  </td>
                  <td class="text-nowrap">emma@example.com</td>
                  <td class="text-nowrap">(212) 228-8403</td>
                  <td class="text-nowrap">2289 5th Avenue, New York</td>
                  <td><span class="badge badge rounded-pill d-block p-2 badge-soft-success">Completed<span class="ms-1 fas fa-check" data-fa-transform="shrink-2"></span></span>
                  </td>
                  <td class="text-end">$199</td>
                </tr>
                <tr class="align-middle">
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl">
                        <div class="avatar-name rounded-circle"><span>RA</span></div>
                      </div>
                      <div class="ms-2">Rowen Atkinson</div>
                    </div>
                  </td>
                  <td class="text-nowrap">rown@example.com</td>
                  <td class="text-nowrap">(201) 200-1851</td>
                  <td class="text-nowrap">112 Bostwick Avenue, Jersey City</td>
                  <td><span class="badge badge rounded-pill d-block p-2 badge-soft-primary">Processing<span class="ms-1 fas fa-redo" data-fa-transform="shrink-2"></span></span>
                  </td>
                  <td class="text-end">$755</td>
                </tr>
                <tr class="align-middle">
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="../../assets/img/team/2.jpg" alt="" />
                      </div>
                      <div class="ms-2">Antony Hopkins</div>
                    </div>
                  </td>
                  <td class="text-nowrap">antony@example.com</td>
                  <td class="text-nowrap">(901) 324-3127</td>
                  <td class="text-nowrap">3448 Ile De France St #242</td>
                  <td><span class="badge badge rounded-pill d-block p-2 badge-soft-secondary">On Hold<span class="ms-1 fas fa-ban" data-fa-transform="shrink-2"></span></span>
                  </td>
                  <td class="text-end">$50</td>
                </tr>
                <tr class="align-middle">
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                      <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="../../assets/img/team/3.jpg" alt="" />
                      </div>
                      <div class="ms-2">Jennifer Schramm</div>
                    </div>
                  </td>
                  <td class="text-nowrap">jennifer@example.com</td>
                  <td class="text-nowrap">(828) 382-9631</td>
                  <td class="text-nowrap">659 Hannah Street, Charlotte</td>
                  <td><span class="badge badge rounded-pill d-block p-2 badge-soft-warning">Pending<span class="ms-1 fas fa-stream" data-fa-transform="shrink-2"></span></span>
                  </td>
                  <td class="text-end">$150</td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
</div>
@endsection  
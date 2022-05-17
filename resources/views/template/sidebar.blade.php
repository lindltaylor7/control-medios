<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
  <script>
    var navbarStyle = localStorage.getItem("navbarStyle");
    if (navbarStyle && navbarStyle !== 'transparent') {
      document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
    }
  </script>
  <div class="d-flex align-items-center">
    <div class="toggle-icon-wrapper">
      <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Interruptor"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    </div>
    <a class="navbar-brand" href="index.html">
      <div class="d-flex align-items-center py-3"><span class="font-sans-serif">M.Perú</span>
      </div>
    </a>
  </div>
  <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
    <div class="navbar-vertical-content scrollbar">
      <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
        <li class="nav-item">
          <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Panel de Control</span>
            </div>
          </a>
          <ul class="nav collapse show" id="dashboard">
            <li class="nav-item"><a class="nav-link {{(request()->is('/'))? 'active' : ''}}" href="{{route('Home')}}" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="fas fa-home"></span><span class="nav-link-text ps-1">Inicio</span>
                </div>
              </a>
              <!-- more inner pages-->
            </li>
            <li class="nav-item">
              <a class="nav-link {{(request()->is('tv'))? 'active' : ''}}" href="{{route('Tv.home')}}" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="fas fa-desktop"></span></span><span class="nav-link-text ps-1">TVs</span>
                </div>
              </a>
            <!-- more inner pages-->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard/saas.html" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="fas fa-podcast"></span></span><span class="nav-link-text ps-1">Radios</span>
                </div>
              </a>
            <!-- more inner pages-->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="dashboard/saas.html" aria-expanded="false">
                <div class="d-flex align-items-center"><span class="fas fa-signal"></span></span><span class="nav-link-text ps-1">Telecomunicaciones</span>
                </div>
              </a>
            <!-- more inner pages-->
            </li>          
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
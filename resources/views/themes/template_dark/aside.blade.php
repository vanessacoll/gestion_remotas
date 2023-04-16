
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center mb-0">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="/home">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="/assets/images/logo_blanco.png" alt="" width="40" /><span class="font-sans-serif text-800">Phonett</span></div>
            </a>
          </div>

          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">

            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

                <a class="nav-link" href="{{ route('home') }}" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span></div>
                </a>

                <li class="nav-item">
                  <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Modulos</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>
                  
                  <a class="nav-link dropdown-indicator" href="#clientes" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="clientes">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user-alt"></span></span><span class="nav-link-text ps-1">Clientes</span></div>
                  </a>

                  <ul class="nav collapse" id="clientes">

                    @can('clientes')
                    <li class="nav-item"><a class="nav-link" href="{{ route('clientes.search') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Clientes</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    @endcan

                    @can('remotas')
                    <li class="nav-item"><a class="nav-link" href="{{ route('remotas.index') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Remotas</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    @endcan

                    @can('historico_remotas')
                    <li class="nav-item"><a class="nav-link" href="{{ route('remotas.index2') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Historico de Remotas</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    @endcan

                    <li class="nav-item"><a class="nav-link" href="{{ route('remotas.monitoreo') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Monitoreo de Remotas</span></div>
                      </a><!-- more inner pages-->
                    </li>

                  </ul>

                  @can('planes')
                  <a class="nav-link" href="{{ route('planes.index') }}" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-cloud-download-alt"></span></span><span class="nav-link-text ps-1">Planes y Servicios</span></div>
                  </a>
                  @endcan

                  @can('contenciones')
                  <a class="nav-link" href="{{ route('contenciones.index') }}" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-signal"></span></span><span class="nav-link-text ps-1">Contenciones</span></div>
                  </a>
                  @endcan

                  @can('satelites')
                  <a class="nav-link" href="{{ route('satelites.index') }}" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-satellite"></span></span><span class="nav-link-text ps-1">Satelites</span></div>
                  </a>
                  @endcan

                   <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Reportes</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>

                  @can('reportes_est')
                  <a class="nav-link" href="{{ route('listadoes.index') }}" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-file-pdf"></span></span><span class="nav-link-text ps-1">Listado de Estaciones</span></div>
                  </a>
                  @endcan
                  @can('reportes_cli')
                  <a class="nav-link" href="{{ route('estacionescli.index') }}" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-file-pdf"></span></span><span class="nav-link-text ps-1">Estaciones por Cliente</span></div>
                  </a>
                  @endcan

                   <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Configuracion</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>

                  @can('registrar_usuarios')
                  <a class="nav-link" href="{{ route('register.index') }}" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fa fa-laptop"></span></span><span class="nav-link-text ps-1">Registro de Usuarios</span></div>
                  </a>
                  @endcan

                   <!-- label-->
                  <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Sistemas</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div>
                  
                 <a class="nav-link" href="../app/chat.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-circle"></span></span><span class="nav-link-text ps-1">Chronos Web</span></div>
                  </a>

                  <a class="nav-link" href="../app/kanban.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="far fa-circle"></span></span><span class="nav-link-text ps-1">Vensatel</span></div>
                  </a>

                  
                </li> 
              </ul>
       

            </div>
          </div>
        </nav>


   <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
       
     
        </nav>      
       
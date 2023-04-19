 <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU PRINCIPAL</li>
        <!-- MENU CLIENTES Y REMOTAS -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @can('clientes')
            <li><a href="{{ route('clientes.index') }}"><i class="fa fa-share"></i> Registro de Clientes</a></li>
            @endcan
            @can('remotas')
            <li><a href="{{ route('remotas.index') }}"><i class="fa fa-share"></i> Remotas</a></li>
            @endcan
            @can('historico_remotas')
            <li><a href="{{ route('remotas.index2') }}"><i class="fa fa-share"></i>Informacion de Remotas</a></li>
            @endcan

            <li><a href="{{ route('remotas.monitoreo') }}"><i class="fa fa-share"></i>Monitoreo de Remotas</a></li>
          </ul>
        </li>


        <!-- MENU PLANES -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-cloud-download"></i> <span>Planes y servicios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @can('planes')
            <li><a href="{{ route('planes.index') }}"><i class="fa fa-share"></i> Planes</a></li>
            @endcan
           </ul>
        </li>

        <!-- MENU CONTENCION -->
        <li class="treeview">
          <a href="#"> 
            <i class="fa fa-fw fa-signal"></i> <span>Contenciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @can('contenciones')
            <li><a href="{{ route('contenciones.index') }}"><i class="fa fa-share"></i> Contenciones</a></li>
            @endcan
           </ul>
        </li>
      
      <!-- MENU SATELITES -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-rocket"></i> <span>Satelites</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @can('satelites')
            <li><a href="{{ route('satelites.index') }}"><i class="fa fa-share"></i> Satelites</a></li>
            @endcan
           </ul>
        </li>


        <!-- MENU REPORTES -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-file-pdf-o"></i> <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @can('reportes_est')
            <li><a href="{{ route('listadoes.index') }}"><i class="fa fa-share"></i>Listado de Estaciones</a></li>
            @endcan
            @can('reportes_cli')
            <li><a href="{{ route('estacionescli.index') }}"><i class="fa fa-share"></i>Estaciones por Cliente</a></li>
            @endcan
          </ul>
        </li>

        <!-- MENU ACCESO -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Sistemas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @can('registrar_usuarios')
            <li><a href="{{ route('register.index') }}"><i class="fa fa-share"></i> Registro de usuarios</a></li>
            @endcan
           </ul>
        </li>


      
        <li class="header">NOSOTROS</li>
        <li><a href="http://www.phonett.net" target="_blank"><i class="fa fa-circle-o text-aqua" ></i> <span>Sitio Web</span></a></li>
        <li><a href="https://www.phonett.net/soporte-phonett/"  target="_blank"><i class="fa fa-circle-o text-aqua"></i> <span>Soporte Técnico</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Phonett Admin</span></a></li>
        <li><a href="http://webmail.cpanel-box5247.bluehost.com/"  target="_blank"><i class="fa fa-circle-o text-aqua"></i> <span>Correo Elctrónico</span></a></li>
         
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


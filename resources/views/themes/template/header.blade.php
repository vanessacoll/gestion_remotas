<header class="main-header">
   
   <!-- Logo -->
    <a href="/home" class="logo">
     <img src="{{asset("assets/$theme/dist/img/PhonettMail.png")}}" class="logo_lg" alt="phonnet Image">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
                   
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->username }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset("assets/$theme/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">

                <p>
                   <span >{{ Auth::user()->nombres }}</span>
                </p>
              </li>
            
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="btn btn-default btn-flat" aria-labelledby="navbarDropdown"
                 href="{{ route('logout') }}"   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <a class="dropdown-item" >
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
              </li>
            </ul>
          </li>
                   
        </ul>
      </div>
  </header>

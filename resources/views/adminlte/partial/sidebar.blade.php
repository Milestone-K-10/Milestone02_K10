<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><font face="POPPINS"><b>DigiPoF</b></font></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @if (!empty(Auth::user()->name))
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
          @else
              <a href="#" class="d-blocl">Guest</a>
          @endif
          
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>About</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/community" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Community</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/report/create" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Report</p>
            </a>
          </li>
          <li class="nav-item">
            @auth
              @if (Auth::user()->role == "admin")
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Settings</p>
                </a>
                <a href="/unverified-reports" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unverified Reports</p> 
                </a>
            @else
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Settings</p>
              </a>
            @endif
            @endauth
            
           
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
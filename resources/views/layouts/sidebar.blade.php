<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset($siteicon->value) }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-2"
           style="opacity: .8">
         <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

          <img src="{{ asset($favicon->value) }}" class="img-circle elevation-2" alt="User Image">

        </div>
        <div class="info">
          <a href="#" class="d-block">@if(Auth::check()){{ Auth::user()->firstname }}@endif</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    User
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('allusers') }}" class="nav-link">
                        <i class="fas fa-users"></i>
                      <p>All Users</p>
                    </a>
                  </li>

                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{ route('adduser') }}" class="nav-link">
                          <i class="fas fa-user"></i>
                        <p> Add User</p>
                      </a>
                    </li>

                </ul>
            </li>


            <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Amkas
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('Amkasdetails') }}" class="nav-link">
                        <i class="fas fa-plus"></i>
                        <p>Create Form</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('allforms') }}" class="nav-link">
                        <i class="fab fa-wpforms"></i>
                        <p>All Forms</p>
                    </a>
                  </li>

                </ul>
            </li>
            <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Site Setting
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('sitesetting') }}" class="nav-link">
                        <i class="fas fa-plus"></i>
                        <p>Create Sitesetting</p>
                    </a>
                  </li>

                </ul>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



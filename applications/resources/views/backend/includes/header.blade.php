<a href="{{ url('')}}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>AD</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg" style="font-size:18px;"><b>Admin</b> Dashboard</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Notifications: style can be found in dropdown.less -->
      <li class="dropdown notifications-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-bell-o"></i>
          <span class="label label-warning">2</span>
        </a>
        <ul class="dropdown-menu">
          <li class="header">Anda memiliki 2 notifikasi</li>
          <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
              <li>
                <a href="#">
                  <i class="fa fa-users text-aqua"></i>  warga mendaftar hari ini
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-users text-red"></i>

                  pengaduan belum diproses
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
          <span class="hidden-xs">
            Fulan Bin Fulan
          </span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            <p>
              Fulan Bin Fulan
              <small>
                Terdaftar tahun 2016
              </small>
            </p>
          </li>

          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="#" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ asset('/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>
        Fulan Bin Fulan
      </p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li>
      <a href="{{url('admin/dashboard')}}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users"></i>
        <span>Informasi Utama</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-circle-o"></i> -----</a></li>
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-circle-o"></i> -----</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-users"></i>
        <span>Wedding</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-circle-o"></i> -----</a></li>
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-circle-o"></i> -----</a></li>
        <li><a href="{{url('admin/dashboard')}}"><i class="fa fa-circle-o"></i> -----</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="">
        <i class="fa fa-laptop"></i>
        <span>Event/Tips</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('admin/posting') }}"><i class="fa fa-circle-o"></i> Posting</a></li>
        <li><a href="{{ url('admin/kategori') }}"><i class="fa fa-circle-o"></i> Kategori</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-laptop"></i>
        <span>Manajemen Akun</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> -----</a></li>
      </ul>
    </li>
  </ul>
</section>

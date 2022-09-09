@php
  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('public/assets')}}/img/log1.png" alt="Logo" style="height: 60px;">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('admin/home')}}" class="nav-link {{checkRouteActive('admin/home')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link {{checkRouteActive('admin/user')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/artikel')}}" class="nav-link {{checkRouteActive('admin/artikel')}}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Article
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/komen')}}" class="nav-link {{checkRouteActive('admin/komen')}}">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Comment
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('admin/beranda')}}" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Blog
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
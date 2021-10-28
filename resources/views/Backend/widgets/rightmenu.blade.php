<?php 
 $menu=config('MenuAdmin');
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('resources/backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('resources/backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
          @foreach($menu as $m)
          <li class="nav-item">
            <a href="@if($m['label']=='Home')
                        {{route('admin.home')}}
                        @endif
               " class="nav-link">

              <i class="nav-icon fas {{$m['icon']}}"></i>
              <p>
               {{$m['label']}}
               @if(isset($m['items']))
                <i class="fas fa-angle-left right"></i>
               @endif
              </p>
            </a>
            @if(isset($m['items']))          
            <ul class="nav nav-treeview">
            @foreach($m['items'] as $mit)
              <li class="nav-item">
                <a href="{{route($mit['route'])}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{$mit['label']}}</p>
                </a>
              </li>
              @endforeach
            </ul>
            @endif
          </li> 
          @endforeach       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
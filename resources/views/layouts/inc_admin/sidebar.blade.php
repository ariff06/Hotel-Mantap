<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ url('images/laparel.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{config('app.name')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <x-nav-item label="Dashboard" icon="fas fa-tachometer-alt" :link="route('dashboard')" />
            <x-nav-item label="User Admin" icon="fas fa-users" :link="route('admin.index')" />
            <x-nav-item label="Manage Rooms" icon="fas fa-tachometer-alt" :link="route('admin.rooms')" />
            <x-nav-item label="Manage Facilities" icon="fas fa-tachometer-alt" :link="route('admin.facilitas')" />
            <x-nav-item label="Manage Facilities Rooms" icon="fas fa-tachometer-alt" :link="route('admin.facilities_room')" />

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
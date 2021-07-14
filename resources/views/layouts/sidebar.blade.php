{{-- route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.dashboard') --}}
<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand" style="margin-top: 25px; margin-bottom: 50px;">
      <a href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.dashboard') }}">
        <img width="30%" src="{{ asset('admin_assets/img/stisla-fill.svg') }}">
      </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">STISLA</a>
    </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Beranda</li>
        <li><a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.dashboard') }}"><i class="fas fa-fire"></i><span>Beranda</span></a></li>
        <li class="menu-header">Master</li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User Management</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.user.index') }}">User</a></li>
                <li><a class="nav-link" href="{{ route(''.strtolower(str_replace(' ', '-', auth()->user()->roles->first()->name)).'.user-log.index') }}">User Log</a></li>
            </ul>
        </li>
        
        <li class="menu-header">Main Menu</li>
        <li>
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-file"></i> <span>Menu</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="#">Menu</a></li>
            </ul>
        </li>
      </ul>
  </aside>
</div>

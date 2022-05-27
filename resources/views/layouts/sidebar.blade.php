<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ request()->is('home*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <li class="nav-header">MASTER</li>
        <li class="nav-item">
            <a href="{{ route('pengajuan.index') }}" class="nav-link {{ request()->is('pengajuan*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-cube"></i>
                <p>
                    Pengajuan
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('persetujuan.index') }}"
                class="nav-link {{ request()->is('persetujuan*') ? 'active' : '' }}">
                <i class=" nav-icon fas fa-cubes"></i>
                <p>
                    Persetujuan
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('lpj.index') }}" class="nav-link {{ request()->is('lpj*') ? 'active' : '' }}">
                <i class=" nav-icon far fa-id-card"></i>
                <p>
                    LPJ
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link py-2" href="{{ route('dashboard') }}">
                <i class="mdi mdi-chart-line  pr-2 icon-large"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @canany(['Role Index', 'Permission Index', 'User Index'])
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#master_data" aria-expanded="false" aria-controls="master_data">
                <i class="mdi mdi-folder  pr-2 icon-large"></i>
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="master_data">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jenis.index') }}"> Jenis Barang </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('department.index') }}"> Department </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vendor.index') }}"> Vendor </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('brand.index') }}"> Brand </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sistem_operasi.index') }}"> Sistem Operasi </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aplikasi.index') }}"> Aplikasi </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}"> User </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('roles.index') }}"> Role </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('permissions.index') }}"> Permission </a>
                    </li>
                </ul>
            </div>
        </li>
        @endcanany
    </ul>
</nav>
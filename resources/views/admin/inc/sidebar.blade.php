<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin <strong>Panti</strong></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @yield('nav_dashboard')">
    <a class="nav-link" href="/admin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Informasi
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @yield('nav_profil')">
    <a class="nav-link" href="/admin/visimisi">
        <i class="fas fa-fw fa-cog"></i>
        <span>Profil Panti</span></a>
    </li>
    {{-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Profil Panti</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Profil Panti</h6>
        <a class="collapse-item" href="/admin/visimisi">Visi dan Misi</a>
        <a class="collapse-item" href="cards.html">Sejarah Panti</a>
        <a class="collapse-item" href="buttons.html">Dasar Hukum Panti</a>
        <a class="collapse-item" href="cards.html">Pelayanan Panti</a>
        <a class="collapse-item" href="cards.html">Fasilitas Panti</a>
        </div>
    </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item @yield('nav_data')">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-archive"></i>
        <span>Data</span>
    </a>
    <div id="collapseUtilities" class="collapse @yield('coll_data')" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data</h6>
        <a class="collapse-item @yield('side_asn')" href="/admin/asn">ASN</a>
        <a class="collapse-item @yield('side_pjlp')" href="/admin/pjlp">PJLP</a>
        <a class="collapse-item @yield('side_wbs')" href="/admin/wbs">WBS</a>
        </div>
    </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
    Lainnya
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <!-- Nav Item - Charts -->
    <li class="nav-item @yield('nav_bimbingan')">
    <a class="nav-link" href="/admin/bimbingan">
        <i class="fas fa-fw fa-book"></i>
        <span>Bimbingan</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item @yield('nav_jadwal')">
    <a class="nav-link" href="/admin/jadwal">
        <i class="fas fa-fw fa-calendar"></i>
        <span>Jadwal Piket</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item @yield('nav_laporan')">
    <a class="nav-link" href="/admin/laporan">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Laporan Shalat PJLP</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
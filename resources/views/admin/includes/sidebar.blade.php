<!-- Sidebar -->
<ul class="navbar-nav bg-pmi-primary sidebar sidebar-light accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center my-4" href="index.html">
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-store-alt"></i> --}}
            <img src="{{ asset('SBadmin2/assets/img/logopmi.png') }}" alt="" class="img-fluid">
        </div>
        <div class="sidebar-brand-text mx-3 text-pmi-primary">PMI Surabaya</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kriteria') }}">
            {{-- <i class="fas fa-warehouse"></i> --}}
            <i class="fas fa-th-list"></i>
            <span>Kriteria</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('subkriteria') }}">
            <i class="fa fa-bars" aria-hidden="true"></i>
            <span>Sub Kriteria</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pendonor') }}">
            {{-- <i class="fas fa-th-list"></i> --}}
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>Pendonor</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('petugas') }}">
            {{-- <i class="fas fa-th-list"></i> --}}
            <i class="fas fa-user-check"></i>
            <span>Petugas</span></a>
    </li>



    @if (Auth::guard('user')->user()->role == 'petugas')
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Transaksi
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('perhitungan') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Perhitungan</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('hasil') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Hasil</span></a>
        </li>
    @endif


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

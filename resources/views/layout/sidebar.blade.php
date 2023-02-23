<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #6b5b95;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center side" href="/dashboard">
        <div class="sidebar-brand-icon">
            <i class="fas fa-desktop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Absensi Kelas <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link side" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <li class="nav-item">
        <a class="nav-link collapsed side" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
            aria-expanded="true" aria-controls="collapseUtilities1">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Absen</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan Menu :</h6>
                <a class="collapse-item" href="/absen">Absen Hari Ini</a>
                <a class="collapse-item" href="/list">Daftar Absensi</a>
                {{-- <a class="collapse-item" href="/uploadsurat">Upload Surat</a> --}}
                <a class="collapse-item" href="/surat">Upload Surat</a>
            </div>
        </div>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link" href="/listkelas">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Absen</span></a>
    </li> --}}

    <li class="nav-item ">
        <a class="nav-link collapsed side" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
            aria-expanded="true" aria-controls="collapseUtilities2">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Manajemen Data</span>
        </a>
        <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilihan Menu :</h6>
                {{-- <a class="collapse-item" href="{{ route('datasiswa.create') }}">Tambah Siswa</a> --}}
                <a class="collapse-item" href="/datakelas">Data Kelas</a>
                <a class="collapse-item" href="/guru">Data Guru</a>
            </div>
        </div>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link side" href="/rekaplist">
            <i class="fas fa-fw fa-folder-open"></i>
            <span>Rekap Data</span></a>
    </li> --}}



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline mt-3">
        <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#logoutModal">
            Logout
        </a>
    </div>

</ul>

<style>
    a.side:hover {
        background-color: blueviolet;
    }
</style>
<!-- End of Sidebar -->

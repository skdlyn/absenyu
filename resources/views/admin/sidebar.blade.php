<div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href=""><img src="{{ asset('mazer/images/logo/logo.svg') }}" alt="Logo"
                        srcset="" /></a>
            </div>
            <div class="logout">
                <a href="/login" class="btn btn-lg text-danger" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-sign-out" aria-hidden="true"></i></i></a>
            </div>
        </div>
    </div>

    <div class="sidebar-menu">
        <ul class="menu">

            <li class="sidebar-item {{ (request()->is('dashboard*')) ? 'active':''}}">
                <a href="/dashboard" class="sidebar-link">
                    {{-- <i class="fas fa-user"></i> --}}
                    <i class="fa fa-columns" aria-hidden="true"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            <li class="sidebar-title">Manajemen Data</li>

            <li class="sidebar-item  {{ (request()->is('datakelas*')) ? 'active':''}}">
                <a href="/datakelas" class="sidebar-link">
                    <i class="fa fa-book" aria-hidden="true"></i>
                    <span>Data Kelas</span>
                </a>
            </li>

            <li class="sidebar-item  {{ (request()->is('guru*')) ? 'active':''}}">
                <a href="/guru" class="sidebar-link">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span>Data Guru</span>
                </a>
            </li>

            <li class="sidebar-title">Absensi</li>

            <li class="sidebar-item  {{ (request()->is('absen*')) ? 'active':''}}">
                <a href="/absen" class="sidebar-link">
                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    <span>Absensi Hari Ini</span>
                </a>
            </li>

            <li class="sidebar-item  {{ (request()->is('list*')) ? 'active':''}}">
                <a href="/list" class="sidebar-link">
                    <i class="fa fa-history" aria-hidden="true"></i>
                    <span>Riwayat Absensi</span>
                </a>
            </li>

            <li class="sidebar-item  {{ (request()->is('surat*')) ? 'active':''}}">
                <a href="/surat" class="sidebar-link">
                    <i class="fa fa-file" aria-hidden="true"></i>
                    <span>Upload Surat Izin</span>
                </a>
            </li>
        </ul>
    </div>
</div>

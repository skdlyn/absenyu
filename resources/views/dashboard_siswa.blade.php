@extends('layout.siswa')
@section('content')
    <div class="row justify-content-center h-75">
        <div class="card m-3 rounded-2 shadow-sm p-3 mb-8 bg-body rounded-5 w-75">
            <div class="card-body">
                <div class="row">
                    <h5>Selamat Pagi, </h5>
                </div>
                <div class="row">
                    <h2>Ilham Bintang Herlambang</h2>
                </div>
                <br>

            </div>
            <div class="row text-center">
                <div class="col">
                    <button class="btn btn-success">
                        <i class="fas fa-book"></i>
                    </button>
                </div>
                <div class="col">
                    <a href="/profile" class="btn btn-warning">
                        <i class="fas fa-users" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col">
                    <button class="btn btn-success"></button>
                </div>
                <div class="col">
                    <button class="btn btn-success"></button>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <label for="">Rekap Absen</label>
                </div>
                <div class="col">
                    <label for="profile">Profile</label>
                </div>
                <div class="col">
                    <label for="">tanggal</label>
                </div>
                <div class="col">
                    <label for="">kelas</label>
                </div>
            </div>
        </div>


        {{-- ppp --}}
        <div class="row w-75">
            <div class="col-6">
                <div class="card" style="background-color: #c05d72">
                    <div class="card-body">
                        <h4>Okiye</h4>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card" style="background-color: #01ff23">
                    <div class="card-body">
                        <h4 style="text">aidiaw</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style>
        body {
            background-color: #b9b3c9
        }
    </style>
@endsection

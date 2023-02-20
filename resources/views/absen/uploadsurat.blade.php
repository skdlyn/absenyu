@extends('layout.admin')

@section('content')
@section('title', 'Upload Surat')
<div class="container">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">

                {{-- Search Bar --}}
                <div class="row align-items-center">
                    <div class="col">
                        <div class="content">
                            <ol class="breadcrumb">
                                <li><a href="/dashboard"><em class="fa fa-home"></em></a> Upload Surat</li>
                                {{-- <li class="active">  Dashboard</li> --}}
                            </ol>
                        </div>
                    </div>
                    <div class="col-4">
                        <form action="" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control bg-light w-25" placeholder="Search"
                                    aria-describedby="button-addon2" id="cari" name="cari" value="">
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container">
                <h6>Upload Sakit</h6>
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>NO</th>
                            <th>NAMA SISWA</th>
                            <th>STATUS</th>
                            <th>UPLOAD SURAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($a as $b)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="row">{{ $b->id }}">{{ $b->name }}</td>
                                <td scope="row">{{ $b->status }}</td>
                                <td>
                                    <input type="file" id="surat" name="surat">
                                </td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>            
            </div>
            <div class="container">
                Upload Sakit
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>NO</th>
                            <th>NAMA SISWA</th>
                            <th>STATUS</th>
                            <th>UPLOAD SURAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($a as $b)
                            <tr>
                                <td scope="col">{{ $loop->iteration }}</td>
                                <td scope="row">{{ $b->id }}">{{ $b->name }}</td>
                                <td scope="row">{{ $b->status }}</td>
                                <td>
                                    <input type="file" id="surat" name="surat">
                                </td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>            
                <div class="row justify-content-end mx-2">
                    <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

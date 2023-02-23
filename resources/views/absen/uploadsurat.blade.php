@extends('admin.body')

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
                <table class="table table-bordered">
                    <thead class="text-white" style="background-color: #6b5b95">
                        <tr>
                            <th>NO</th>
                            <th>NAMA SISWA</th>
                            <th>TANGGAL </th>
                            <th>STATUS</th>
                            <th>UPLOAD SURAT</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($stat->isempty())
                            <tr>
                                <td colspan="6" class="text-center">tidak ada Informasi</td>
                            </tr>
                        @else
                            @foreach ($stat as $s)
                                <form method="POST" action="{{ route('surat.update',$s->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <tr>
                                        {{-- <td>{{ $s }}</td> --}}
                                        <td scope="col">{{ $loop->iteration }}</td>
                                        <td>{{ $s->user->name }}</td>
                                        <td scope="row">{{ $s->tanggal}}</td>
                                        {{-- {{-- <td scope="row">{{ $b->id }}">{{ $b->name }}</td> --}}
                                        <td scope="row">{{ $s->status }}</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="hidden" name="kelas_id" value="{{ $s->kelas_id }}">
                                                <input type="hidden" name="id[]" value="{{ $s->id }}">
                                                <input type="file" id="surat" name="surat"
                                                    class="form-control-file">
                                            </div>
                                        </td>
                                        <td>
                                            <input type="submit" class="btn btn-sm btn-success" value="Simpan">
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                        @endif
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

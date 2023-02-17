@extends('layout.admin')
@section('title', 'daftar absen')
@section('content-title')
@section('content')


    <div class="row filter-row">
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Employee Name</label>
            </div>
        </div>
        {{-- <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <select class="select floating">
                    <option>-</option>
                    <option>Jan</option>
                    <option>Feb</option>
                    <option>Mar</option>
                    <option>Apr</option>
                    <option>May</option>
                    <option>Jun</option>
                    <option>Jul</option>
                    <option>Aug</option>
                    <option>Sep</option>
                    <option>Oct</option>
                    <option>Nov</option>
                    <option>Dec</option>
                </select>
                <label class="focus-label">Select Month</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="form-group form-focus select-focus">
                <select class="select floating">
                    <option>-</option>
                    <option>2019</option>
                    <option>2018</option>
                    <option>2017</option>
                    <option>2016</option>
                    <option>2015</option>
                </select>
                <label class="focus-label">Select Year</label>
            </div>
        </div> --}}

        <div>
            <ul style="display: none">
                <li>bulan : {{ $m }}</li>
                <li>tahun : {{ $y }}</li>
            </ul>
        </div>
        <div class="col-sm-6 col-md-3">
            <a href="#" class="btn btn-success btn-block"> Search </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped-columns mb-0">
                    <thead>
                        <tr>
                            <td>Nama siswa</td>
                            {{-- <td>absen </td> --}}
                            @foreach ($d as $s)
                                <td>
                                    {{ $s }}
                                </td>
                            @endforeach
                            {{-- @foreach ($range as $d)
                                <td>{{ $d }}</td>
                            @endforeach --}}
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($a as $absen)
                            <tr>
                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                {{-- <td>2</td> --}}
                                <td>{{ $absen->name }}</td>
                                <td>{{ $absen->status }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

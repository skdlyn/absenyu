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
        <div class="col-sm-6 col-md-3">
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
                            @foreach ($t as $s => $i)
                                <td>{{ $i }}</td>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($siswa as $i) --}}
                        {{-- @foreach ($stdnt as $q => $item) --}}
                        {{-- @dd($item) --}}
                        {{-- <td> {{ $item[0]->siswa->nama}}</td> --}}
                        {{-- @foreach ($item as $s)
                            <tr>
                                <td>
                                    {{ $s->status }}
                                </td>
                            </tr>
                        @endforeach --}}
                        {{-- @endforeach --}}
                        {{-- @endforeach --}}
                        @foreach ($ns as $nama)
                            <tr>
                                <td>
                                    {{ $nama->nama}}
                                </td>
                                @foreach ($nama->absen as $a)
                                    <td>
                                        {{ $a->status}}
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach


                        {{-- @foreach ($ab as $absen)
                            <tr>
                                <td>{{ $absen->nama->nama }}</td>
                                <td>{{ $absen->status }}</td>
                                @foreach ($ab as $a)
                                @endforeach 
                                <td>{{ $absen->status }}</td>
                                <td>{{ $absen->status }}</td>
                            </tr>
                        @endforeach --}}





                        {{-- <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dt-buttons btn-group"> --}}
                        {{-- gtw --}}
                        {{-- <button class="btn btn-secondary buttons-copy buttons-htm15" tabindex="0" aria-controls="datatable-buttons">
                                        <span>Copy</span>
                                    </button>

                                    <button class="btn btn-secondary buttons-copy buttons-htm15" tabindex="0" aria-controls="datatable-buttons">
                                        <span>Excel</span>
                                    </button>

                                    <button class="btn btn-secondary buttons-copy buttons-htm15" tabindex="0" aria-controls="datatable-buttons">
                                        <span>PDF</span>
                                    </button> --}}



                        {{-- @foreach ($h as $hasil)
                            <tr>
                                <td>
                                    {{-- {{ $hasil->nama}} --}}
                        {{-- @foreach ($hasil as $ha)
                                        {{ $hasil->status }}
                                    @endforeach --}}
                        {{-- </td>
                            </tr> --}}
                        {{-- @endforeach --}}



                    </tbody>



                </table>
            </div>
        </div>
    </div>

@endsection

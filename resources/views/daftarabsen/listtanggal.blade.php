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
                        @foreach ($siswa as $i)
                            <tr>
                                <td> {{ $i->nama }}</td>
                                @foreach ($stdnt as $q => $item)
                                    @foreach ($item as $s)
                                        <td>
                                            {{ $s->status }}
                                            {{-- <td>{{ $item }}</td> --}}
                                            {{-- <td>{{ implode($stdnt) }}</td> --}}
                                        </td>
                                    @endforeach
                                @endforeach
                            </tr>
                        @endforeach


                   
                    </tbody>








                    {{-- @foreach ($absen as $s)
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                        {{ $s->id_siswa }}
                                        <a class="avatar avatar-xs" href="profile.html"><img alt=""
                                                src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}"></a>
                                        <a href="profile.html">
                                        </a>
                                    </h2>
                                </td>
                                <td><a href="javascript:void(0);" data-toggle="modal" data-target="#attendance_info"><i
                                            class="fa fa-check text-success"></i></a></td>
                            </tr>
                        @endforeach --}}

                </table>
            </div>
        </div>
    </div>

@endsection

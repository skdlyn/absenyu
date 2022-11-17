@extends('layout.admin')
@section('title', 'Absen')
@section('content-title', 'Lakukan Absen')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive-lg">
                        <table class="table">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                <td>lmao</td>
                                <td>banget</td>
                                <td>dek</td>
                            </tr> --}}
                                @foreach ($siswa as $i => $item)
                                    <tr>
                                        <th scope="row">{{ ++$i }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>
                                            {{-- <div id="rates">
                                                        <input type="radio" id="r1" name="rate"
                                                            value="Fixed Rate"> Fixed Rate
                                                            <input type="radio" id="r2" name="rate"
                                                            value="Variable Rate"> Variable Rate
                                                        <input type="radio" id="r3" name="rate"
                                                            value="Multi Rate" checked="checked"> Multi Rate
                                                    </div> --}}

                                            {{-- @if ($loop->last)
                                                        <label class="radio-inline">
                                                            <input id="hadir" type="radio"
                                                                name="status[{{ $item }}]" value="Hadir"> Hadir
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="alfa" type="radio"
                                                            name="status[{{ $item }}]" value="Alfa"> Alfa
                                                        </label>

                                                        <label class="radio-inline">
                                                            <input id="izin" type="radio"
                                                                name="status[{{ $item }}]" value="Izin"> Izin
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input id="sakit" type="radio"
                                                                name="status[{{ $item }}]" value="Sakit"> Sakit
                                                        </label>
                                                    @else --}}
                                            @if ($loop->last)
                                                <div class="status-selected">
                                                    <input type="radio" id="hadir" name="status{{ $item }}"
                                                        value="">
                                                    hadir
                                                    <input type="radio" id="alfa" name="status{{ $item }}"
                                                        value="">
                                                    alfa
                                                    <input type="radio" id="izin" name="status{{ $item }}"
                                                        value="">
                                                    izin
                                                    <input type="radio" id="sakit" name="status{{ $item }}"
                                                        value="">
                                                    sakit
                                                </div>
                                            @else
                                                <div class="status-diselected">
                                                    <input type="radio" id="hadir" name="status{{ $item }}"
                                                        value="">
                                                    hadir
                                                    <input type="radio" id="alfa" name="status{{ $item }}"
                                                        value="">
                                                    alfa
                                                    <input type="radio" id="izin" name="status{{ $item }}"
                                                        value="">
                                                    izin
                                                    <input type="radio" id="sakit" name="status{{ $item }}"
                                                        value="">
                                                    sakit
                                                </div>
                                            @endif
                                            {{-- <label class="radio-inline">
                                                            <input id="hadir" type="radio"
                                                            name="status[{{ $item }}]" value="Hadir"> Hadir
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="alfa" type="radio"
                                                            name="status[{{ $item }}]" value="Alfa"> Alfa
                                                    </label>

                                                    <label class="radio-inline">
                                                        <input id="izin" type="radio"
                                                            name="status[{{ $item }}]" value="Izin"> Izin
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input id="sakit" type="radio"
                                                            name="status[{{ $item }}]" value="Sakit"> Sakit
                                                    </label> --}}
                                            {{-- @endif --}}
                                            {{-- @if ($loop->last)
                                                        <div id="rates">
                                                            <input type="radio" id="r1" name="rate"
                                                                value="Fixed Rate"> Fixed Rate
                                                            <input type="radio" id="r2" name="rate"
                                                                value="Variable Rate"> Variable Rate
                                                            <input type="radio" id="r3" name="rate"
                                                            value="Multi Rate" checked="checked"> Multi Rate
                                                        </div>
                                                    @endif --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection

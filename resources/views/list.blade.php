@extends('layout.admin')
@section('title', 'Absen')
@section('content-title', 'Lakukan Absen')
@section('content')

    {{-- <div class="row">
        <ul class="breadcrumb">
            <li><a href="/dashboard"><em class="fa fa-home"></em></a> List Harian</li>
        </ul>
    </div> --}}


    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                {{-- <div class="card-header">
                    <h5>dropdown bulan</h5>
                </div> --}}

                <div class="card-body">
                    <table class="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>NO.</th>
                                <th>TANGGAL</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($collection as $i => $item) --}}
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td></td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

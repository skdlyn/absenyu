@extends('layout.admin')
@section('title', 'Absen')
@section('content-title', 'hasil absen per Kelas')
@section('content')

@foreach ($absen as $item)
    {{ $item }}
@endforeach

@endsection
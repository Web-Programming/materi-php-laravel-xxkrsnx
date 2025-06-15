@extends('layouts.master')

@section('title', 'Detail Program Studi')

@section('content')
<div class="container">
    <h2>Detail Program Studi</h2>
    <p><strong>Nama Prodi:</strong> {{ $prodi->nama_prodi }}</p>
    <p><strong>Kode Prodi:</strong> {{ $prodi->kode_prodi }}</p>
    <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection

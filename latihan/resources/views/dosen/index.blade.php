@extends('layout.master')

@section('title', 'Dosen Universitas MDP')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container">
        <h1 class="mb-4 mt-3 text-danger">Dosen Kami</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
@foreach($dosen as $dsn)
    <div class="row mb-4 fade-in align-items-center">
        <div class="col-md-3 text-center">
            <img src="{{ asset('img/' . $dsn['gambar']) }}" alt="{{ $dsn['nama'] }}">
        </div>
        <div class="col-md-9">
            <h4 class="text-danger">{{ $dsn['nama'] }}</h4>
            <p>{{ $dsn['deskripsi'] }}</p>

            <a href="{{ route('dosen.detail', $dsn['id']) }}" class="btn btn-primary btn-sm">Detail</a>

            <form action="{{ route('dosen.destroy', $dsn['id']) }}" method="POST" style="display: inline;">
                @csrf
                @method('POST')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus dosen ini?')">Hapus</button>
            </form>
        </div>
    </div>
@endforeach


        <a href="{{ route('dosen.create') }}" class="btn btn-success mb-5">Tambah Dosen</a>
    </div>
</main>
@endsection
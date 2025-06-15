@extends('layout.master')

@section('title', 'Hapus Fakultas')

@section('content')
<main class="app-main" style="background-color: #f4f4f4;">
    <div class="container text-center">
        <h1 class="mb-4 mt-3 text-danger">Hapus Fakultas</h1>
        <p>Apakah Anda yakin ingin menghapus <strong>{{ $fakultas->nama }}</strong>?</p>

        <form action="{{ route('fakultas.destroy', $fakultas->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE') 
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus fakultas ini?')">Hapus</button>
        </form>

        <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Batal</a>
    </div>
</main>
@endsection
<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{   
    public function index() {
        $mahasiswa = Mahasiswa::all(); // Ambil data dari database
        return view('mhs.index', compact('mahasiswa'));
}


    public function create()
    {
        return view('mhs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim',
            'nama' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
        ]);

        mahasiswa::create($request->all());
        return redirect()->route('mhs.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function show(mahasiswa $mahasiswa)
    {
        return view('mhs.detail', compact('mahasiswa'));
    }

    public function edit(mahasiswa $mahasiswa)
    {
        return view('mhs.edit', compact('mahasiswa'));
    }

    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
        ]);

        $mahasiswa->update($request->all());
        return redirect()->route('mhs.index')->with('success', 'Mahasiswa berhasil diupdate.');
    }

    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mhs.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }
}
// Compare this snippet from app/Models/Mahasiswa.php:
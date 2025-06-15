<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index()
    {
        $prodis = prodi::all();
        return view('prodi.index', compact('prodis'));
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_prodi' => 'required',
            'kode_prodi' => 'required|unique:prodis,kode_prodi',
        ]);

        Prodi::create($request->all());
        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil ditambahkan.');
    }

    public function show(prodi $prodi)
    {
        return view('prodi.detail', compact('prodi'));
    }

    public function edit(prodi $prodi)
    {
        return view('prodi.edit', compact('prodi'));
    }

    public function update(Request $request, prodi $prodi)
    {
        $request->validate([
            'nama_prodi' => 'required',
            'kode_prodi' => 'required|unique:prodis,kode_prodi,' . $prodi->id,
        ]);

        $prodi->update($request->all());
        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil diupdate.');
    }

    public function destroy(prodi $prodi)
    {
        $prodi->delete();
        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil dihapus.');
    }
}

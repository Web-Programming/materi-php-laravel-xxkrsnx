<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use Illuminate\Http\Request;

class fakultasController extends Controller
{
    public function index()
    {
        $fakultas = fakultas::all();
        return view('fakultas.index', compact('fakultas'));
    }

    public function create()
    {
        return view('fakultas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:fakultas',
            'nama' => 'required'
        ]);

        Fakultas::create($request->all());
        return redirect()->route('fakultas.index')->with('success', 'Data fakultas ditambahkan');
    }

    public function edit(Fakultas $fakultas)
    {
        return view('fakultas.edit', compact('fakultas'));
    }

    public function update(Request $request, fakultas $fakultas)
    {
        $request->validate([
            'kode' => 'required|unique:fakultas,kode,' . $fakultas->id,
            'nama' => 'required'
        ]);

        $fakultas->update($request->all());
        return redirect()->route('fakultas.index')->with('success', 'Data fakultas diperbarui');
    }

    public function destroy(fakultas $fakultas)
    {
        $fakultas->delete();
        return redirect()->route('fakultas.index')->with('success', 'Data fakultas dihapus');
    }
}

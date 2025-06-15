<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $materis = Materi::all();
        return view('Materi.index', compact('materis'));
    }

    public function create()
    {
        return view('Materi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);

        Materi::create($request->all());
        return redirect()->route('Materi.index')->with('success', 'Materi berhasil ditambahkan.');
    }

    public function show(Materi $materi)
    {
        return view('Materi.detail', compact('Materi'));
    }

    public function destroy(Materi $materi)
    {
        $materi->delete();
        return redirect()->route('Materi.index')->with('success', 'Materi berhasil dihapus.');
    }
}

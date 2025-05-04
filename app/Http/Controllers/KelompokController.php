<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    public function index()
    {
        $data = Kelompok::all();
        return view('kelompok.index', compact('data'));
    }

    public function create()
    {
        return view('kelompok.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Kelompok' => 'required|string|unique:kelompok,Kelompok',
        ]);

        Kelompok::create($request->all());
        return redirect()->route('kelompok.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kelompok = Kelompok::findOrFail($id);
        return view('kelompok.edit', compact('kelompok'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Kelompok' => 'required|string',
        ]);

        $kelompok = Kelompok::findOrFail($id);
        $kelompok->update($request->all());

        return redirect()->route('kelompok.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy($id)
    {
        $kelompok = Kelompok::findOrFail($id);
        $kelompok->delete();

        return redirect()->route('kelompok.index')->with('success', 'Data berhasil dihapus.');
    }
}

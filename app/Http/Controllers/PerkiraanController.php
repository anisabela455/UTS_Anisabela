<?php

namespace App\Http\Controllers;

use App\Models\Perkiraan;
use Illuminate\Http\Request;

class PerkiraanController extends Controller
{
    public function index()
    {
        $perkiraans = Perkiraan::all();
        return view('perkiraan.index', compact('perkiraans'));
    }

    public function create()
    {
        return view('perkiraan.create');
    }

    public function store(Request $request)
    {
        Perkiraan::create($request->all());
        return redirect()->route('perkiraan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $perkiraan = Perkiraan::findOrFail($id);
        return view('perkiraan.edit', compact('perkiraan'));
    }

    public function update(Request $request, $id)
    {
        $perkiraan = Perkiraan::findOrFail($id);
        $perkiraan->update($request->all());
        return redirect()->route('perkiraan.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Perkiraan::destroy($id);
        return redirect()->route('perkiraan.index')->with('success', 'Data berhasil dihapus.');
    }
}

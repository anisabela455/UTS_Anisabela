<?php

namespace App\Http\Controllers;

use App\Models\Djurnal;
use Illuminate\Http\Request;

class DjurnalController extends Controller
{
    public function index()
    {
        $djurnals = Djurnal::all();
        return view('djurnal.index', compact('djurnals'));
    }

    public function create()
    {
        return view('djurnal.create');
    }

    public function store(Request $request)
    {
        Djurnal::create($request->all());
        return redirect()->route('djurnal.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $djurnal = Djurnal::findOrFail($id);
        return view('djurnal.edit', compact('djurnal'));
    }

    public function update(Request $request, $id)
    {
        $djurnal = Djurnal::findOrFail($id);
        $djurnal->update($request->all());
        return redirect()->route('djurnal.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $djurnal = Djurnal::findOrFail($id);
        $djurnal->delete();
        return redirect()->route('djurnal.index')->with('success', 'Data berhasil dihapus.');
    }
}

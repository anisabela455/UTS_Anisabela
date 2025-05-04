<?php

namespace App\Http\Controllers;

use App\Models\SetupGlPeriode;
use Illuminate\Http\Request;

class SetupGlPeriodeController extends Controller
{
    public function index()
    {
        $items = SetupGlPeriode::all();
        return view('setup_gl_periode.index', compact('items'));
    }

    public function create()
    {
        return view('setup_gl_periode.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'periode_awal' => 'required|date',
            'periode_akhir' => 'required|date',
        ]);

        SetupGlPeriode::create($request->all());
        return redirect()->route('setup_gl_periode.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = SetupGlPeriode::findOrFail($id);
        return view('setup_gl_periode.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'periode_awal' => 'required|date',
            'periode_akhir' => 'required|date',
        ]);

        $item = SetupGlPeriode::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('setup_gl_periode.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = SetupGlPeriode::findOrFail($id);
        $item->delete();

        return redirect()->route('setup_gl_periode.index')->with('success', 'Data berhasil dihapus.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TabelSetupGlPerkiraan;
use Illuminate\Http\Request;

class TabelSetupGlPerkiraanController extends Controller
{
    public function index()
    {
        $items = TabelSetupGlPerkiraan::all();
        return view('tabel_setup_gl_perkiraan.index', compact('items'));
    }

    public function create()
    {
        return view('tabel_setup_gl_perkiraan.create');
    }

    public function store(Request $request)
    {
        TabelSetupGlPerkiraan::create($request->all());
        return redirect()->route('tabel-setup-gl-perkiraan.index');
    }

    public function edit($id)
    {
        $item = TabelSetupGlPerkiraan::findOrFail($id);
        return view('tabel_setup_gl_perkiraan.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = TabelSetupGlPerkiraan::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('tabel-setup-gl-perkiraan.index');
    }

    public function destroy($id)
    {
        TabelSetupGlPerkiraan::destroy($id);
        return redirect()->route('tabel-setup-gl-perkiraan.index');
    }
}

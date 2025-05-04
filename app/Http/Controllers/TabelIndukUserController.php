<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabelIndukUser;

class TabelIndukUserController extends Controller
{
    public function index()
    {
        $data = TabelIndukUser::all();
        return view('tabel_induk_user.index', compact('data'));
    }

    public function create()
    {
        return view('tabel_induk_user.create');
    }

    public function store(Request $request)
    {
        TabelIndukUser::create($request->all());
        return redirect()->route('tabel_induk_user.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = TabelIndukUser::findOrFail($id);
        return view('tabel_induk_user.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = TabelIndukUser::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('tabel_induk_user.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $item = TabelIndukUser::findOrFail($id);
        $item->delete();
        return redirect()->route('tabel_induk_user.index')->with('success', 'Data berhasil dihapus.');
    }
}

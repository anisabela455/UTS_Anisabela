<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiJurnalUmum;
use Illuminate\Http\Request;

class TabelAkuntansiJurnalUmumController extends Controller
{
    public function index()
    {
        $data = TabelAkuntansiJurnalUmum::all();
        return view('tabel_akuntansi_jurnal_umum.index', compact('data'));
    }

    public function create()
    {
        return view('tabel_akuntansi_jurnal_umum.create');
    }

    public function store(Request $request)
    {
        TabelAkuntansiJurnalUmum::create($request->all());
        return redirect()->route('jurnalumum.index');
    }

    public function edit($id)
    {
        $item = TabelAkuntansiJurnalUmum::findOrFail($id);
        return view('tabel_akuntansi_jurnal_umum.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = TabelAkuntansiJurnalUmum::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('jurnalumum.index');
    }

    public function destroy($id)
    {
        TabelAkuntansiJurnalUmum::destroy($id);
        return redirect()->route('jurnalumum.index');
    }
}

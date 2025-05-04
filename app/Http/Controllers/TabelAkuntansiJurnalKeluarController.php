<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabelAkuntansiJurnalKeluar;

class TabelAkuntansiJurnalKeluarController extends Controller
{
    public function index()
    {
        $keluar = TabelAkuntansiJurnalKeluar::all();
        return view('tabel_akuntansi_jurnal_keluar.index', compact('keluar'));
    }

    public function create()
    {
        return view('tabel_akuntansi_jurnal_keluar.create');
    }

    public function store(Request $request)
    {
        TabelAkuntansiJurnalKeluar::create($request->all());
        return redirect()->route('jurnal_keluar.index');
    }

    public function edit($nomor_jurnal)
    {
        $item = TabelAkuntansiJurnalKeluar::findOrFail($nomor_jurnal);
        return view('tabel_akuntansi_jurnal_keluar.edit', compact('item'));
    }

    public function update(Request $request, $nomor_jurnal)
    {
        $item = TabelAkuntansiJurnalKeluar::findOrFail($nomor_jurnal);
        $item->update($request->all());
        return redirect()->route('jurnal_keluar.index');
    }

    public function destroy($nomor_jurnal)
    {
        $item = TabelAkuntansiJurnalKeluar::findOrFail($nomor_jurnal);
        $item->delete();
        return redirect()->route('jurnal_keluar.index');
    }
}

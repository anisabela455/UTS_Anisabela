<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabelAkuntansiJurnalMasuk;

class TabelAkuntansiJurnalMasukController extends Controller
{
    public function index()
    {
        $keluar = TabelAkuntansiJurnalMasuk::all();
        return view('tabel_akuntansi_jurnal_masuk.index', compact('keluar'));
    }

    public function create()
    {
        return view('tabel_akuntansi_jurnal_masuk.create');
    }

    public function store(Request $request)
    {
        TabelAkuntansiJurnalMasuk::create($request->all());
        return redirect()->route('jurnal_masuk.index');
    }

    public function edit($nomor_jurnal)
    {
        $item = TabelAkuntansiJurnalMasuk::findOrFail($nomor_jurnal);
        return view('tabel_akuntansi_jurnal_masuk.edit', compact('item'));
    }

    public function update(Request $request, $nomor_jurnal)
    {
        $item = TabelAkuntansiJurnalMasuk::findOrFail($nomor_jurnal);
        $item->update($request->all());
        return redirect()->route('jurnal_masuk.index');
    }

    public function destroy($nomor_jurnal)
    {
        $item = TabelAkuntansiJurnalMasuk::findOrFail($nomor_jurnal);
        $item->delete();
        return redirect()->route('jurnal_masuk.index');
    }
}

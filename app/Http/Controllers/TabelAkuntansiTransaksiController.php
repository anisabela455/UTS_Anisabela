<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiTransaksi;
use Illuminate\Http\Request;

class TabelAkuntansiTransaksiController extends Controller
{
    public function index()
    {
        $tabel_akuntansi_transaksi = TabelAkuntansiTransaksi::all();
        return view('tabel_akuntansi_transaksi.index', compact('tabel_akuntansi_transaksi'));
    }

    public function create()
    {
        return view('tabel_akuntansi_transaksi.create');
    }

    public function store(Request $request)
    {
        TabelAkuntansiTransaksi::create($request->all());
        return redirect()->route('tabel_akuntansi_transaksi.index');
    }

    public function edit($id)
    {
        $item = TabelAkuntansiTransaksi::findOrFail($id);
        return view('tabel_akuntansi_transaksi.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = TabelAkuntansiTransaksi::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('tabel_akuntansi_transaksi.index');
    }

    public function destroy($id)
    {
        $item = TabelAkuntansiTransaksi::findOrFail($id);
        $item->delete();
        return redirect()->route('tabel_akuntansi_transaksi.index');
    }
}

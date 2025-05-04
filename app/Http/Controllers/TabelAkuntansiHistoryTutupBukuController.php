<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiHistoryTutupBuku;
use Illuminate\Http\Request;

class TabelAkuntansiHistoryTutupBukuController extends Controller
{
    public function index()
    {
        $backups = TabelAkuntansiHistoryTutupBuku::all();
        return view('tabel_akuntansi_history_tutup_buku.index', compact('backups'));
    }

    public function create()
    {
        return view('tabel_akuntansi_history_tutup_buku.create');
    }

    public function store(Request $request)
    {
        TabelAkuntansiHistoryTutupBuku::create($request->all());
        return redirect()->route('tutupbuku.index');
    }

    public function edit($id)
    {
        $item = TabelAkuntansiHistoryTutupBuku::findOrFail($id);
        return view('tabel_akuntansi_history_tutup_buku.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = TabelAkuntansiHistoryTutupBuku::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('tutupbuku.index');
    }

    public function destroy($id)
    {
        TabelAkuntansiHistoryTutupBuku::destroy($id);
        return redirect()->route('tutupbuku.index');
    }
}

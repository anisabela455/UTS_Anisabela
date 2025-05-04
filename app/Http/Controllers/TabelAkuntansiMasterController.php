<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiMaster;
use Illuminate\Http\Request;

class TabelAkuntansiMasterController extends Controller
{
    public function index()
    {
        $tabel_akuntansi_master = TabelAkuntansiMaster::all();
    return view('tabel_akuntansi_master.index', compact('tabel_akuntansi_master'));
    }

    public function create()
    {
        return view('tabel_akuntansi_master.create');
    }

    public function store(Request $request)
    {
        TabelAkuntansiMaster::create($request->all());
        return redirect()->route('tabel_akuntansi_master.index');
    }

    public function edit($id)
    {
        $item = TabelAkuntansiMaster::findOrFail($id);
        return view('tabel_akuntansi_master.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = TabelAkuntansiMaster::findOrFail($id);
        $item->update($request->all());
        return redirect()->route('tabel_akuntansi_master.index');
    }

    public function destroy($id)
    {
        TabelAkuntansiMaster::destroy($id);
        return redirect()->route('tabel_akuntansi_master.index');
    }
}

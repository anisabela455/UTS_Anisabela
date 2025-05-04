<?php

namespace App\Http\Controllers;

use App\Models\TabelAkuntansiHistoryBackup;
use Illuminate\Http\Request;

class TabelAkuntansiHistoryBackupController extends Controller
{
    public function index()
    {
        $backups = TabelAkuntansiHistoryBackup::all();
        return view('tabel_akuntansi_history_backup.index', compact('backups'));
    }

    public function create()
    {
        return view('tabel_akuntansi_history_backup.create');
    }

    public function store(Request $request)
    {
        TabelAkuntansiHistoryBackup::create($request->all());
        return redirect()->route('tabel_akuntansi_history_backup.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $backup = TabelAkuntansiHistoryBackup::findOrFail($id);
        return view('tabel_akuntansi_history_backup.edit', compact('backup'));
    }

    public function update(Request $request, $id)
    {
        $backup = TabelAkuntansiHistoryBackup::findOrFail($id);
        $backup->update($request->all());
        return redirect()->route('tabel_akuntansi_history_backup.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $backup = TabelAkuntansiHistoryBackup::findOrFail($id);
        $backup->delete();
        return redirect()->route('tabel_akuntansi_history_backup.index')->with('success', 'Data berhasil dihapus.');
    }
}

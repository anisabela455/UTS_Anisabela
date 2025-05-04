
@extends('layouts.app')

@section('content')
    <h1>Edit Data Akuntansi Master</h1>

    <form action="{{ route('tabel_akuntansi_master.update', $tabel_akuntansi_master->id_perkiraan) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Nomor Perkiraan:</label>
            <input type="text" name="nomor_perkiraan" value="{{ $tabel_akuntansi_master->nomor_perkiraan }}">
        </div>

        <div>
            <label>Nama Perkiraan:</label>
            <input type="text" name="nama_perkiraan" value="{{ $tabel_akuntansi_master->nama_perkiraan }}">
        </div>

        <div>
            <label>Tipe:</label>
            <input type="text" name="tipe" value="{{ $tabel_akuntansi_master->tipe }}">
        </div>

        <div>
            <label>Induk:</label>
            <input type="number" name="induk" value="{{ $tabel_akuntansi_master->induk }}">
        </div>

        <div>
            <label>Level:</label>
            <input type="number" name="level" value="{{ $tabel_akuntansi_master->level }}">
        </div>

        <div>
            <label>Kelompok:</label>
            <input type="text" name="kelompok" value="{{ $tabel_akuntansi_master->kelompok }}">
        </div>

        <div>
            <label>Normal:</label>
            <input type="text" name="normal" value="{{ $tabel_akuntansi_master->normal }}">
        </div>

        <div>
            <label>Awal Debet:</label>
            <input type="number" name="awal_debet" value="{{ $tabel_akuntansi_master->awal_debet }}">
        </div>

        <div>
            <label>Awal Kredit:</label>
            <input type="number" name="awal_kredit" value="{{ $tabel_akuntansi_master->awal_kredit }}">
        </div>

        <div>
            <label>Mut Debet:</label>
            <input type="number" name="mut_debet" value="{{ $tabel_akuntansi_master->mut_debet }}">
        </div>

        <div>
            <label>Mut Kredit:</label>
            <input type="number" name="mut_kredit" value="{{ $tabel_akuntansi_master->mut_kredit }}">
        </div>

        <div>
            <label>Sisa Debet:</label>
            <input type="number" name="sisa_debet" value="{{ $tabel_akuntansi_master->sisa_debet }}">
        </div>

        <div>
            <label>Sisa Kredit:</label>
            <input type="number" name="sisa_kredit" value="{{ $tabel_akuntansi_master->sisa_kredit }}">
        </div>

        <div>
            <label>RL Debet:</label>
            <input type="number" name="rl_debet" value="{{ $tabel_akuntansi_master->rl_debet }}">
        </div>

        <div>
            <label>RL Kredit:</label>
            <input type="number" name="rl_kredit" value="{{ $tabel_akuntansi_master->rl_kredit }}">
        </div>

        <div>
            <label>NRC Debet:</label>
            <input type="number" name="nrc_debet" value="{{ $tabel_akuntansi_master->nrc_debet }}">
        </div>

        <div>
            <label>NRC Kredit:</label>
            <input type="number" name="nrc_kredit" value="{{ $tabel_akuntansi_master->nrc_kredit }}">
        </div>

        <br>
        <button type="submit">Update</button>
    </form>
@endsection


@extends('layouts.app')

@section('content')
    <h1>Tambah Data Akuntansi Master</h1>

    <form action="{{ route('tabel_akuntansi_master.store') }}" method="POST">
        @csrf

        <div>
            <label>Nomor Perkiraan:</label>
            <input type="text" name="nomor_perkiraan">
        </div>

        <div>
            <label>Nama Perkiraan:</label>
            <input type="text" name="nama_perkiraan">
        </div>

        <div>
            <label>Tipe:</label>
            <input type="text" name="tipe">
        </div>

        <div>
            <label>Induk:</label>
            <input type="number" name="induk">
        </div>

        <div>
            <label>Level:</label>
            <input type="number" name="level">
        </div>

        <div>
            <label>Kelompok:</label>
            <input type="text" name="kelompok">
        </div>

        <div>
            <label>Normal:</label>
            <input type="text" name="normal">
        </div>

        <div>
            <label>Awal Debet:</label>
            <input type="number" name="awal_debet">
        </div>

        <div>
            <label>Awal Kredit:</label>
            <input type="number" name="awal_kredit">
        </div>

        <div>
            <label>Mut Debet:</label>
            <input type="number" name="mut_debet">
        </div>

        <div>
            <label>Mut Kredit:</label>
            <input type="number" name="mut_kredit">
        </div>

        <div>
            <label>Sisa Debet:</label>
            <input type="number" name="sisa_debet">
        </div>

        <div>
            <label>Sisa Kredit:</label>
            <input type="number" name="sisa_kredit">
        </div>

        <div>
            <label>RL Debet:</label>
            <input type="number" name="rl_debet">
        </div>

        <div>
            <label>RL Kredit:</label>
            <input type="number" name="rl_kredit">
        </div>

        <div>
            <label>NRC Debet:</label>
            <input type="number" name="nrc_debet">
        </div>

        <div>
            <label>NRC Kredit:</label>
            <input type="number" name="nrc_kredit">
        </div>

        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection

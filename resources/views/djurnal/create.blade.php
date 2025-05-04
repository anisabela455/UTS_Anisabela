@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Data Jurnal</h1>

    <form action="{{ route('djurnal.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Jurnal Kode</label>
            <input type="text" name="JurnalKode" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nomor Perkiraan</label>
            <input type="text" name="NomorPerkiraan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Transaksi</label>
            <input type="date" name="TanggalTransaksi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Bulan Transaksi</label>
            <input type="number" name="bulan_transaksi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jenis Transaksi</label>
            <input type="text" name="jenis_transaksi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Keterangan</label>
            <input type="text" name="Keterangan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Debet</label>
            <input type="number" name="debet" class="form-control" step="0.01" required>
        </div>

        <div class="mb-3">
            <label>Kredit</label>
            <input type="number" name="kredit" class="form-control" step="0.01" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Posting</label>
            <input type="date" name="tanggal_posting" class="form-control">
        </div>

        <div class="mb-3">
            <label>Keterangan Posting</label>
            <input type="text" name="keterangan_posting" class="form-control">
        </div>

        <div class="mb-3">
            <label>ID User</label>
            <input type="number" name="id_user" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('djurnal.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

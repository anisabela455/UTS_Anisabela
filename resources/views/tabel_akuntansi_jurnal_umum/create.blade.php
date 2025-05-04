@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Jurnal Umum</h1>
    <form action="{{ route('jurnalumum.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomor_jurnal" class="form-label">Nomor Jurnal</label>
            <input type="number" name="nomor_jurnal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kode_jurnal" class="form-label">Kode Jurnal</label>
            <input type="text" name="kode_jurnal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" name="tanggal_selesai" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('jurnalumum.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

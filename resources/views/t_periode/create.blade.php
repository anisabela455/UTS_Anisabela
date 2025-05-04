@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Periode</h1>
    <form action="{{ route('t-periode.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Periode" class="form-label">Periode</label>
            <input type="text" class="form-control" name="Periode" required>
        </div>
        <div class="mb-3">
            <label for="TanggalMulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" name="TanggalMulai" required>
        </div>
        <div class="mb-3">
            <label for="TanggalSelesai" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" name="TanggalSelesai" required>
        </div>
        <div class="mb-3">
            <label for="Keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" name="Keterangan">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('t-periode.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

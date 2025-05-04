@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Tambah Data Perkiraan</h2>
    <form action="{{ route('t_perkiraan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="NomorPerkiraan" class="form-label">Nomor Perkiraan</label>
            <input type="text" class="form-control" name="NomorPerkiraan" required>
        </div>
        <div class="mb-3">
            <label for="NamaPerkiraan" class="form-label">Nama Perkiraan</label>
            <input type="text" class="form-control" name="NamaPerkiraan" required>
        </div>
        <div class="mb-3">
            <label for="Kelompok" class="form-label">Kelompok</label>
            <input type="text" class="form-control" name="Kelompok" required>
        </div>
        <div class="mb-3">
            <label for="Keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" name="Keterangan">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('t_perkiraan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

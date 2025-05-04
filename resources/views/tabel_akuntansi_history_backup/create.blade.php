@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Backup</h1>
    <form action="{{ route('tabel_akuntansi_history_backup.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama File</label>
            <input type="text" name="nama_file" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Backup</label>
            <input type="text" name="tanggal_backup" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>ID User</label>
            <input type="text" name="id_user" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

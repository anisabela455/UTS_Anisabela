@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Backup</h1>
    <form action="{{ route('tabel_akuntansi_history_backup.update', $backup->id_backup) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama File</label>
            <input type="text" name="nama_file" class="form-control" value="{{ $backup->nama_file }}" required>
        </div>
        <div class="mb-3">
            <label>Tanggal Backup</label>
            <input type="text" name="tanggal_backup" class="form-control" value="{{ $backup->tanggal_backup }}" required>
        </div>
        <div class="mb-3">
            <label>ID User</label>
            <input type="text" name="id_user" class="form-control" value="{{ $backup->id_user }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

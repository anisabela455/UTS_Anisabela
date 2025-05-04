@extends('layouts.app')

@section('content')
    <h1>Tambah Tutup Buku</h1>
    <form action="{{ route('tutupbuku.store') }}" method="POST">
        @csrf
        <label>Nama File:</label>
        <input type="text" name="nama_file" required><br>
        <label>Tanggal Backup:</label>
        <input type="date" name="tanggal_backup" required><br>
        <label>ID User:</label>
        <input type="number" name="id_user" required><br>
        <button type="submit">Simpan</button>
    </form>
@endsection

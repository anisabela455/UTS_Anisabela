@extends('layouts.app')

@section('content')
    <h1>Edit Tutup Buku</h1>
    <form action="{{ route('tutupbuku.update', $item->id_backup) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama File:</label>
        <input type="text" name="nama_file" value="{{ $item->nama_file }}" required><br>
        <label>Tanggal Backup:</label>
        <input type="date" name="tanggal_backup" value="{{ $item->tanggal_backup }}" required><br>
        <label>ID User:</label>
        <input type="number" name="id_user" value="{{ $item->id_user }}" required><br>
        <button type="submit">Update</button>
    </form>
@endsection

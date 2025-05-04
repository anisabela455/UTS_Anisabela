@extends('layouts.app')

@section('content')
<h1>Tambah Periode</h1>
<form action="{{ route('setup_gl_periode.store') }}" method="POST">
    @csrf
    <label>Periode Awal:</label>
    <input type="date" name="periode_awal" required>
    <br>
    <label>Periode Akhir:</label>
    <input type="date" name="periode_akhir" required>
    <br>
    <button type="submit">Simpan</button>
</form>
@endsection

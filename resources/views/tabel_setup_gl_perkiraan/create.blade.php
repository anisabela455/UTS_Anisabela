@extends('layouts.app')

@section('content')
<h1>Tambah Data Perkiraan</h1>
<form action="{{ route('tabel-setup-gl-perkiraan.store') }}" method="POST">
    @csrf
    <label>Aktiva Lancar:</label><input name="aktiva_lancar"><br>
    <label>Hutang Lancar:</label><input name="hutang_lancar"><br>
    <label>Modal Sendiri:</label><input name="modal_sendiri"><br>
    <label>Kas:</label><input name="kas"><br>
    <label>SHU:</label><input name="shu"><br>
    <button type="submit">Simpan</button>
</form>
@endsection

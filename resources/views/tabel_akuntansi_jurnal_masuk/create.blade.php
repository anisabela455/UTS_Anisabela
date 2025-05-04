@extends('layouts.app')

@section('content')
<h1>Tambah Data Jurnal masuk</h1>

<form action="{{ route('jurnal_masuk.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nomor_jurnal">Nomor Jurnal</label>
        <input type="text" name="nomor_jurnal" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="kode_jurnal">Kode Jurnal</label>
        <input type="text" name="kode_jurnal" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_selesai">Tanggal Selesai</label>
        <input type="date" name="tanggal_selesai" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection

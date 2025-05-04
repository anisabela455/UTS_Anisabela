@extends('layouts.app')

@section('content')
<h1>Edit Data Jurnal Keluar</h1>

<form action="{{ route('jurnal_keluar.update', $item->nomor_jurnal) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nomor_jurnal">Nomor Jurnal</label>
        <input type="text" name="nomor_jurnal" value="{{ $item->nomor_jurnal }}" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label for="kode_jurnal">Kode Jurnal</label>
        <input type="text" name="kode_jurnal" value="{{ $item->kode_jurnal }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tanggal_selesai">Tanggal Selesai</label>
        <input type="date" name="tanggal_selesai" value="{{ $item->tanggal_selesai }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection

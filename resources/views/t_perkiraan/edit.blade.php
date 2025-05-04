@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Data Perkiraan</h2>
    <form action="{{ route('t_perkiraan.update', $t_perkiraan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="NomorPerkiraan" class="form-label">Nomor Perkiraan</label>
            <input type="text" class="form-control" name="NomorPerkiraan" value="{{ $t_perkiraan->NomorPerkiraan }}" required>
        </div>
        <div class="mb-3">
            <label for="NamaPerkiraan" class="form-label">Nama Perkiraan</label>
            <input type="text" class="form-control" name="NamaPerkiraan" value="{{ $t_perkiraan->NamaPerkiraan }}" required>
        </div>
        <div class="mb-3">
            <label for="Kelompok" class="form-label">Kelompok</label>
            <input type="text" class="form-control" name="Kelompok" value="{{ $t_perkiraan->Kelompok }}" required>
        </div>
        <div class="mb-3">
            <label for="Keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" name="Keterangan" value="{{ $t_perkiraan->Keterangan }}">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('t_perkiraan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

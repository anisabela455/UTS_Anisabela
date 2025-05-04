@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Kelompok</h1>
    <form action="{{ route('kelompok.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Kelompok">Nama Kelompok</label>
            <input type="text" name="Kelompok" id="Kelompok" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        <a href="{{ route('kelompok.index') }}" class="btn btn-secondary mt-2">Batal</a>
    </form>
</div>
@endsection

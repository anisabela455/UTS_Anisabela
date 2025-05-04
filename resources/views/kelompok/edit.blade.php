@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kelompok</h1>
    <form action="{{ route('kelompok.update', $kelompok->Kelompok) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Kelompok">Nama Kelompok</label>
            <input type="text" name="Kelompok" id="Kelompok" class="form-control" value="{{ $kelompok->Kelompok }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
        <a href="{{ route('kelompok.index') }}" class="btn btn-secondary mt-2">Batal</a>
    </form>
</div>
@endsection

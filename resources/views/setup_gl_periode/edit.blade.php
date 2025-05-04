@extends('layouts.app')

@section('content')
<h1>Edit Periode</h1>
<form action="{{ route('setup_gl_periode.update', $item->id_periode) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Periode Awal:</label>
    <input type="date" name="periode_awal" value="{{ $item->periode_awal }}" required>
    <br>
    <label>Periode Akhir:</label>
    <input type="date" name="periode_akhir" value="{{ $item->periode_akhir }}" required>
    <br>
    <button type="submit">Update</button>
</form>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah User</h2>
    <form action="{{ route('tabel_induk_user.store') }}" method="POST">
        @csrf
        @include('tabel_induk_user.form')
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection

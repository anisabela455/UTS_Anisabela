@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Perkiraan</h1>
    <form action="{{ route('perkiraan.store') }}" method="POST">
        @csrf
        @include('perkiraan.form')
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

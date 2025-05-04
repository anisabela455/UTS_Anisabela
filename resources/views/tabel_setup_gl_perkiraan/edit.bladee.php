@extends('layouts.app')

@section('content')
<h1>Edit Data Perkiraan</h1>
<form action="{{ route('tabel-setup-gl-perkiraan.update', $item->id_setup) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Aktiva Lancar:</label><input name="aktiva_lancar" value="{{ $item->aktiva_lancar }}"><br>
    <label>Hutang Lancar:</label><input name="hutang_lancar" value="{{ $item->hutang_lancar }}"><br>
    <label>Modal Sendiri:</label><input name="modal_sendiri" value="{{ $item->modal_sendiri }}"><br>
    <label>Kas:</label><input name="kas" value="{{ $item->kas }}"><br>
    <label>SHU:</label><input name="shu" value="{{ $item->shu }}"><br>
    <button type="submit">Update</button>
</form>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit User</h2>
    <form action="{{ route('tabel_induk_user.update', $item->id_user) }}" method="POST">
        @csrf
        @method('PUT')
        @include('tabel_induk_user.form')
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection

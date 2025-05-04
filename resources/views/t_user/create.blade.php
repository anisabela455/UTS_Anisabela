@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Tambah User</h1>
    <form action="{{ route('t_user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="user_name" class="form-control">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="text" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Level</label>
            <input type="text" name="level" class="form-control">
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection

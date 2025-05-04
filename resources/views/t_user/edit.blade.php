@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('t_user.update', $data->id_user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="user_name" class="form-control" value="{{ $data->user_name }}">
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="text" name="password" class="form-control" value="{{ $data->password }}">
        </div>
        <div class="mb-3">
            <label>Level</label>
            <input type="text" name="level" class="form-control" value="{{ $data->level }}">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

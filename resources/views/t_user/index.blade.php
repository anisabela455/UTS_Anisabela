@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Data User</h1>
    <a href="{{ route('t_user.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->id_user }}</td>
                    <td>{{ $row->user_name }}</td>
                    <td>{{ $row->password }}</td>
                    <td>{{ $row->level }}</td>
                    <td>
                        <a href="{{ route('t_user.edit', $row->id_user) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('t_user.destroy', $row->id_user) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

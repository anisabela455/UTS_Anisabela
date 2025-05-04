@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Kelompok</h1>
    <a href="{{ route('kelompok.create') }}" class="btn btn-primary mb-3">Tambah Kelompok</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kelompok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->Kelompok }}</td>
                <td>
                    <a href="{{ route('kelompok.edit', $row->Kelompok) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('kelompok.destroy', $row->Kelompok) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@extends('layouts.app')

@section('content')
<div class="container">
    <h1>History Tutup Buku</h1>
    <a href="{{ route('tutupbuku.create') }}" class="btn btn-primary mb-3">Tambah Backup</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Backup</th>
                <th>Nama File</th>
                <th>Tanggal Backup</th>
                <th>ID User</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($backups as $item)
            <tr>
                <td>{{ $item->id_backup }}</td>
                <td>{{ $item->nama_file }}</td>
                <td>{{ $item->tanggal_backup }}</td>
                <td>{{ $item->id_user }}</td>
                <td>
                    <a href="{{ route('tutupbuku.edit', $item->id_backup) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('tutupbuku.destroy', $item->id_backup) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

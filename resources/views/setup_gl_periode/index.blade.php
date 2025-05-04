@extends('layouts.app')

@section('content')
<h1>Setup GL Periode</h1>
<a href="{{ route('setup_gl_periode.create') }}">+ Tambah Periode</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Periode Awal</th>
            <th>Periode Akhir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->id_periode }}</td>
            <td>{{ $item->periode_awal }}</td>
            <td>{{ $item->periode_akhir }}</td>
            <td>
                <a href="{{ route('setup_gl_periode.edit', $item->id_periode) }}">Edit</a>
                <form action="{{ route('setup_gl_periode.destroy', $item->id_periode) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

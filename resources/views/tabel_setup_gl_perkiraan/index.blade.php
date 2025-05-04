@extends('layouts.app')

@section('content')
<h1>Setup GL Perkiraan</h1>
<a href="{{ route('tabel-setup-gl-perkiraan.create') }}">+ Tambah Data</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Aktiva Lancar</th>
            <th>Hutang Lancar</th>
            <th>Modal Sendiri</th>
            <th>Kas</th>
            <th>SHU</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->id_setup }}</td>
            <td>{{ $item->aktiva_lancar }}</td>
            <td>{{ $item->hutang_lancar }}</td>
            <td>{{ $item->modal_sendiri }}</td>
            <td>{{ $item->kas }}</td>
            <td>{{ $item->shu }}</td>
            <td>
                <a href="{{ route('tabel-setup-gl-perkiraan.edit', $item->id_setup) }}">Edit</a>
                <form action="{{ route('tabel-setup-gl-perkiraan.destroy', $item->id_setup) }}" method="POST" style="display:inline">
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

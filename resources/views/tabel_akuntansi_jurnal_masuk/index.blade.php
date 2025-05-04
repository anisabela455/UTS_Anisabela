@extends('layouts.app')

@section('content')
<h1>Data Jurnal masuk</h1>
<a href="{{ route('jurnal_masuk.create') }}" class="btn btn-primary">Tambah</a>
<table class="table">
    <thead>
        <tr>
            <th>Nomor Jurnal</th>
            <th>Kode Jurnal</th>
            <th>Tanggal Selesai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($keluar as $item)
        <tr>
            <td>{{ $item->nomor_jurnal }}</td>
            <td>{{ $item->kode_jurnal }}</td>
            <td>{{ $item->tanggal_selesai }}</td>
            <td>
                <a href="{{ route('jurnal_masuk.edit', $item->nomor_jurnal) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('jurnal_masuk.destroy', $item->nomor_jurnal) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

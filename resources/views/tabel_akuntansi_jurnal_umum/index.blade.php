@extends('layouts.app')

@section('content')
    <h1>Data Jurnal Umum</h1>
    <a href="{{ route('jurnalumum.create') }}" class="btn btn-primary">Tambah</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nomor Jurnal</th>
                <th>Kode Jurnal</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nomor_jurnal }}</td>
                    <td>{{ $item->kode_jurnal }}</td>
                    <td>{{ $item->tanggal_selesai }}</td>
                    <td>
                        <a href="{{ route('jurnalumum.edit', $item->nomor_jurnal) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('jurnalumum.destroy', $item->nomor_jurnal) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

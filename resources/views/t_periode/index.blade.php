@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Periode</h1>
    <a href="{{ route('t-periode.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Periode</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->Periode }}</td>
                    <td>{{ $row->TanggalMulai }}</td>
                    <td>{{ $row->TanggalSelesai }}</td>
                    <td>{{ $row->Keterangan }}</td>
                    <td>
                        <a href="{{ route('t-periode.edit', $row->Periode) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('t-periode.destroy', $row->Periode) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

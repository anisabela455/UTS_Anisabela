@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Data Perkiraan</h2>
    <a href="{{ route('t_perkiraan.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nomor Perkiraan</th>
                <th>Nama Perkiraan</th>
                <th>Kelompok</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($t_perkiraan as $item)
                <tr>
                    <td>{{ $item->NomorPerkiraan }}</td>
                    <td>{{ $item->NamaPerkiraan }}</td>
                    <td>{{ $item->Kelompok }}</td>
                    <td>{{ $item->Keterangan }}</td>
                    <td>
                        <a href="{{ route('t_perkiraan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('t_perkiraan.destroy', $item->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if($t_perkiraan->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">Data tidak ditemukan.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection

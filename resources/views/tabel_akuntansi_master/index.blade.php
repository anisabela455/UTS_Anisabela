@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Akuntansi Master</h1>

    <a href="{{ route('tabel_akuntansi_master.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID Perkiraan</th>
                <th>Nomor Perkiraan</th>
                <th>Nama Perkiraan</th>
                <th>Tipe</th>
                <th>Induk</th>
                <th>Level</th>
                <th>Kelompok</th>
                <th>Normal</th>
                <th>Awal Debet</th>
                <th>Awal Kredit</th>
                <th>Mutasi Debet</th>
                <th>Mutasi Kredit</th>
                <th>Saldo Normal</th>
                <th>Keterangan</th>
                <th>Sisa Debet</th>
                <th>Sisa Kredit</th>
                <th>RL Debet</th>
                <th>RL Kredit</th>
                <th>NRC Debet</th>
                <th>NRC Kredit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tabel_akuntansi_master as $item)
            <tr>
                <td>{{ $item->id_perkiraan }}</td>
                <td>{{ $item->nomor_perkiraan }}</td>
                <td>{{ $item->nama_perkiraan }}</td>
                <td>{{ $item->tipe }}</td>
                <td>{{ $item->induk }}</td>
                <td>{{ $item->level }}</td>
                <td>{{ $item->kelompok }}</td>
                <td>{{ $item->normal }}</td>
                <td>{{ $item->awal_debet }}</td>
                <td>{{ $item->awal_kredit }}</td>
                <td>{{ $item->mut_debet }}</td>
                <td>{{ $item->mut_kredit }}</td>
                <td>{{ $item->saldo_normal }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->sisa_debet }}</td>
                <td>{{ $item->sisa_kredit }}</td>
                <td>{{ $item->rl_debet }}</td>
                <td>{{ $item->rl_kredit }}</td>
                <td>{{ $item->nrc_debet }}</td>
                <td>{{ $item->nrc_kredit }}</td>
                <td>
                    <a href="{{ route('tabel_akuntansi_master.edit', $item->id_perkiraan) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('tabel_akuntansi_master.destroy', $item->id_perkiraan) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

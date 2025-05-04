@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Jurnal</h1>

    <a href="{{ route('djurnal.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Transaksi ID</th>
                <th>Jurnal Kode</th>
                <th>Nomor Perkiraan</th>
                <th>Tanggal Transaksi</th>
                <th>Bulan Transaksi</th>
                <th>Jenis Transaksi</th>
                <th>Keterangan</th>
                <th>Debet</th>
                <th>Kredit</th>
                <th>Tanggal Posting</th>
                <th>Keterangan Posting</th>
                <th>ID User</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($djurnals as $item)
            <tr>
                <td>{{ $item->TransaksiID }}</td>
                <td>{{ $item->JurnalKode }}</td>
                <td>{{ $item->NomorPerkiraan }}</td>
                <td>{{ $item->TanggalTransaksi }}</td>
                <td>{{ $item->bulan_transaksi }}</td>
                <td>{{ $item->jenis_transaksi }}</td>
                <td>{{ $item->Keterangan }}</td>
                <td>{{ number_format($item->debet, 0, ',', '.') }}</td>
                <td>{{ number_format($item->Kredit, 0, ',', '.') }}</td>
                <td>{{ $item->tanggal_posting }}</td>
                <td>{{ $item->keterangan_posting }}</td>
                <td>{{ $item->id_user }}</td>
                <td>
                    <a href="{{ route('djurnal.edit', $item->TransaksiID) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('djurnal.destroy', $item->TransaksiID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

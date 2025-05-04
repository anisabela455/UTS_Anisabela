@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-3">Data Transaksi</h1>
    <a href="{{ route('tabel_akuntansi_transaksi.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Kode Jurnal</th>
                    <th>Nomor Perkiraan</th>
                    <th>Tanggal Transaksi</th>
                    <th>Bulan Transaksi</th>
                    <th>Jenis</th>
                    <th>Keterangan</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                    <th>keterangan Posting</th>
                    <th>ID User</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tabel_akuntansi_transaksi as $item)
                    <tr>
                        <td>{{ $item->id_transaksi }}</td>
                        <td>{{ $item->kode_jurnal }}</td>
                        <td>{{ $item->nomor_perkiraan }}</td>
                        <td>{{ $item->tanggal_transaksi }}</td>
                        <td>{{ $item->bulan_transaksi }}</td>
                        <td>{{ $item->jenis_transaksi }}</td>
                        <td>{{ $item->keterangan_transaksi }}</td>
                        <td class="text-end">{{ number_format($item->debet, 0, ',', '.') }}</td>
                        <td class="text-end">{{ number_format($item->kredit, 0, ',', '.') }}</td>
                        <td>{{ $item->keterangan__posting }}</td>
                        <td>{{ $item->id_user }}</td>
                        <td>
                            <a href="{{ route('tabel_akuntansi_transaksi.edit', $item->id_transaksi) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('tabel_akuntansi_transaksi.destroy', $item->id_transaksi) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($tabel_akuntansi_transaksi->isEmpty())
                    <tr>
                        <td colspan="12" class="text-center">Tidak ada data transaksi.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection

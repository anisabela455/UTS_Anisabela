@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data HJurnal</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nomor Jurnal</th>
                <th>Jurnal Kode</th>
                <th>Tanggal Selesai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hjurnal as $item)
            <tr>
                <td>{{ $item->NomorJurnal }}</td>
                <td>{{ $item->JurnalKode }}</td>
                <td>{{ $item->TanggalSelesai }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

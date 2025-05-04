@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Perkiraan</h1>
    <a href="{{ route('perkiraan.create') }}" class="btn btn-primary mb-3">Tambah</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Induk</th>
                <th>Level</th>
                <th>Kelompok</th>
                <th>Normal</th>
                <th>Awal Debet</th>
                <th>Awal Kredit</th>
                <th>Mut Debet</th>
                <th>Mut Kredit</th>
                <th>Debet</th>
                <th>Kredit</th>
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
            @foreach ($perkiraans as $p)
            <tr>
                <td>{{ $p->PerkiraanID }}</td>
                <td>{{ $p->NomorPerkiraan }}</td>
                <td>{{ $p->NamaPerkiraan }}</td>
                <td>{{ $p->tipe }}</td>
                <td>{{ $p->induk }}</td>
                <td>{{ $p->level }}</td>
                <td>{{ $p->Kelompok }}</td>
                <td>{{ $p->normal }}</td>
                <td>{{ number_format($p->awal_debet, 0, ',', '.') }}</td>
                <td>{{ number_format($p->awal_kredit, 0, ',', '.') }}</td>
                <td>{{ number_format($p->mut_debet, 0, ',', '.') }}</td>
                <td>{{ number_format($p->mut_kredit, 0, ',', '.') }}</td>
                <td>{{ $p->debet }}</td>
                <td>{{ $p->kredit }}</td>
                <td>{{ $p->sisa_debet }}</td>
                <td>{{ $p->sisa_kredit }}</td>
                <td>{{ $p->rl_debet }}</td>
                <td>{{ $p->rl_kredit }}</td>
                <td>{{ number_format($p->nrc_debet, 0, ',', '.') }}</td>
                <td>{{ number_format($p->nrc_debet, 0, ',', '.') }}</td>

                <td>
                    <a href="{{ route('perkiraan.edit', $p->PerkiraanID) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('perkiraan.destroy', $p->PerkiraanID) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin?')" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

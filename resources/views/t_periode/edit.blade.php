@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Periode</h1>
    <form action="{{ route('t-periode.update', $item->Periode) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Periode" class="form-label">Periode</label>
            <input type="text" class="form-control" name="Periode" value="{{ $item->Periode }}" readonly>
        </div>
        <div class="mb-3">
            <label for="TanggalMulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" name="TanggalMulai" value="{{ $item->TanggalMulai }}" required>
        </div>
        <div class="mb-3">
            <label for="TanggalSelesai" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" name="TanggalSelesai" value="{{ $item->TanggalSelesai }}" required>
        </div>
        <div class="mb-3">
            <label for="Keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" name="Keterangan" value="{{ $item->Keterangan }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('t-periode.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

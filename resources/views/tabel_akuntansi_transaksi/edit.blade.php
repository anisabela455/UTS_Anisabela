@extends('layouts.app')

@section('content')
<h1>Edit Transaksi</h1>
<form method="POST" action="{{ route('tabel_akuntansi_transaksi.update', $item->id_transaksi) }}">
    @csrf
    @method('PUT')
    <input name="kode_jurnal" value="{{ $item->kode_jurnal }}"><br>
    <input name="nomor_perkiraan" value="{{ $item->nomor_perkiraan }}"><br>
    <input name="tanggal_transaksi" type="date" value="{{ $item->tanggal_transaksi }}"><br>
    <input name="bulan_transaksi" value="{{ $item->bulan_transaksi }}"><br>
    <input name="jenis_transaksi" value="{{ $item->jenis_transaksi }}"><br>
    <input name="keterangan_transaksi" value="{{ $item->keterangan_transaksi }}"><br>
    <input name="debet" value="{{ $item->debet }}"><br>
    <input name="kredit" value="{{ $item->kredit }}"><br>
    <input name="keterangan_posting" type="date" value="{{ $item->tanggal_posting }}"><br>
    <input name="id_user" value="{{ $item->id_user }}"><br>
    <button type="submit">Update</button>
</form>
@endsection

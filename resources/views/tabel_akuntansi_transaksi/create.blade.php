@extends('layouts.app')

@section('content')
<h1>Tambah Transaksi</h1>
<form method="POST" action="{{ route('tabel_akuntansi_transaksi.store') }}">
    @csrf
    <input name="kode_jurnal" placeholder="Kode Jurnal"><br>
    <input name="nomor_perkiraan" placeholder="Nomor Perkiraan"><br>
    <input name="tanggal_transaksi" type="date"><br>
    <input name="bulan_transaksi" placeholder="Bulan"><br>
    <input name="jenis_transaksi" placeholder="Jenis"><br>
    <input name="keterangan_transaksi" placeholder="Keterangan"><br>
    <input name="debet" placeholder="Debet"><br>
    <input name="kredit" placeholder="Kredit"><br>
    <input name="keterangan_posting" type="date"><br>
    <input name="id_user" placeholder="ID User"><br>
    <button type="submit">Simpan</button>
</form>
@endsection

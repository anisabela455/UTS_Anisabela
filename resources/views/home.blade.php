@extends('layouts.app')

@section('title', 'Daftar Tabel')

@section('content')
    <div class="container">
        <h2 class="mb-4">Daftar Tabel Aplikasi Akuntansi</h2>
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('/djurnal') }}">djurnal</a></li>
            <li class="list-group-item"><a href="{{ url('/hjurnal') }}">hjurnal</a></li>
            <li class="list-group-item"><a href="{{ url('/kelompok') }}">kelompok</a></li>
            <li class="list-group-item"><a href="{{ url('/perkiraan') }}">perkiraan</a></li>
            <li class="list-group-item"><a href="{{ url('/tabel_akuntansi_history_backup') }}">tabel_akuntansi_history_backup</a></li>
            <li class="list-group-item"><a href="{{ url('/tutupbuku') }}">tutupbuku</a></li>
            <li class="list-group-item"><a href="{{ url('/jurnal_keluar') }}">jurnal_keluar</a></li>
            <li class="list-group-item"><a href="{{ url('/jurnal_masuk') }}">jurnal_masuk</a></li>
            <li class="list-group-item"><a href="{{ url('/tabel_akuntansi_jurnal_umum') }}">tabel_akuntansi_jurnal_umum</a></li>
            <li class="list-group-item"><a href="{{ url('/tabel_akuntansi_master') }}">tabel_akuntansi_master</a></li>
            <li class="list-group-item"><a href="{{ url('/tabel_akuntansi_transaksi') }}">tabel_akuntansi_transaksi</a></li>
            <li class="list-group-item"><a href="{{ url('/tabel_induk_user') }}">tabel_induk_user</a></li>
            <li class="list-group-item"><a href="{{ url('/tabel_setup_gl_periode') }}">tabel_setup_gl_periode</a></li>
            <li class="list-group-item"><a href="{{ url('/tabel_setup_gl_perkiraan') }}">tabel_setup_gl_perkiraan</a></li>
            <li class="list-group-item"><a href="{{ url('/t_periode') }}">t_periode</a></li>
            <li class="list-group-item"><a href="{{ url('/t_perkiraan') }}">t_perkiraan</a></li>
            <li class="list-group-item"><a href="{{ url('/t_user') }}">t_user</a></li>
        </ul>
    </div>
@endsection

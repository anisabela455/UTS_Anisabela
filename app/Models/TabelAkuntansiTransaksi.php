<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelAkuntansiTransaksi extends Model
{
    use HasFactory;

    protected $table = 'tabel_akuntansi_transaksi';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = false;

    protected $fillable = [
        'kode_jurnal',
        'nomor_perkiraan',
        'tanggal_transaksi',
        'bulan_transaksi',
        'jenis_transaksi',
        'keterangan_transaksi',
        'debet',
        'kredit',
        'keterangan_posting',
        'id_user'
    ];
}


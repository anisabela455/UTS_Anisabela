<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Djurnal extends Model
{
    protected $table = 'djurnal';
    protected $primaryKey = 'TransaksiID';
    public $timestamps = false;

    protected $fillable = [
        'JurnalKode',
        'NomorPerkiraan',
        'TanggalTransaksi',
        'bulan_transaksi',
        'jenis_transaksi',
        'Keterangan',
        'debet',
        'kredit',
        'tanggal_posting',
        'keterangan_posting',
        'id_user'
    ];
}

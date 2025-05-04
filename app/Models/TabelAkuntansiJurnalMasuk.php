<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabelAkuntansiJurnalmasuk extends Model
{
    protected $table = 'tabel_akuntansi_jurnal_masuk';
    protected $primaryKey = 'nomor_jurnal';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nomor_jurnal',
        'kode_jurnal',
        'tanggal_selesai',
    ];
}


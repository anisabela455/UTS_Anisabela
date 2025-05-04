<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabelAkuntansiJurnalUmum extends Model
{
    protected $table = 'tabel_akuntansi_jurnal_umum';
    protected $primaryKey = 'nomor_jurnal';
    public $incrementing = false;
    protected $fillable = ['nomor_jurnal', 'kode_jurnal', 'tanggal_selesai'];
    public $timestamps = false;
}


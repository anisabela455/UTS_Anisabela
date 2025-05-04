<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hjurnal extends Model
{
    protected $table = 'hjurnal';
    protected $primaryKey = 'TransaksiID';
    public $timestamps = false;

    protected $fillable = [
        'TanggalTransaksi', 'JurnalKode', 'Keterangan', 'id_user'
    ];
}

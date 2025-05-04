<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TPeriode extends Model
{
    protected $table = 't_periode';
    protected $primaryKey = 'Periode';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'Periode', 'TanggalMulai', 'TanggalSelesai', 'Keterangan'
    ];
}


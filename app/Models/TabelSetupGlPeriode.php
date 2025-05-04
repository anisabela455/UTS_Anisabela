<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SetupGlPeriode extends Model
{
    protected $table = 'tabel_setup_gl_periode';
    protected $primaryKey = 'id_periode';
    public $timestamps = false;

    protected $fillable = [
        'periode_awal',
        'periode_akhir',
    ];
}

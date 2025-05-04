<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TPerkiraan extends Model
{
    protected $table = 't_perkiraan';
    protected $primaryKey = 'NomorPerkiraan';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'NomorPerkiraan',
        'NamaPerkiraan',
        'Kelompok',
        'Keterangan',
    ];
}


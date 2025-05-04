<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perkiraan extends Model
{
    protected $table = 'perkiraan';
    protected $primaryKey = 'PerkiraanID';
    public $timestamps = false;

    protected $fillable = [
        'NomorPerkiraan', 'NamaPerkiraan', 'tipe', 'induk', 'level', 'Kelompok', 'normal',
        'awal_debet', 'awal_kredit', 'mut_debet', 'mut_kredit', 'debet', 'kredit',
        'sisa_debet', 'sisa_kredit', 'rl_debet', 'rl_kredit', 'nrc_debet', 'nrc_kredit'
    ];
}


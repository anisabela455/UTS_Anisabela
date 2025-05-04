<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabelSetupGlPerkiraan extends Model
{
    protected $table = 'tabel_setup_gl_perkiraan';
    protected $primaryKey = 'id_setup';
    public $timestamps = false;

    protected $fillable = [
        'aktiva_lancar',
        'hutang_lancar',
        'modal_sendiri',
        'kas',
        'shu',
    ];
}

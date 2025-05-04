<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabelAkuntansiHistoryBackup extends Model
{
    protected $table = 'tabel_akuntansi_history_backup';
    protected $primaryKey = 'id_backup';
    public $timestamps = false;

    protected $fillable = [
        'nama_file', 'tanggal_backup', 'id_user'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelAkuntansiHistoryTutupBuku extends Model
{
    use HasFactory;

    protected $table = 'tabel_akuntansi_history_tutup_buku';
    protected $primaryKey = 'id_backup';
    public $timestamps = false;

    protected $fillable = [
        'nama_file',
        'tanggal_backup',
        'id_user'
    ];
}

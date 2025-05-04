<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TabelIndukUser extends Model
{
    use HasFactory;

    protected $table = 'tabel_induk_user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'nama_lengkap',
        'asal_kantor',
        'kode_cu',
        'email',
        'leveluser',
        'divisi',
        'publish',
        'tgldaftar',
        'tgllogin',
        'statuslogin',
    ];
}

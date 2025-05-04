<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    protected $table = 'kelompok';
    protected $primaryKey = 'Kelompok'; // Karena kolom ini unik dan digunakan sebagai PK
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = ['Kelompok'];
}

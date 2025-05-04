<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TUser extends Model
{
    protected $table = 't_user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;

    protected $fillable = [
        'user_name',
        'password',
        'level'
    ];
}

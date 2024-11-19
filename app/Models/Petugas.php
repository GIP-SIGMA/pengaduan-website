<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\user as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory;

    protected $primarykey = 'id_petugas';

    protected$fillable = [

        'nama_petugas',
        'username',
        'Password',
        'tepl',
        'level',      
    ];

}

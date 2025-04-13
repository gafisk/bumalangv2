<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelola extends Model
{
    use HasFactory;

    protected $table = 'pengelolas';

    protected $fillable = [
        'nama',
        'username',
        'password',
        'role',
    ];
}

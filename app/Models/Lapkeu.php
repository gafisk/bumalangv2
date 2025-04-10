<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapkeu extends Model
{
    use HasFactory;

    protected $table = 'lapkeus';

    protected $fillable = [
        'nama_kabinet',
        'tahun',
        'link'
    ];
}

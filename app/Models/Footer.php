<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'footers';

    protected $fillable = [
        'alamat',
        'no_telp',
        'email',
        'link_youtube',
        'link_instagram',
        'link_linkedin',
        'link_tiktok',
        'no_pengembang',
    ];
}

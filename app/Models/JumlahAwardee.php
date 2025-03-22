<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JumlahAwardee extends Model
{
    use HasFactory;

    protected $table = 'jumlah_awardees';

    protected $fillable = [
        'kategori_awardee',
        'total_awardee'
    ];
}

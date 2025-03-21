<?php

namespace App\Models;

use App\Models\Divisi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'penguruses';

    protected $fillable = [
        'id_divisi',
        'jabatan',
        'nama_pengurus',
        'univ_pengurus',
        'link_instagram',
        'link_linkedin',
        'foto'
    ];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }
}

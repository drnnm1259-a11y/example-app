<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    protected $table = 'perpustakaans';
    protected $fillable = [
        'cover',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit'
    ];
}

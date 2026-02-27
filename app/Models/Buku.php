<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'bukus';
    
   protected $fillable = [
    'name',
    'email',
    'password',
    'judul',
    'penulis',
    'penerbit',
    'tahun_terbit',
    'gambar'
];

protected $hidden = [
    'password',
    'remember_token',
];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';

    protected $fillable = [
        'name',
        'email',
        'password',
        'nama',
        'kelas',
        'jurusan',
        'alamat'
    ];
    protected $hidden = [
    'password',
    'remember_token',
];
}

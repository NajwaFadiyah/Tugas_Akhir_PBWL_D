<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = [
        'nim',
        'nama_mahasiswa',
        'semester',
        'nama_dosen',
        'matakuliah',
    ];
}


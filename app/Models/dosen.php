<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = [
        'nim',
        'nama_dosen',
        'matakuliah',
    ];
}

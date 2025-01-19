<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'nim'; // Gunakan nim sebagai primary key
    public $incrementing = false; // Jika nim bukan auto-increment
    protected $keyType = 'string'; // Jika nim berupa string

    protected $fillable = [
        'nim',
        'nama_dosen',
        'matakuliah'
    ];
}

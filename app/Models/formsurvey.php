<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formsurvey extends Model
{
    use HasFactory;

    protected $table = 'formsurvey';

    protected $fillable =
    [
        'nim',
        'nama_mahasiswa',
        'semester',
        'nama_dosen',
        'matakuliah',
        'survey1',
        'survey2',
        'survey3',
        'survey4',
        'survey5',
        'survey6',
        'survey7'
    ];
}

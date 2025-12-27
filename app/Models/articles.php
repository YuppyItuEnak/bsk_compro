<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'judul_artikel',
        'isi_artikel',
        'gambar_artikel',
        'waktu_publikasi',
    ];

    protected $casts = [
        'waktu_publikasi' => 'datetime',
    ];
}

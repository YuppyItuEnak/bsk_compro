<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class info_perusahaan extends Model
{
    protected $fillable = [
        'alamat_perusahaan',
        'telepon_perusahaan',
        'email_perusahaan',
    ];
}

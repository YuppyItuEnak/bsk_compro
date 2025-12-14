<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info_Perusahaans extends Model
{

    protected $table = 'info_perusahaans';
    protected $fillable = [
        'alamat_perusahaan',
        'telepon_perusahaan',
        'email_perusahaan',
    ];
}

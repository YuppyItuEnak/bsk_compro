<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info_Perusahaans extends Model
{

    protected $table = 'info_perusahaans';
    protected $fillable = [
        'nama_perusahaan',
        'tentang_perusahaan',
        'visi_perusahaan',
        'misi_perusahaan',
        'alamat_perusahaan',
        'telepon_perusahaan',
        'email_perusahaan',
        'insta_link',
        'facebook_link',
        'tiktok_link',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'harga_produk',
        'nama_produk',
        'deskripsi_produk',
        'gambar_produk',
    ];
}

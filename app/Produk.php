<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
    protected $fillable = [
        'nama', 'kota', 'deskripsi', 'gambar', 'user_id',
    ];
}

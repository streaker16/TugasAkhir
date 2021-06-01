<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';
    protected $fillable = [
<<<<<<< HEAD
        'nama', 'deskripsi', 'gambar', 'user_id',
=======
        'nama', 'kota', 'deskripsi', 'gambar', 'user_id',
>>>>>>> 2d98f4752130489725150b0380c0e1486ffe49f4
    ];
}

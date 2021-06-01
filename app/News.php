<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [
        'judul_berita', 'deskripsi', 'gambar', 'user_id',
    ];
}

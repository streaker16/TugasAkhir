<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallerys';
    protected $fillable = [
        'gambar', 'user_id',
    ];
}

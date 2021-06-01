<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documents';
    protected $fillable = [
        'nama_file', 'size_file', 'user_id',
    ];
}

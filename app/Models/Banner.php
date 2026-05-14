<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'tb_hero';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}

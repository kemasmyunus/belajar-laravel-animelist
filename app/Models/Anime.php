<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'judul',
        'genre',
        'sinopsis',
        'tahun_rilis',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist',
        'writer',
        'language',
        'release_date',
        'lyrics',
        'duration',
        'cover_image',
    ];
    // protected $table = 'songs';
}

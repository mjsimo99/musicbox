<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $table = 'songs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'artist',
        'writer',
        'language',
        'release_date',
        'audio_file',
        'duration',
        'cover_image',
    ];
    // protected $table = 'songs';
}

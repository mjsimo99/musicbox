<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SongRating extends Model
{
    use HasFactory;
    protected $table = 'songs_ratings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'song_id',
        'user_id',
        'rating',
    ];
}

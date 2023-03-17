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


    public function likedBy(User $user)
{
    return $this->ratings->where('user_id', $user->id)->where('rating', 1)->count() > 0;
}

public function ratings()
{
    return $this->hasMany(SongRating::class);
}
    // protected $table = 'songs';
}

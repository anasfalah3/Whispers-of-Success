<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Podcast extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['title', 'description', 'file_path', 'cover_path', 'tags', 'status', 'views', 'downloads', 'duration', 'language'];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function playlist_podcast(){
        return $this->belongsToMany(Playlist::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model

/*
{
     protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
     public function favoritings()
    {
        return $this->belongsToMany(User::class, 'micropost_favorite', 'micropost_id', 'favorite_id')->withTimestamps();
    }

    public function favoriters()
    {
        return $this->belongsToMany(User::class, 'micropost_follow', 'favorite_id', 'micropost_id')->withTimestamps();
    }
}
*/

{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

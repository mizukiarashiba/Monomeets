<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mono extends Model
{
     protected $fillable = ['title', 'content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

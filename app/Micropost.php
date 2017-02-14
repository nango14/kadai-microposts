<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookmarkings()
    {
        return $this->belongsToMany(User::class, 'favorites', 'id', 'micropost_id')->withTimestamps();
    }
    
}

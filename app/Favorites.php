<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $fillable = ['user_id', 'micropost_id'];

    public function micropost()
    {
        return $this->belongsTo(Micropost::class);
    }

    
}

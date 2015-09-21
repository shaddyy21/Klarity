<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function users(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function comments(){
        return $this->belongsTo('App\Models\Comment');
    }
    
    public function lblposts(){
        return $this->belongsTo('App\Models\Label_Post');
    }
}

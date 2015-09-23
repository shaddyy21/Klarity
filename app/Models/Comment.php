<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function posts(){
        return $this->belongsTo('App\Models\Post');
    }
}

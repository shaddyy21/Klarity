<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
    
    public function lables(){
        return $this->belongsToMany('App\Models\Label');
    }
    
   protected $fillable = ['title', 'contents', 'photo', 'user_id',];
}

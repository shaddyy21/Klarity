<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Label_Post extends Model
{
    public function posts(){
        return $this->belongsTo('App\Models\Post');
    }
    
    public function lables(){
        return $this->belongsTo('App\Models\Label');

    }
}

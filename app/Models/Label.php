<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    public function lblposts(){
        return $this->belongsTo('App\Models\Label_Post');
    }
}

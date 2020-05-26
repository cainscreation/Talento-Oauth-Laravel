<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organize extends Model
{
    public function user(){
        return $this->belongsToMany(User::class);    
            }
}

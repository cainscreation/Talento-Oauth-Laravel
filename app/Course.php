<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function organize(){
        return $this->belongsToMany(Organize::class);    
            }
            public function topic(){
                return $this->belongsToMany(Topic::class);    
                    }
}

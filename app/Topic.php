<?php

namespace App;
use App\Course;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    public function course(){
        return $this->belongsToMany(Course::class);    
            }
}

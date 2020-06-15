<?php

namespace App;
use App\OrganizeUser;


use Illuminate\Database\Eloquent\Model;

class Organize extends Model
{
    public function user(){
        return $this->belongsToMany(User::class);    
            }
            public function course(){
                return $this->belongsToMany(Course::class);    
                    }
}

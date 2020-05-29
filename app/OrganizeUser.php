<?php

namespace App;
use App\OrganizeUser;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrganizeUser extends Model
{



    protected $table ='organize_user';
// public static function boot(){
//     parent::boot();
//     static::created (function($item){
//         dd($item);
//     });
// }

}

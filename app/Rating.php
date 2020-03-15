<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable =  array(
        'name',
        'ratings',
        'user_id'
    );

    // public function ratings(){
    // 	return $this->hasMany('App\User');
    // }
}

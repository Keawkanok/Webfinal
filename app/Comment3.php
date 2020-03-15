<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment3 extends Model
{
    protected $fillable = array(
        'name',
        'comment',
        'user_id'
    );


    // public function repliesthrees(){
    // 	return $this->hasMany('App\repliesthrees');
    // }
}

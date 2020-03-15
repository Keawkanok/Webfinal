<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment1 extends Model
{
    protected $fillable = array(
        'name',
        'comment',
        'user_id'
    );


    // public function repliesones(){
    // 	return $this->hasMany('App\repliesones');
    // }
   
}

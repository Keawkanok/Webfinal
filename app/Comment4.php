<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment4 extends Model
{
    protected $fillable = array(
        'name',
        'comment',
        'user_id'
    );


    public function repliesfours(){
    	return $this->hasMany('App\repliesfours');
    }
}

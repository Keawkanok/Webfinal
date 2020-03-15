<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repliesthrees extends Model
{
    protected $fillable = [
    	'comment3_id',
    	'name',
    	'reply',
    	'user_id'
	];
}

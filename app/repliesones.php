<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repliesones extends Model
{
    protected $fillable = [
    	'comment_id',
    	'name',
    	'reply',
    	'user_id'
	];
}

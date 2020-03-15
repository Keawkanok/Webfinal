<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment9 extends Model
{
    protected $fillable = array(
        'name',
        'comment',
        'user_id'
    );
}

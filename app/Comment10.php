<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment10 extends Model
{
    protected $fillable = array(
        'name',
        'comment',
        'user_id'
    );
}

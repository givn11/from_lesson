<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title', 'img', 'alias', 'introtext', 'text', 'user_id'
    ];

    /*protected $guarded = [
        'title'
    ];*/
}

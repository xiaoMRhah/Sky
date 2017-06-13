<?php

namespace App\Mode;

use Illuminate\Database\Eloquent\Model;

class shows extends Model
{
    protected $fillable=['theme',
    		'user_name','start_time',
    		'price','count','content_introduction',
    		'link','img','state',
    ];
}

<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Count extends Eloquent
{
    protected $fillable = ['count'];
    protected $timestamp = ['created_at','updated_at'];
}

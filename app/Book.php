<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //disabling laravel's timestamps because there is none in the database
    public $timestamps = false;

    protected $guarded = [];
}

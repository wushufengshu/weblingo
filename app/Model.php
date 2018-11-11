<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    protected $fillable = [
        'name', 'email', 'password', 'address'
    ];
    protected $guarded = [];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes';

    protected $fillable = ['name', 'for','slug','description'];

    public function getRouteKeyName()
	{
	    return 'slug';
	}

    public function questions()
    {
    	return $this->hasMany(Question::class);
    }
}

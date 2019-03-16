<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestsResult extends Model
{
	protected $fillable = ['quiz_id', 'user_id','tests_result'];

    public function answers()
    {
    	return $this->hasMany(TestsResultsAnswer::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function quiz()
    {
    	return $this->belongsTo(Quiz::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use SoftDeletes;

    protected $table = 'quizzes';

    protected $fillable = ['admin_id','name','slug','limit'];

    protected $dates = ['deleted_at'];

    public function getRouteKeyName()
	{
	    return 'slug';
	}

    public function questions()
    {
    	return $this->hasMany(Question::class);
    }

    public function tests_results()
    {
        return $this->hasMany(TestsResult::class);
    }
}

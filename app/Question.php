<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = ['course_id','question', 'score'];

    public function question_option()
    {
    	return $this->hasMany(QuestionOption::class);
    }
}

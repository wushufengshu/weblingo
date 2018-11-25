<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $table = 'questions_options';

    protected $fillable = ['question_id', 'option', 'correct'];

    public function question(){
		return $this->belongsTo(Question::class);
	}
}

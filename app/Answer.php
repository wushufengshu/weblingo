<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    protected $fillable = ['question_id', 'option', 'correct'];

    public function question(){
		return $this->belongsTo(Question::class);
	}
}

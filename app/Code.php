<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'codes';

    protected $fillable = [
    	'course_id','lesson_id', 'heading','heading_body', 'html_code', 'css_code', 'javascript_code'
    ];


    public function course(){
		return $this->belongsTo(Course::class);
	}

	public function lesson(){
		return $this->belongsTo(Lesson::class);
	}
}

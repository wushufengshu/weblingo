<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'codes';

    protected $fillable = [
    	'course_id','content_id', 'heading', 'code'
    ];


    public function course(){
		return $this->belongsTo(Course::class);
	}

	public function content(){
		return $this->belongsTo(Content::class);
	}
}

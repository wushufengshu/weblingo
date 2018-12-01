<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = 'lessons';

    protected $fillable = [
    	'admin_id', 'course_id', 'title', 'slug' ,'body'
    ];

    public function getRouteKeyName()
	{
	    return 'slug';
	}

    public function course(){
		return $this->belongsTo(Course::class);
	}

    public function code(){
        return $this->hasMany(Code::class);
    }
}

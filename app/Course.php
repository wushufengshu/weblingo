<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $table = 'courses';
	
	protected $fillable = [
        'admin_id', 'name','slug', 'description','image'
    ];
    public function admin(){
		return $this->belongsTo(Admin::class);
	}

	public function lesson(){
		return $this->hasMany(Lesson::class);
	}

	public function getRouteKeyName()
	{
	    return 'slug';
	}

	public function course_id()
	{
	    return $this->id;
	}

	public static function archives()
	{
		return static::selectRaw('id,name,slug')
					->groupBy('id','name','slug')
					->orderBy('id', 'asc')
					->get();
	}

	public static function allCourse()
	{
		return static::all();
	}

	public function addContent($course_id,$title,$slug,$body)
    {
        // $this->categories()->create(compact('name','description'));
    	
        Content::create([
            'admin_id' => auth()->id(),
            'course_id' => $course_id,
            'title' => $title,
            'slug' => $slug,
            'body' => $body,
        ]);
        
    }
}
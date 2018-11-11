<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $table = 'courses';
	
	protected $fillable = [
        'admin_id', 'name','slug', 'description'
    ];
    public function admin(){
		return $this->belongsTo(Admin::class);
	}

	public function content(){
		return $this->hasMany(Content::class);
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
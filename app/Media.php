<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comments;

class Media extends Model
{
	protected $table = 'media';
	
    protected $fillable = ['admin_id','video_id','title', 'video','ext','mime_type','description'];

    public function video()
    {
    	return $this->belongsTo(Video::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comments::class);
    }

    // public function addComment($body)
    // {
    //     $this->comments()->create(compact('body'));
    // }
}

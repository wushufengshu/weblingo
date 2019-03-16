<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
	protected $table = 'comments';
	
    protected $fillable = [
    	'media_id', 'body','user_id'
    ];
    public function media()
    {
    	return $this->belongsTo(Media::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}

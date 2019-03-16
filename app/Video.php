<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	protected $table = 'videos';
	
    protected $fillable = ['admin_id','title','slug', 'description'];

    public function getRouteKeyName()
  	{
  	    return 'slug';
  	}

   	public function media()
   	{
   		return $this->hasMany(Media::class);
   	}

    public function admin()
    {
      return $this->belongsTo(Admin::class);
    }
}

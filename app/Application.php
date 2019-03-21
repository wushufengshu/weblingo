<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Career;

class Application extends Model
{
    protected $table = 'applications';

    protected $fillable = ['job_id','first_name','last_name','contact_number','email','short_description', 'name', 'ext', 'mime'];

    public function career()
    {
    	return $this->belongsTo(Career::class);
    }
}

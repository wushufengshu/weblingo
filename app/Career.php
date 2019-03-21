<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Application;

class Career extends Model
{
	protected $table = 'careers';

    protected $fillable = [
    	'job','job_description','employment_type', 'duties','requirements'
    ];

    public function application()
    {
    	return $this->hasMany(Application::class);
    }
}

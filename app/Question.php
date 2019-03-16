<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;

    protected $table = 'questions';

    protected $fillable = ['course_id','quiz_id','body'];

    protected $dates = ['deleted_at'];

    public function quiz()
    {
    	return $this->belongsTo(Quiz::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}

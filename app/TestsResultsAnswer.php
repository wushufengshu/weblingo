<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestsResultsAnswer extends Model
{
    protected $fillable = ['test_result_id', 'question_id','answer_id','correct'];
}

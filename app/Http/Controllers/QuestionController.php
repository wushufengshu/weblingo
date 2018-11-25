<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionOption;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        $questions = Question::paginate(10);
        return view('admin.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
        	'question' => 'required',
        	'score' => 'required'
        ]);

        $question = Question::create([
            'course_id'=>1,
            'question' => request('question'),
            'score' => request('score')
        ]);

        foreach (range(1,4 ) as $range ) {
            $option = request('option_' . $range);
            if($option != ''){
                QuestionOption::create([
                    'question_id' => $question->id,
                    'option' => $option,
                    'correct' => $request->input('correct_' . $range)
                ]);
            }
        }

        session()->flash('message', 'Question is created.');

        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function show(Assessment $assessment)
    {
        return view('admin.question.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assessment $assessment)
    {
        return view('admin.question.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assessment $assessment)
    {
        //
    }
}

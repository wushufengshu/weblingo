<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Course;
use App\Question;
use App\QuestionOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class QuizController extends Controller
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
    public function index(Quiz $quiz)
    {
        $quizzes = Quiz::all();
        $courses = Course::all();
        $total_questions = count($quiz->questions);
        return view('admin.quiz.index', compact('quizzes','total_questions', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $courses = Course::all();

        $this->validate(request(), [
            'quiz_name' => 'required|string|max:30',
            'quiz_for' => 'required|string|max:30',
            'slug' => 'required|unique:quizzes|string',
            'description' => 'required'
        ]);

        $quiz_name = request('quiz_name');
        $slug = request('slug');
        $quiz_for = request('quiz_for');
        $number_of_questions = (int)request('number_of_questions');
        $description = request('description');


        return view('admin.quiz.create', compact('courses','quiz_name','quiz_for','slug','number_of_questions','description'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Input::get();
        $quiz = Quiz::create([
            'name' => Input::get('quiz_name'),
            'for' => Input::get('quiz_for'),
            'slug' => Input::get('slug'),
            'description' => Input::get('description'),
        ]);
        
        // foreach (range(1,request('number_of_questions')) as $question) {
            // foreach (Input::get('question') as $question => $value) {
            //      $question;
            // }
            // foreach (Input::get('score') as $score) {
            //      $score;
            // }
            // $questions = Question::create([
            //     'course_id' => 1,
            //     'quiz_id' => $quiz->id,
            //     'question' =>$value,
            //     'score' => $score
            // ]);

            $question = new Question;
            $question->course_id = 1;
            $question->quiz_id = 1;
            $question->question = $request->get('question');
            $question->score = $request->get('score');
            $question->save();
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        // $quiz = Quiz::findOrFail($id);
        return view('admin.quiz.show', compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        return view('admin.quiz.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }

    public function quiz_details()
    {
        $courses = Course::all();

        return view('admin.quiz.quiz_details', compact('courses'));
    }

}

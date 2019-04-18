<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Course;
use App\Question;
use App\QuestionOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Reports;


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
        $quizzes = $quiz->all();
        // $courses = Course::all();
        // $tests = $quiz->tests_results->first();
        // $quiz_average = $quiz->where()
        // $average = $tests->tests_result;
        // $total_questions = count($quiz->questions);
        return view('admin.quiz.index', compact('quizzes'));
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
        $number_of_option = 2;

        return view('admin.quiz.create', compact('courses','quiz_name','quiz_for','slug','number_of_questions','description','number_of_option'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'quiz_name' => 'required|string|max:30',
            'slug' => 'required|unique:quizzes|string',
            'limit' => 'required|integer'
        ]);

        $quiz = Quiz::create([
            'admin_id' => auth()->id(),
            'name' => request('quiz_name'),
            'slug' => request('slug'),
            'limit' => request('limit')
        ]);
        $quiz_slug = $quiz->slug;
        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' created a quiz [ ' . $quiz->name. ' ] '
        ]);
        return redirect()->route('quiz.show', compact('quiz_slug'));
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
    public function edit($id)
    {
        $quiz = Quiz::findOrFail($id);
        return view('admin.quiz.edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
        $this->validate(request(), [
            'name' => 'required|string|max:30',
            'slug' => 'required|string',
            'limit' => 'required|integer'
        ]);

        $quiz->name = request('name');
        $quiz->slug = request('slug');
        $quiz->limit = request('limit');

        $quiz->save();
        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' updated a quiz [ ' . $quiz->name . ' ]'
        ]);
        session()->flash('message', 'The quiz is updated successfully.');
        
        return redirect()->route('quiz.show', $quiz->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quiz = Quiz::findOrFail($id)->delete();
        // return redirect()->back();
        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' deleted a quiz [ ' . $quiz->name . ' ]'
        ]);
        session()->flash('message', 'The quiz is deleted successfully.');
        return redirect()->back();
    }

    public function quiz_details()
    {
        $courses = Course::all();

        return view('admin.quiz.quiz_details', compact('courses'));
    }

    //     $quiz = Quiz::where('slug', $quiz_slug)->firstOrFail();
    //     $answers = [];
    //     $score = 0;
    //     foreach ($request->get('answers') as $question_id => $answer_id) {
    //         $correct = Answer::where('question_id', $question_id)
    //         ->where('id', $answer_id)
    //         ->where('correct', 1)->count() > 0;

    //         $answers[] = [
    //             'question_id' => $question_id,
    //             'answer_id' => $answer_id,
    //             'correct' => $correct
    //         ];
    //         if($correct){
    //             $score += 1;
    //         }
    //     }
    //     $test_result = TestsResult::create([
    //         'quiz_id' => $quiz->id,
    //         'user_id' => auth()->id(),
    //         'tests_result' => $score
    //     ]);
    //     $test_result->answers()->createMany($answers);

    //     return view('users.quiz.result', compact('quiz_slug', 'score', 'quiz'));

    // public function createQuestions(Quiz $quiz)
    // {
    //     // $quiz_name = request('quiz_name');
    //     // $quiz = Quiz::where('name', $quiz_name)->firstOrFail();
    //     $number_of_questions = 0;

    //     return view('admin.questions.create', compact('quiz','number_of_questions'));
    // }

    // public function add_questions(Quiz $quiz, Request $request)
    // {
    //     $number_of_questions = request('number_of_questions');
    //     return view('admin.questions.create', compact('quiz', 'number_of_questions'));
    // }
    // public function storeQuestions(Request $request)
    // {
    //     dd($request->get('questions'));
    //     // $questions = [];
    //     // foreach ($request->get('questions') as $key => $value) {
    //     //     # code...
    //     // }
    // }

}

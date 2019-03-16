<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use App\Quiz;
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
    public function index(Question $question, Answer $question_options)
    {
        $questions = Question::paginate(10);

        $correct_answer = $question_options->where('question_id', $question->id)->get();
        
        return view('admin.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    




    public function create()
    {
        $number_of_option = 2;
        return view('admin.questions.create', compact('number_of_option'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {
        // dd($request->input('correct'));
        $questions = [];
        $answers =[];
        $quiz = Quiz::where('name', request('quiz_name'))->firstOrFail();
        $quiz_slug = $quiz->slug;
        foreach ($request->get('questions') as $key => $value) {
            $questions = $quiz->questions()->create([
                'course_id' => 1,
                'quiz_id' => $quiz->id ,
                'body' => $value
            ]);
        // dd($request->get('answers') );

            foreach ($request->get('answers') as $n => $answer_value  ) {
                $corrects = $request->get('correct');
                $answers = Answer::create([
                    'question_id' => $questions->id,
                    'answer' => $answer_value,
                    'correct' => $corrects[$n]
                ]);
                
            }
            // $quiz->questions()->answers()->createMany($answers);
            
            
            // dd($request->input('correct_' . 1));
            // foreach (as $key => $value) {
            //     $correct = $request->get('correct_'. $key);
            //     dd($correct);
            // }
            // $answer = $questions->answers()->createMany($answers);
        // dd($request->get('option_'. 1) );
            // foreach (range(1,4 ) as $range ) {
            //     // if(request('option_'.$range) != ''){
            //     //     $answers[] =$questions->answers()->create([
            //     //         // 'question_id' => $questions->id,
            //     //         'answer' => $request->get('option_'.  $range),
            //     //         'correct' => request('correct_' . $range)
            //     //     ]);
            //     // }
            //     $answer = new Answer;
            //     $answer->question_id = $questions->id;
            //     $answer->answer = $request->get('option_'. $range);
            //     $answer->correct = $request->get('correct_' .$key.'_'. $range);
            //     $answer->save();
            // }


        }
        
        
        // foreach ($answers as $answer) {
        //     $questions->answers()->createMany($answer);  
        // }

        return redirect()->back()->with('message', 'The question is successfully addedd to ' . $quiz->name);
        // $qs = $quiz->questions()->createMany($questions);
        // foreach ($request->get('answers') as $answer_key => $answer_value) {
            
        //     $answers[] = [
        //         'answer' => $answer_key,
        //         'correct' => $request->input('correct')
        //     ];dd($answers);
        // }        
        // $quiz->questions()->answers()->createMany($answers);
            
        // $qs->answers()->createMany($answers);
        // $this->validate(request(),[
        // 	'question' => 'required',
        // 	'score' => 'required'
        // ]);

        // $question = Question::create([
        //     'course_id'=>1,
        //     'question' => request('question'),
        //     'score' => request('score')
        // ]);

        // foreach (range(1,4 ) as $range ) {
        //     $option = request('option_' . $range);
        //     if($option != ''){
        //         Answer::create([
        //             'question_id' => $question->id,
        //             'option' => $option,
        //             'correct' => $request->input('correct_' . $range)
        //         ]);
        //     }
        // }

        // session()->flash('message', 'Question is created.');

        // return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('admin.question.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('admin.question.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
    public function createQuestions(Quiz $quiz)
    {
        // $quiz_name = request('quiz_name');
        // $quiz = Quiz::where('name', $quiz_name)->firstOrFail();
        $number_of_questions = 0;
        $number_of_option =4;

        return view('admin.questions.create', compact('quiz','number_of_questions','number_of_option'));
    }

    public function add_questions(Quiz $quiz, Request $request)
    {
        $number_of_questions = request('number_of_questions');
        return view('admin.questions.create', compact('quiz', 'number_of_questions'));
    }
    public function add_option(Quiz $quiz, Request $request)
    {
        $number_of_option = request('number_of_option');
        return view('admin.questions.create', compact('quiz', 'number_of_option'));
    }
    // public function storeQuestions(Request $request)
    // {
    //     dd($request->get('questions'));
    //     // $questions = [];
    //     // foreach ($request->get('questions') as $key => $value) {
    //     //     # code...
    //     // }
    // }
}

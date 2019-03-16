<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use \Carbon\Carbon;
use App\Code;
use App\Course;
use App\Lesson;
use App\Quiz;
use App\Question;
use App\Answer;
use App\TestsResult;
use App\Video;
use App\Media;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'course', 'aboutus', 'terms', 'acknowledgement', 'careers');
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Course $course,Quiz $quiz, Lesson $lesson, Video $video)
    {
        $courses = $course->all();
        $quizzes = $quiz->all();
        $videos = $video->all();
        return view('users.home.home', compact('courses','lesson','quizzes', 'videos'));
    }

    public function course(Request $request, Course $course, Lesson $lesson){
        $quizzes = Quiz::all();
        return view('users.course.index', compact('lesson', 'course', 'quizzes'));
    }

    public function quiz(Request $request, Quiz $quiz, Question $question, Answer $answer, Course $course){
        $quiz = Quiz::find($quiz->id);
        $quizzes = Quiz::all();
        $questions = $question->where('quiz_id', $quiz->id)->get();
        foreach ($questions as $question) {
            $answers = $answer->where('question_id', $question->id)->first(); 
        }
       
        return view('users.quiz.index', compact('lesson', 'course', 'quiz', 'questions','answers', 'quizzes'));
    }

    public function quiz_result($quiz_slug, Request $request, Question $question, Answer $answer)
    {
        $quiz = Quiz::where('slug', $quiz_slug)->firstOrFail();
        $answers = [];
        $score = 0;
        foreach ($request->get('answers') as $question_id => $answer_id) {
            $correct = Answer::where('question_id', $question_id)
            ->where('id', $answer_id)
            ->where('correct', 1)->count() > 0;

            $answers[] = [
                'question_id' => $question_id,
                'answer_id' => $answer_id,
                'correct' => $correct
            ];
            if($correct){
                $score += 1;
            }
        }
        $test_result = TestsResult::create([
            'quiz_id' => $quiz->id,
            'user_id' => auth()->id(),
            'tests_result' => $score
        ]);
        $for_review = $test_result->answers()->createMany($answers);

        return view('users.quiz.result', compact('quiz_slug', 'score', 'quiz', 'test_result', 'for_review', 'question', 'answer'));
    }
    public function video($slug)
    {
        $video = Video::where('slug',$slug)->first();
        $medium = $video->media->take(1);
        $sidebar = $video->media;
        return view('users.video.index', compact('video', 'medium','sidebar'));
    }

    public function media($slug, $id)
    {
        $video = Video::where('slug', $slug)->first();
        $medium = Media::where('id', $id)->paginate(1);
        return view('users.video.show', compact('video', 'medium'));
    }

    public function code_preview($course,$lesson, $code_preview)
    {
        $content = Code::where('id', $code_preview)->first();
        return view('users.course.code_preview', compact('content'));
    }

    public function aboutus()
    {
        return view('users.home.aboutus');
    }

    public function terms()
    {
        return view('users.home.termsandcondition');
    }

    public function acknowledgement()
    {
        return view('users.home.acknowledgement');
    }

    public function careers()
    {
        return view('users.home.careers');
    }

}

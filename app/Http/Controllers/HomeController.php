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
use App\Application;
use App\Career;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'course', 'aboutus', 'terms', 'acknowledgement', 'careers','showCareer','upload');
        // $this->middleware('guest')->only('index', 'course', 'aboutus', 'terms', 'acknowledgement', 'careers','showCareer','upload');
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

    public function careers(Application $application)
    {
        // $app = Application::find(1);
        $careers = Career::all();
        return view('users.home.careers', compact('app','careers'));
    }
    public function showCareer($id)
    {
        $career = Career::findOrFail($id);
        return view('users.home.showCareer', compact('career'));
    } 
    public function upload(Application $application, Request $request)
    {
        // if(request()->hasFile('pdf')){
        //     $file_name = $request->file('pdf')->getClientOriginalName();
        //     $pdf_name = pathinfo($file_name, PATHINFO_FILENAME);
        //     $pdf_extension = $request->file('pdf')->getClientOriginalExtension();
        //     $pdf_name_to_store = $pdf_name . '_' .time() . '.'.$pdf_extension;
        //     $path = $request->file('pdf')->storeAs('public/pdf', $pdf_name_to_store);
        // }
        $file = $request->file('pdf');
        $full_name = $file->getClientOriginalName();
        $ext = $file->extension();
        $name = pathinfo($full_name, PATHINFO_FILENAME);
        $file->storeAs('public/pdf' ,$name.'.'.$ext );
        // $fileMimeType = $request->file('filename')->getMimeType();
        $fileMimeType = $file->getMimeType();

        Application::create([
            'job_id' => request('job_id'),
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'contact_number' => request('contact_number'),
            'email' => request('email'),
            'short_description' => request('short_description'),
            'name' => $name,
            'ext' => $ext,
            'mime' => $fileMimeType
        ]);

        return redirect()->back();
        // $name = $_FILES['fpdf']['name'];
        // $mime = $_FILES['fpdf']['type'];
        // $content = base64_encode(file_get_contents($_FILES['fpdf']['tmp_name']));

        // $application->name = $name;
        // $application->mime = $mime;
        // $application->data = $content;

        // $application->save();

        // return redirect()->back();
    }
    public function showPDF($id)
    {
        $pdf = Upload::find($id);

        $content = base64_decode($pdf->content);
        return response($content)->header('Content-Type', $pdf->mime); // thanks to Devon
    }

}

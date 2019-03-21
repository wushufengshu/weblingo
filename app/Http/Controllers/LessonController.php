<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Course;
use App\Admin;
use App\Code;
use Illuminate\Http\Request;

class LessonController extends Controller
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
    public function index(Lesson $lesson, Course $course, Admin $admin)
    {   
        $a = $admin->where('id', auth()->id())->first();

        // $this->authorize('view', $course);
        $course_slug = $course->slug;
        $course_id = $course->id;

        $lessons = Lesson::where('course_id', $course_id)->get();

        return view('admin.course.lesson.index',compact('a', 'course', 'course_slug','lessons','course_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('view', $course);
        return view('admin.course.lesson.create');
    }

    public function createLesson(Course $course)
    {
        // $this->authorize('view', $course);
        $course_id = $course->id;
        $snippet_count = 0;

        return view('admin.course.lesson.create', compact('course', 'course_id','snippet_count'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course,Lesson $lesson)
    {
        
        // $this->authorize('view', $course);
        $course_slug = request('course_slug');
        $this->validate(request(), [
            'title' => 'required|unique:lessons|min:3|max:25',
            'slug' => 'required|alpha_dash|unique:courses|min:3|max:25',
            'body' => 'required|max:1000'
        ]);
        
        $lesson = Lesson::create([
            'admin_id' => auth()->id(),
            'course_id' => request('course_id'),
            'title' => request('title'),
            'slug' => request('slug'),
            'body' => request('body'),
        ]);
        // 
        $snippet_count = (int)request('snippet_count');
        foreach (range(1,$snippet_count) as $i) {
            if(request()->has(['heading_' . $i,'heading_body_' . $i,'html_code_' . $i,'css_code_' . $i,'javascript_code_' . $i])){
                // $this->validate(request(), [
                //     'heading_'. $i => 'required|max:50',
                // // ]);
                // dd(request('html_code_' . $i));
                $heading = request('heading_' . $i);
                $heading_body = request('heading_body_' . $i);
                
                Code::create([
                    'course_id' => request('course_id'),
                    'lesson_id' => $lesson->id,
                    'heading' => $heading,
                    'heading_body' => $heading_body,
                    'html_code' => request('html_code_' . $i),
                    'css_code' => request('css_code_' . $i),
                    'javascript_code' => request('javascript_code_' . $i)
                ]);  
            }            
        }
      
        session()->flash('message', 'Lesson added');

        return redirect()->route('course.show', compact('course_slug'));
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function showLesson(Course $course, Lesson $lesson, Code $code)
    {
        // $this->authorize('view', $course);
        $codes = $code->where('lesson_id', $lesson->id)->get();
        $course_id = $course->id;
        $snippet_count = 0;
        return view('admin.course.lesson.show', compact('course','lesson','codes','course_id','snippet_count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        $course = Course::where('id', $lesson->course_id)->first();

        return view('admin.course.lesson.edit', compact('lesson','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $lesson = Lesson::findOrFail($id);
        $course = Course::where('id', $lesson->course_id)->first();
        $course_slug = $course->slug;
        $course_id = $course->id;

        $lesson->title = request('title');
        $lesson->slug = request('slug');
        $lesson->save();

        session()->flash('message', 'Lesson updated');

        return redirect()->route('course.show', compact('course','lesson', 'course_slug','course_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = Lesson::findOrFail($id)->delete();

        session()->flash('message', 'Lesson deleted');
        return redirect()->back();
    }

    public function add_snippet(Course $course,Request $request){


        $course_id = $course->id;
        $snippet_count = request('add_snippet');
        return view('admin.course.lesson.create', compact('course', 'course_id', 'snippet_count'));
    }
}
// <?php

// namespace App\Http\Controllers;

// use App\Lesson;
// use App\Course;
// use App\Admin;
// use App\Code;
// use Illuminate\Http\Request;

// class LessonController extends Controller
// {
//     /**
//      * Create a new controller instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         $this->middleware('auth:admin');
//     }
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index(Lesson $lesson, Course $course, Admin $admin)
//     {   
//         $a = $admin->where('id', auth()->id())->first();

        // $this->authorize('view', $course);
//         $course_slug = $course->slug;
//         $course_id = $course->id;

//         $lessons = Lesson::where('course_id', $course_id)->get();

//         return view('admin.course.lesson.index',compact('a', 'course', 'course_slug','lessons','course_id'));
//     }
//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $this->authorize('view', $course);
//         return view('admin.course.lesson.create');
//     }

//     public function createLesson(Course $course)
//     {
//         $this->authorize('view', $course);
//         $course_id = $course->id;
//         $snippet_count = 0;

//         return view('admin.course.lesson.create', compact('course', 'course_id','snippet_count'));
//     }


//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request, Course $course,Lesson $lesson)
//     {
        
//         $this->authorize('view', $course);
//         $course_slug = request('course_slug');
//         $this->validate(request(), [
//             'title' => 'required|unique:lessonsLessons|min:3|max:25',
//             'slug' => 'required|alpha_dash|unique:courses|min:3|max:25',
//             'body' => 'required|max:255'
//         ]);
        
//         $lesson = Lesson::create([
//             'admin_id' => auth()->id(),
//             'course_id' => request('course_id'),
//             'title' => request('title'),
//             'slug' => request('slug'),
//             'body' => request('body'),
//         ]);

//         // if(request()->has(['heading_1','html-code_1','css-code_1','javascript-code_1'])){
//         //     $this->validate(request(), [
//         //         'heading_1' => 'required|max:50',
//         //     ]);
//         //     Code::create([
//         //         'course_id' => request('course_id'),
//         //         'content_id' => $content->id,
//         //         'heading' => request('heading_1'),
//         //         'html-code' => request('html-code_1'),
//         //         'css-code' => request('css-code_1'),
//         //         'javascript-code' => request('javascript-code_1')
//         //     ]);
//         // }
//         $snippet_count = request('snippet_count');
//         foreach (range(1,$snippet_count) as $i) {
//             if(request()->has(['heading_' . $i,'html-code_' . $i,'css-code_' . $i,'javascript-code_' . $i])){

                
//                 $this->validate(request(), [
//                     'heading_'. $i => 'required|max:50',
//                 ]);
            
//                 Code::create([
//                     'course_id' => request('course_id'),
//                     'lesson_id' => $lesson->id,
//                     'heading' => request('heading_' . $i),
//                     'html-code' => request('html-code_' . $i),
//                     'css-code' => request('css-code_' . $i),
//                     'javascript-code' => request('javascript-code_' . $i)
//                 ]);  

//             }
            
//         }

//         session()->flash('message', 'Lesson added');

//         return redirect()->route('course.show', compact('course_slug'));
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Lesson  $lesson
//      * @return \Illuminate\Http\Response
//      */
//     public function showLesson(Course $course, Content $content, Code $code)
//     {
//         $this->authorize('view', $course);
//         $codes = $code->where('content_id', $content->id)->get();
//         return view('admin.course.content.show', compact('course','content','codes'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Content  $content
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Lesson $lesson)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Content  $content
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Lesson $lesson)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Content  $content
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Lesson $lesson)
//     {
//         //
//     }

//     public function add_snippet(Course $course,Request $request){


//         $course_id = $course->id;
//         $snippet_count = request('add_snippet');
//         return view('admin.course.lesson.create', compact('course', 'course_id', 'snippet_count'));
//     }
// }

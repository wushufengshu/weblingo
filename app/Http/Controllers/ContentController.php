<?php

namespace App\Http\Controllers;

use App\Content;
use App\Course;
use App\Admin;
use App\Code;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Content $content, Course $course)
    // {
    //     $contents = Content::get();
    //     return view('admin.course.content.index',compact('contents', 'course'));
    // }
    public function index(Content $content, Course $course, Admin $admin)
    {   
        $a = $admin->where('id', auth()->id())->first();

        $this->authorize('view', $course);
        $course_slug = $course->slug;
        $course_id = $course->id;
    
        // $contents->selectRaw('title')
        //         ->where('course_id', $course_id)
        //         ->get();

        $contents = Content::where('course_id', $course_id)->get();

        return view('admin.course.content.index',compact('a', 'course', 'course_slug','contents','course_id'));
    }
    /**
     * Show the form for creating a new resource.
     gawin yung sa Content get, ilalagay sa model.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('view', $course);
        return view('admin.course.content.create');
    }

    public function createContent(Course $course)
    {
        $this->authorize('view', $course);
        $course_id = $course->id;
        $snippet_count = 0;

        return view('admin.course.content.create', compact('course', 'course_id','snippet_count'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course,Content $content)
    {
        
        $this->authorize('view', $course);
        $course_slug = request('course_slug');
        $this->validate(request(), [
            'title' => 'required|unique:contents|min:3|max:25',
            'slug' => 'required|alpha_dash|unique:courses|min:3|max:25',
            'body' => 'required|max:255'
        ]);
        
       

        // $content = $course->addContent(request('course_id'), , , );
        $content = Content::create([
            'admin_id' => auth()->id(),
            'course_id' => request('course_id'),
            'title' => request('title'),
            'slug' => request('slug'),
            'body' => request('body'),
        ]);

        // if(request()->has(['heading_1','html-code_1','css-code_1','javascript-code_1'])){
        //     $this->validate(request(), [
        //         'heading_1' => 'required|max:50',
        //     ]);
        //     Code::create([
        //         'course_id' => request('course_id'),
        //         'content_id' => $content->id,
        //         'heading' => request('heading_1'),
        //         'html-code' => request('html-code_1'),
        //         'css-code' => request('css-code_1'),
        //         'javascript-code' => request('javascript-code_1')
        //     ]);
        // }
        $snippet_count = request('snippet_count');
        foreach (range(1,$snippet_count) as $i) {
            if(request()->has(['heading_' . $i,'html-code_' . $i,'css-code_' . $i,'javascript-code_' . $i])){

                
                $this->validate(request(), [
                    'heading_'. $i => 'required|max:50',
                ]);
            
                Code::create([
                    'course_id' => request('course_id'),
                    'content_id' => $content->id,
                    'heading' => request('heading_' . $i),
                    'html-code' => request('html-code_' . $i),
                    'css-code' => request('css-code_' . $i),
                    'javascript-code' => request('javascript-code_' . $i)
                ]);  

            }
            
        }

        session()->flash('message', 'Content added');

        return redirect()->route('course.show', compact('course_slug'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function showContent(Course $course, Content $content, Code $code)
    {
        $this->authorize('view', $course);
        $codes = $code->where('content_id', $content->id)->get();
        return view('admin.course.content.show', compact('course','content','codes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        //
    }

    public function add_snippet(Course $course,Request $request){


        $course_id = $course->id;
        $snippet_count = request('add_snippet');
        return view('admin.course.content.create', compact('course', 'course_id', 'snippet_count'));
    }
}

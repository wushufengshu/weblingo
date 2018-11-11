<?php

namespace App\Http\Controllers;

use App\Content;
use App\Course;
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
    public function index(Content $content, Course $course)
    {   
        $course_slug = $course->slug;
        $course_id = $course->id;
    
        // $contents->selectRaw('title')
        //         ->where('course_id', $course_id)
        //         ->get();

        $contents = Content::where('course_id', $course_id)->get();

        return view('admin.course.content.index',compact('course', 'course_slug','contents','course_id'));
    }
    /**
     * Show the form for creating a new resource.
     gawin yung sa Content get, ilalagay sa model.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course.content.create');
    }

    public function createContent(Course $course)
    {
        $course_id = $course->id;

        return view('admin.course.content.create', compact('course', 'course_id'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course,Content $content)
    {
        $course_slug = request('course_slug');
        $this->validate(request(), [
            'title' => 'required|unique:contents|min:3|max:25',
            'slug' => 'required|alpha_dash|unique:courses|min:3|max:25',
            'body' => 'required|max:255'
        ]);
       

        $course->addContent(request('course_id'), request('title'), request('slug'), request('body'));

        session()->flash('message', 'Content added');

        return redirect()->route('course.show', compact('course_slug'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function showContent(Course $course, Content $content)
    {
        return view('admin.course.content.show', compact('course','content'));
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;
use App\Code;
use App\Reports;

class CodeController extends Controller
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course, Lesson $lesson)
    {
        $code_count = 1;
        return view('admin.course.lesson.code.create', compact('course','lesson','code_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Code::create([
            'course_id' => request('course_id'),
            'lesson_id' => request('lesson_id'),
            'heading' => request('heading'),
            'heading_body' => request('heading_body'),
            'html_code' => request('html_code'),
            'css_code' => request('css_code'),
            'javascript_code' => request('javascript_code')
        ]);  
        $course_slug = request('course_slug');
        $lesson_slug = request('lesson_slug');
        session()->flash('message', 'Lesson added');

        return redirect()->route('lesson.show', compact('course_slug', 'lesson_slug'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Course;
use App\Lesson;
use App\Reports;

class CourseController extends Controller
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
        
        return view('admin.course.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Course $course, Admin $admin){


        $this->validate(request(), [
            'name' => 'required|unique:courses|min:3|max:25',
            'slug' => 'required|alpha_dash|unique:courses|min:3|max:25',
            'description' => 'required|max:255',
            'course_image' => 'image|nullable|max:1999'
        ]);
        $course_name = request('name');
        if(request()->hasFile('course_image')){
            $file_name = $request->file('course_image')->getClientOriginalName();
            $image_name = pathinfo($file_name, PATHINFO_FILENAME);
            $image_extension = $request->file('course_image')->getClientOriginalExtension();
            $image_name_to_store = $image_name . '_' .time() . '.'.$image_extension;
            $path = $request->file('course_image')->storeAs('public/images', $image_name_to_store);
        }

        $admin->addCourse(request('name'),request('slug'), request('description'), $image_name_to_store );

        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' created a course ' . $course_name
        ]);
            
        session()->flash('message', 'Course added');

        return redirect()->route('admin.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {   
        $course_slug = $course->slug;
        $lessons = Lesson::get();
        return view('admin.course.lesson.index',compact('course', 'course_slug','lessons'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.course.edit');
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

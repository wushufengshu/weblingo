<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Course;
use App\Lesson;
use App\Reports;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

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
        $courses = Course::orderBy('id', 'asc')->paginate(5);
        return view('admin.course.index',compact('courses'));
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
        $course_slug = request('slug');
        if(request()->hasFile('course_image')){
            $file_name = $request->file('course_image')->getClientOriginalName();
            $image_name = pathinfo($file_name, PATHINFO_FILENAME);
            $image_extension = $request->file('course_image')->getClientOriginalExtension();
            $image_name_to_store = $image_name . '_' .time() . '.'.$image_extension;
            $path = $request->file('course_image')->storeAs('public/images', $image_name_to_store);
        }

        $image_name_to_store = null;

        $admin->addCourse(request('name'),request('slug'), request('description'), $image_name_to_store );

        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' created a course [' . $course_name .' ]'
        ]);
            
        session()->flash('message', 'Course added');

        return redirect()->route('course.show', compact('course_slug','admin'));
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
        $lessons = Lesson::get()->paginate(5);
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
        $course = Course::findOrFail($id);
        return view('admin.course.edit', compact('course'));
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
        $course = Course::findOrFail($id);

        $course->name = request('name');
        $course->slug = request('slug');
        $course->description = request('description');  
        $image_name_to_store = null;

        if(request()->hasFile('course_image')){
            $file_name = $request->file('course_image')->getClientOriginalName();
            $image_name = pathinfo($file_name, PATHINFO_FILENAME);
            $image_extension = $request->file('course_image')->getClientOriginalExtension();
            $image_name_to_store = $image_name . '_' .time() . '.'.$image_extension;
            $path = $request->file('course_image')->storeAs('public/images', $image_name_to_store);
        }
        $course->image = $image_name_to_store;

        $course->save();
        $course_slug = $course->slug;

        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' updated a course [ ' . $course->name . ' ]'
        ]);

        session()->flash('message', 'The user is updated successfully.');

        
        // return view('admin.course.lesson.index', compact('course','course_slug'));
        return redirect()->route('course.show', compact('course_slug','course'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        // return redirect()->back();
        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' deleted a course [ ' . $course->name . ' ]'
        ]);

        $course->delete();
        session()->flash('message', 'The course is deleted successfully.');
        return redirect()->route('course.index');
    }

}

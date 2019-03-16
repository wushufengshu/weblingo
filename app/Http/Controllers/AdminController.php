<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use \Auth;
use App\Video;
use App\Quiz;
use App\TestsResult;

class AdminController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $courses)
    {
        $videos = Video::all();
        $quizzess = Quiz::all();
        $tests_results = TestsResult::all();
        return view('admin.dashboard.index', compact('courses','tests_results', 'videos','quizzess'));
    }
    // public function dashboard()
    // {
    //     return view('admin.dashboard');
    // }
    public function profile()
    {   
        $auth = Auth::user()->email;

        return view('admin.profile', compact('auth'));
    }
    public function userAdmin()
    {
        return view('admin.user-admin');
    }

    public function create()
    {
        return view('admin.crud.create');
    }
}

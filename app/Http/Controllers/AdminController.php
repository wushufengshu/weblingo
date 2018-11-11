<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use \Auth;
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
        
        return view('admin.dashboard', compact('courses'));
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

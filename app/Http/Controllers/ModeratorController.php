<?php

namespace App\Http\Controllers;

use App\Moderator;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use \App\Reports;
use \App\Course;

class ModeratorController extends Controller
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
        $admins = Moderator::where('admin_at','<>','Super Admin')->orderBy('id', 'asc')->paginate(5);
        return view('admin.moderator.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.moderator.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'email' => 'required|string|email|max:30|unique:admins',
            'address' => 'required|string|max:255',
            'admin_at' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $admin = Moderator::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'address' => request('address'),
            'admin_at' => request('admin_at'),
            'type' => request('type'),
            'password' => bcrypt(request('password'))
        ]);

        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' created a moderator [ ' . $admin->first_name . ' '.$admin->last_name . ' ]'
        ]);
        session()->flash('message', 'Admin user is created.');

        return redirect()->route('moderator.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Moderator::findOrFail($id);
        return view('admin.moderator.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Moderator::findOrFail($id);
        return view('admin.moderator.edit', compact('admin'));
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
        $admin = Moderator::findOrFail($id);

        $admin->first_name = request('first_name');
        $admin->last_name = request('last_name');
        $admin->email = request('email');
        $admin->address = request('address');

        $admin->save();

        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' updated a moderator [ ' . $admin->first_name . ' '.$admin->last_name . ' ]'
        ]);

        session()->flash('message', 'The user is updated successfully.');

        
        return view('admin.moderator.show', compact('admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Moderator::findOrFail($id);

        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' deleted a moderator [ ' . $admin->first_name . ' '.$admin->last_name . ' ]'
        ]);

        $admin->delete();
        // return redirect()->back();
        session()->flash('message', 'The user is deleted successfully.');
        return redirect()->route('moderator.index');
    }
}
//reports destroy not working
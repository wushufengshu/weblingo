<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use \App\Admin;


class UserAdminController extends Controller
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
        $admins = Admin::orderBy('id', 'asc')->paginate(5);
        return view('admin.user-admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user-admins.create');
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
            'password' => 'required|string|min:6|confirmed',
        ]);

        $admin = Admin::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'address' => request('address'),
            'password' => bcrypt(request('password'))
        ]);

        session()->flash('message', 'Admin user is created.');

        return redirect()->route('user-admin.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.user-admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.user-admins.edit', compact('admin'));
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
        $admin = Admin::findOrFail($id);

        $admin->first_name = request('first_name');
        $admin->last_name = request('last_name');
        $admin->email = request('email');
        $admin->address = request('address');

        $admin->save();

        session()->flash('message', 'The user is updated successfully.');

        
        return view('admin.user-admins.show', compact('admin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id)->delete();
        // return redirect()->back();
        session()->flash('message', 'The user is deleted successfully.');
        return redirect()->route('user-admin.index');
    }
}

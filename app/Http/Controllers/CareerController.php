<?php

namespace App\Http\Controllers;

use App\Career;
use Illuminate\Http\Request;
use App\Reports;

class CareerController extends Controller
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
    public function index(Career $career)
    {
        $careers = Career::all();
        return view('admin.career.index', compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employment_type = ['full time', 'part time'];
        return view('admin.career.create',compact('employment_type'));
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
            'job' => 'required|string|max:30s',
            'job_description' => 'required|string|max:30',
            'employment_type' => 'required',
            'duties' => 'required',
            'requirements' => 'required',
        ]);

        $career = Career::create([
            'job' => request('job'),
            'job_description' => request('job_description'),
            'employment_type' => request('employment_type'),
            'duties' => request('duties'),
            'requirements' => request('requirements'),
        ]);
        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' added a new job career [ ' . $career->job . ' ]'
        ]);

        session()->flash('message', 'New career is now open!');

        return redirect()->route('careers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.career.show', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $career = Career::findOrFail($id);
        $this->validate(request(), [
            'job' => 'required|string|max:30s',
            'job_description' => 'required|string|max:30',
            'employment_type' => 'required',
            'duties' => 'required',
            'requirements' => 'required',
        ]);

        $career->job = request('job');
        $career->job_description = request('job_description');
        $career->employment_type = request('employment_type');
        $career->duties = request('duties');
        $career->requirements = request('requirements');

        $career->save();
        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' updated a job career [ ' . $career->job . ' ]'
        ]);

        session()->flash('message', 'The job is updated successfully.');

        
        return view('admin.career.show', compact('career'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $report = Reports::create([
            'report' => auth()->user()->first_name . ' '. auth()->user()->last_name . ' deleted a job career [ ' . $career->job . ' ]'
        ]);
        $career->delete();
        // return redirect()->back();
        session()->flash('message', 'The career is deleted successfully.');
        return redirect()->route('careers.index');
    }
}

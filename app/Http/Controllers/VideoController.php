<?php

namespace App\Http\Controllers;

use App\Video;
use Validator;
use App\Media;
use Illuminate\Http\Request;

class VideoController extends Controller
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
        $videos = Video::all();
        return view('admin.video.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'slug' => 'required|video:unique',
            'description' => 'required|min:3',
        ]);

        $video = Video::create([
            'admin_id' => auth()->id(),
            'title' => request('title'),
            'slug' => request('slug'),
            'description' => request('description')
        ]);
        $video_id = $video->id;

        session()->flash('message', 'Video Tutorial is successfully created.');

        return redirect()->route('video.show', compact('video'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        $video = Video::findOrFail($video->id);
        return view('admin.video.show',compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $video->findOrFail($video->id);
        return view('admin.video.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video->findOrFail($video->id);

        $video->title = request('title');
        $video->slug = request('slug');
        $video->description = request('description');
        $video->save();

        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }

    public function add(Request $request)
    {
 
        $file = $request->file('video');
        $full_name = $file->getClientOriginalName();
        $ext = $file->extension();
        $name = pathinfo($full_name, PATHINFO_FILENAME);
        $file->storeAs('public/videos' ,$name.'.'.$ext );
        // $fileMimeType = $request->file('filename')->getMimeType();
        $fileMimeType = $file->getMimeType();


        // $this->validate($request,[
        //     'title' => 'required|string|min:3',
        //     'description' => 'required|min:4'
        // ]);

        Media::create([
            'admin_id' => auth()->id(),
            'video_id' => request('video_id'),
            'title'=> request('title'),
            'video' => $name,
            'ext' => $ext,
            'mime_type' => $fileMimeType,
            'description'=> request('description'),
        ]);
        
        return  back();
    }
}

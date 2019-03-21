@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="title">Edit category</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
  <div class="wrapper container card col-md-12 bg-transparent">
    <form method="POST" action="{{ route('lesson.update', $lesson->id) }}">    
      @method('PATCH')
      @csrf
      <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label ">Lesson Title</label>
        <div class="col-md-10">
          <input id="title" type="text" class="form-control" name="title" value="{{$lesson->title}}" placeholder="Lesson title" required autofocus>
        </div>
      </div>
      <div class="form-group row">
        <label for="slug" class="col-md-2 col-form-label ">Page Title</label>
        <div class="input-group col-md-10">
          <div class="input-group-prepend">
            <span class="input-group-text" id="course_slug">{{$course->slug }}/</span>
          </div>
          <input id="slug" type="text" class="form-control" name="slug" placeholder="Page title" value="{{$lesson->slug}}" required autofocus aria-describedby="course_slug">
        </div>
      </div>

      <div class="form-group row" id="row">
        <label for="body" class="col-md-2 col-form-label ">Body</label>
        <div class="col-md-10">
          <textarea id="body"  class=" form-control ckeditor" name="body" placeholder="Content body" value="" rows="5" required autofocus>{{$lesson->body}}</textarea> 
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12 ">
            <button type="submit" class="btn btn-primary float-right" >
                Register
            </button>
        </div>
      </div>
      @include('admin.layouts.errors')
      

  </div>


@endsection

@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Add Course</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
<div class="wrapper container">
    <form method="POST" action="{{ route('course.store') }}" enctype="multipart/form-data">    
      @method('POST')
      @csrf
      <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label ">Course Name</label>
          <div class="col-md-8">
            <input id="name" type="text" class="form-control" name="name" value="" placeholder="Course name" required autofocus>
          </div>
      </div>
      <div class="form-group row">
        <label for="course_image" class="col-md-2 col-form-label ">Course Image</label>
        <div class="col-md-8">
          <input id="course_image" type="file" class="form-control-file" name="course_image" value="" placeholder="Course Image"  autofocus>
        </div> 
      </div>
      
      <div class="form-group row">
        <label for="slug" class="col-md-2 col-form-label ">Page Title</label>
          <div class="col-md-8">
            <input id="slug" type="text" class="form-control" name="slug" value="" placeholder="Url name" required autofocus>
          </div>
      </div>
      <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label ">Description</label>
          <div class="col-md-8">
            {{-- <textarea id="description"  class=" form-control ckeditor" name="description" placeholder="Description" value="" rows="5" required autofocus></textarea>  --}}
            <textarea id="description"  class=" form-control " name="description" placeholder="Description" value="" rows="5" required autofocus></textarea> 
          </div>
      </div>      
      <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label "></label>
        <div class="col-md-8 ">
            <button type="submit" class="btn btn-primary">
                Add Course
            </button>
        </div>
      </div>
      @include('admin.layouts.errors')
      </div>

    </form>
</div>
@endsection

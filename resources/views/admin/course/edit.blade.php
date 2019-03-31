@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="title">Edit Course</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
<div class="table-responsive ">
  <div class="wrapper container">
   <form method="POST" action="{{ route('course.update', $course->id) }}" enctype="multipart/form-data">    
      @method('PATCH')
      @csrf
      <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label ">Course Name</label>
          <div class="col-md-8">
            <input id="name" type="text" class="form-control" name="name" value="{{$course->name}}" placeholder="Course name" required autofocus>
          </div>
      </div>
      <div class="form-group row">
        <label for="course-image" class="col-md-2 col-form-label ">Course Image</label>
        <div class="col-md-8">
          @if($course->image)
          <img src="/storage/images/{{$course->image}}" alt="{{$course->name}} Logo" style="height: 50px; width: 50px;">
          @else
           <img src="{{asset('images/default_course_image.png')}}" class="" name="default_course_image"  style="height: 50px; width: 50px;">
          @endif
          <input id="course-image" type="file" class="form-control-file" name="course_image" value="" placeholder="Course Image"  autofocus>
        </div> 
      </div>
      
      <div class="form-group row">
        <label for="slug" class="col-md-2 col-form-label ">Page Title</label>
          <div class="col-md-8">
            <input id="slug" type="text" class="form-control" name="slug" value="{{$course->slug}}" placeholder="Url name" required autofocus>
          </div>
      </div>
      <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label ">Description</label>
          <div class="col-md-8">
            <textarea id="description"  class=" form-control ckeditor" name="description" placeholder="Description" value="" rows="5" required autofocus>{{$course->description}}</textarea> 
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
</div>


@endsection

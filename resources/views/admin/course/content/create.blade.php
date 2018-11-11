@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Add Course Content</h1>
  <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
   {{--  <label for="number_of_codes" class="col-sm col-form-label ">Number of codes:</label>
    <input type="number" name="number_of_codes" min="0" class="form-control col-sm">
    <button type="submit" class="form-group btn btn-primary">
        Go
    </button> --}}

  </div>
</div>
@endsection
@section('content')
<div class="wrapper container">
    <form method="POST" action="{{ route('content.store') }}">    
      @method('POST')
      @csrf
      <input type="hidden" value="{{$course->slug}}" name="course_slug">
      <input type="hidden" value="{{$course->id}}" name="course_id">
      <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label ">Content Title</label>
          <div class="col-md-8">
            <input id="title" type="text" class="form-control" name="title" value="" required autofocus>
          </div>
      </div>
      <div class="form-group row">
        <label for="slug" class="col-md-2 col-form-label ">Page Title</label>
          <div class="col-md-8">
            <input id="slug" type="text" class="form-control" name="slug" value="" required autofocus>
          </div>
      </div>
      <div class="form-group row">
        <label for="body" class="col-md-2 col-form-label ">Body</label>
          <div class="col-md-8">
            <textarea id="body"  class=" form-control" name="body" value="" rows="5" required autofocus></textarea> 
          </div>
      </div>

      {{-- <div class="form-group row">
        <label for="codeeditor" class="col-md-2 col-form-label ">Add Code</label>
          <div class="col-md-8">
            <input type="text" class="form-control" name="example_heading" value="" placeholder="Code Heading" autofocus>
            <textarea id="codeeditor" name="codeeditor" class="form-control codeeditor-textarea" placeholder="Code here"><!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  
</body>
</html></textarea>
          </div>
      </div> --}}
      <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label "></label>
        <div class="col-md-8 ">
            <button type="submit" class="btn btn-primary">
                Add Category
            </button>
        </div>
      </div>
      @include('admin.layouts.errors')
      </div>
    </form>
</div>
@endsection

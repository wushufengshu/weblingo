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
    <form method="POST" action="{{ route('course.store') }}">    
      @method('POST')
      @csrf
      <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label ">Course Name</label>
          <div class="col-md-8">
            <input id="name" type="text" class="form-control" name="name" value="" placeholder="Course name" required autofocus>
          </div>
      </div>
      <div class="form-group row">
        <label for="slug" class="col-md-2 col-form-label ">Page Title</label>
          <div class="col-md-8">
            <input id="slug" type="text" class="form-control" name="slug" value="" placeholder="This will be displayed for the users. eg: a.test/html" required autofocus>
          </div>
      </div>
      <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label ">Description</label>
          <div class="col-md-8">
            <input id="description" type="text" class="form-control" name="description" value="" placeholder="Description" required autofocus>
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

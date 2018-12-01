@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Create Quiz</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
  <div class="wrapper container card">
    <form method="POST" action="{{ route('quiz.store') }}">    
      @method('POST')
      @csrf
      <div class="form-group row">
        <label for="quiz_name" class="col-md-2 col-form-label ">Quiz Name</label>
        <div class="col-md-10">
          <input id="quiz_name" type="text" class="form-control" placeholder="Enter quiz name" name="quiz_name" value="" required autofocus>
        </div>
      </div>
      
      <div class="form-group row">
        <label for="slug" class="col-md-2 col-form-label ">Slug</label>
        <div class="col-md-10">
          <input id="slug" type="text" class="form-control" placeholder="Enter slug" name="slug" value="" required autofocus>
        </div>
      </div>

      <div class="form-group row">
        <label for="quiz_for" class="col-md-2 col-form-label ">Quiz For</label>
        <div class="col-md-10">
          <select class="form-control" name="quiz_for">
            <option>--SELECT--</option>

            @foreach($courses as $course)
            <option value="{{$course->name}}" >{{$course->name}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="number_of_questions" class="col-md-2 col-form-label ">Number of Questions</label>
        <div class="col-md-8">
          <input id="number_of_questions" placeholder="Enter total number of questions" type="number" class="form-control" name="number_of_questions" value="" required>
        </div>
      </div>

      <div class="form-group row" id="row">
        <label for="description" class="col-md-2 col-form-label ">Short description</label>
        <div class="col-md-10">
          <textarea id="description"  class=" form-control ckeditor" name="description" placeholder="Content description" value="" rows="5" required autofocus></textarea> 
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-12 ">
            <button type="submit" class="btn btn-success float-right">
                Save
            </button>
        </div>
      </div>
      @include('admin.layouts.errors')
      
    </form>
  </div>
@endsection

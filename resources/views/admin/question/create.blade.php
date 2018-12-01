@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Questions</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
<form method="POST" action="{{ route('questions.store') }}">  
  @method('POST')
  @csrf 
  <div class="container card">
      <div class="">
        Create
        <button type="submit" class="btn btn-primary float-right">
            Save
        </button>
      </div><hr>
      
    <div class="card-body ">
      
      <div class="form-group row">
      <label for="questions" class="col-md-2 col-form-label ">Question</label>
        <div class="col-md-10 ">
          <textarea id="" class="w-100 form-control ckeditor" name="question" rows="4"></textarea>
        </div>
      </div>
      
      <div class="form-group row">
      <label for="score" class="col-md-2 col-form-label ">Score</label>
        <div class="col-md-10 ">
          <input type="text" class="form-control" name="score" value="1">
        </div>
      </div>
    </div>
    
   
    @foreach(range(1,4) as $range)
    <div class="wrapper container ">
        <div class="form-group row"><label for="option_{{$range}}" class="col-md-2 col-form-label ">Option {{$range}}*</label>
          <div class="col-md-5 ">
            <input type="text" class="form-control" name="option_{{$range}}" placeholder="Answer" ">
          </div>
          <div class="form-check col-md-5">
            <input type="hidden" value="0" name="correct_{{$range}}" >
            <input class="form-check-input" type="checkbox" name="correct_{{$range}}" value="1" id="correct_{{$range}}">
            <label class="form-check-label" for="correct_{{$range}}">
              Correct 
            </label>
          </div>
        </div>
       @include('admin.layouts.errors')
    </div>
    @endforeach
  
</form>
@endsection
{{-- 
@foreach(range(1,$number_of_questions) as $n)
    <div class="card-body ">
      
      <div class="form-group row">
      <label for="questions" class="col-md-2 col-form-label ">Question {{$n}}</label>
        <div class="col-md-10 ">
           <textarea id="" class="w-100 form-control ckeditor" name="question" rows="4"></textarea> 
          <input type="text" class="w-100 form-control ckeditor" name="question_{{$n}}" >
        </div>
      </div>
      
      /*<div class="form-group row">
      <label for="score" class="col-md-2 col-form-label ">Score</label>
        <div class="col-md-10 ">
          <input type="text" class="form-control" name="score" value="1">
        </div>
      </div> */
    </div>
    
   
    @foreach(range(1,4) as $range)
    <div class="wrapper container ">
        <div class="form-group row"><label for="option_{{$range}}" class="col-md-2 col-form-label ">Option {{$range}}*</label>
          <div class="col-md-5 ">
            <input type="text" class="form-control" name="option_{{$range}}" placeholder="Answer" ">
          </div>
          <div class="form-check col-md-5">
            <input type="hidden" value="0" name="correct_{{$range}}" >
            <input class="form-check-input" type="checkbox" name="correct_{{$range}}" value="1" id="correct_{{$range}}">
            <label class="form-check-label" for="correct_{{$range}}">
              Correct 
            </label>
          </div>
        </div>
       @include('admin.layouts.errors')
    </div>
    @endforeach
    <hr>
    @endforeach--}}
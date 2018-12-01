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
      
      <input type="hidden" name="quiz_name" value="{{$quiz_name}}" >
      <input type="hidden" name="quiz_for" value="{{$quiz_for}}">
      <input type="hidden" name="slug" value="{{$slug}}">
      <input type="hidden" name="" value="{{$number_of_questions}}">
      <input type="hidden" name="description" value="{{$description}}">

     <marquee behavior="" direction=""><h3>{{$quiz_name}}</h3></marquee>
       <hr>
      @foreach(range(1,$number_of_questions) as $n)
        <div class="card-body ">
      
          <div class="form-group row">
          <label for="question" class="col-md-2 col-form-label ">Question {{$n}}</label>
            <div class="col-md-10 ">
              <textarea id="" class="w-100 form-control ckeditor" name="question[]" rows="4"></textarea>
            </div>
          </div>
          
          <div class="form-group row">
          <label for="score" class="col-md-2 col-form-label ">Score</label>
            <div class="col-md-10 ">
              <input type="text" class="form-control" name="score[]" value="1">
            </div>
          </div>

        @foreach(range(1,4) as $range)
        <div class="wrapper container ">
            <div class="form-group row">
              <label for="option" class="col-md-2 col-form-label ">Option {{$range}}*</label>
              <div class="col-md-5 ">
                <input type="text" class="form-control" name="option[]" placeholder="Answer" ">
              </div>
              <div class="form-check col-md-5">
                <input type="hidden" value="0" name="correct[]" >
                <input class="form-check-input" type="checkbox" name="correct[]" value="1" id="correct_{{$range}}">
                <label class="form-check-label" for="correct">
                  Correct 
                </label>
              </div>
            </div>
           @include('admin.layouts.errors')
        </div>
        @endforeach
        </div>
        <hr>
      @endforeach

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

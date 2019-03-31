@extends('admin.layouts.master')

@section('page-name')
<div class="row">
<h1 class="h2">Questions</h1>
    {{-- <form action="{{route('questions.add_option', $quiz->slug)}}" method="POST"> 
      @method('POST')
      @csrf
      <input type="hidden" id="number_of_option" min="0" value="1" placeholder="Add option" class="" style="width: 6rem" name="number_of_option" required>
      <input type="submit" id="add" name="add" class="btn btn-info" >
      
    </form> --}}
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
<div class="card bg-transparent">
<form action="{{route('questions.store')}}" method="POST">
  @method('POST')
  @csrf
<h2>{{$quiz->name}} </h2>
<input type="hidden" name="quiz_name" value="{{$quiz->name}}">
@if($number_of_questions=1 > 0 )
@foreach(range(1,$number_of_questions) as $n)
    <div class="card-body ">
      
      <div class="form-group row">
      <label for="questions" class="col-md-2 col-form-label ">Question {{$n}}</label>
        <div class="col-md-10 ">
          <input type="text" class="w-100 form-control " name="questions[{{$n}}]" >
        </div>
      </div>
      
    </div>
    
   
    {{-- @foreach(range(1,4) as $range) --}}
    @for($range = 1; $range <=$number_of_option; $range++)

    <div class="wrapper container ">
        <div class="form-group row"><label for="answers" class="col-md-2 col-form-label ">Option {{$range}}*</label>
          <div class="col-md-5 ">
            <input type="text" class="form-control" name="answers[{{$n . $range}}]" placeholder="Answer" ">
          </div>
          <div class="form-check col-md-5">
            <input type="hidden" value="0" name="correct[{{$n . $range}}]" >
            <input class="form-check-input" type="checkbox" name="correct[{{$n . $range}}]" value="1">
            <label class="form-check-label" for="correct[{{$n . $range}}]">
              Correct 
            </label>
          </div>
        </div>
       @include('admin.layouts.errors')
    </div>
    @endfor
    {{-- @endforeach --}}
    {{-- @for($range = 1; $range <= 4; $range++)
    <div class="wrapper container ">
        <div class="form-group row"><label for="option_{{$range}}" class="col-md-2 col-form-label ">Option {{$range}}*</label>
          <div class="col-md-5 ">
            <input type="text" class="form-control" name="option_{{$range}}" placeholder="Answer" ">
          </div>
          <div class="form-check col-md-5">
            <input type="hidden" value="0" name="correct_{{$range}}" >
            <input class="form-check-input" type="checkbox" name="correct_{{$range}}" value="1">
            <label class="form-check-label" for="correct_{{$range}}">
              Correct 
            </label>
          </div>
        </div>
       @include('admin.layouts.errors')
    </div>
     --}}
    <hr>
  @endforeach
  <button type="submit" name="submit" class="btn btn-primary float-right">Save</button>
@endif

</form>
</div>
@endsection


{{-- Quiz Controller
Question ocontroller
Content conteroller
Profile --}}
{{-- 
@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Questions</h1>
    <form action="{{route('questions.add_questions', $quiz->slug)}}" method="POST"> 
      @method('POST')
      @csrf
      <input type="hidden" id="number_of_questions" min="0" value="1" placeholder="Add Questions" class="" style="width: 6rem" name="number_of_questions" required>
      <input type="submit" id="add" name="add" class="btn btn-info" >
      
    </form>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
<div class="card bg-transparent">
<form action="{{route('questions.store')}}" method="POST">
  @method('POST')
  @csrf
<h2>{{$quiz->name}} Quiz</h2>
<input type="hidden" name="quiz_name" value="{{$quiz->name}}">
@if($number_of_questions > 0 )
@foreach(range(1,$number_of_questions) as $n)
    <div class="card-body ">
      
      <div class="form-group row">
      <label for="questions" class="col-md-2 col-form-label ">Question {{$n}}</label>
        <div class="col-md-10 ">
          <input type="text" class="w-100 form-control " name="questions[{{$n}}]" >
        </div>
      </div>
      
    </div>
    
   
    {{@foreach(range(1,4) as $range) 
    @for($range = 1; $range <= 4; $range++)

    <div class="wrapper container ">
        <div class="form-group row"><label for="answers" class="col-md-2 col-form-label ">Option {{$range}}*</label>
          <div class="col-md-5 ">
            <input type="text" class="form-control" name="answers[{{$n . $range}}]" placeholder="Answer" ">
          </div>
          <div class="form-check col-md-5">
            <input type="hidden" value="0" name="correct[{{$n . $range}}]" >
            <input class="form-check-input" type="checkbox" name="correct[{{$n . $range}}]" value="1">
            <label class="form-check-label" for="correct[{{$n . $range}}]">
              Correct 
            </label>
          </div>
        </div>
       @include('admin.layouts.errors')
    </div>
    @endfor--}}
    {{-- @endforeach --}}
    {{-- @for($range = 1; $range <= 4; $range++)
    <div class="wrapper container ">
        <div class="form-group row"><label for="option_{{$range}}" class="col-md-2 col-form-label ">Option {{$range}}*</label>
          <div class="col-md-5 ">
            <input type="text" class="form-control" name="option_{{$range}}" placeholder="Answer" ">
          </div>
          <div class="form-check col-md-5">
            <input type="hidden" value="0" name="correct_{{$range}}" >
            <input class="form-check-input" type="checkbox" name="correct_{{$range}}" value="1">
            <label class="form-check-label" for="correct_{{$range}}">
              Correct 
            </label>
          </div>
        </div>
       @include('admin.layouts.errors')
    </div>
    
    <hr>
  @endforeach
  <button type="submit" name="submit" class="btn btn-primary float-right">Save</button>
@endif

</form>
</div>
@endsection


Quiz Controller
Question ocontroller
Content conteroller
Profile --}}

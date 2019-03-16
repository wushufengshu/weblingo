@extends('users.layouts.master')

@section('content')
<div class="container marketing">
  <div class="position-relative overflow-hidden text-center " style="background: transparent;">
      
    <div class="col-md-8 p-lg-5 mx-auto my-0">
      <img src="{{ asset('images/WLLogo.png') }}" class=" "  alt="">       
      
    </div>  
    <h2 class="float-right">WebLingo is an online learning platform about Web Programming. You can use it as your guide in your studies, we have lectures and video tutorials about HTML, CSS and JavaScript.</h2>
  </div>
  <hr class="featurette-divider">
  <h2 class="card-title font-weight-bold text-center">Basic Web Development</h2>
  @foreach($courses->chunk(3) as $chunk)
  <div class="card-deck py-2">
      @foreach($chunk->take(3) as $course)
        <div class="card border-dark" style="background: #dee2e5">
          {{-- {{$course->lesson}} --}}
          <img src="/storage/images/{{$course->image}}" alt Logo" class=" card-img-top mx-auto py-2"  style="height: 200px;background: transparent; width: 200px;">
          <div class="card-body">
           {{--  <h5 class="card-title">Card title</h5> --}}
            <p class="card-text h4 text-center">{!!$course->description!!}</p>
          </div>
          <a href="{{route('user.course', [$course->slug, $course->lesson->first()['slug']] )}}" class=" text-center btn btn-secondary" style="background: #5A6268">
              <h2 class="display-5 text-light" >Learn {{$course->name}} &raquo;</h2>
          </a>
        </div>
      @endforeach
  </div>
  @endforeach

    
 <hr>
<h1 class="mb-3 mx-auto col-md-12 text-lg-center" id="video">Video Series</h1>
<div class="container">
  @foreach($videos->chunk(3) as $video_chunk)
    <div class="card-deck py-2">

    @foreach($video_chunk as $video)
    <div class="col-lg-4 mx-auto card bg-transparent">
      <h2> {{$video->title}}</h2>
      <p><a class="btn btn-secondary float-right" href="{{route('user.video', $video->slug)}}" role="button">Watch now! <span data-feather="film"></span> </a></p>
    </div>
    @endforeach
  </div>
  @endforeach
</div>
<hr class="featurette-divider">
<h1 class="mb-3 mx-auto col-md-12 text-lg-center" id="quizzes">Quizzes</h1>
@foreach($quizzes->chunk(3) as $quiz_chunk)
  <div class="card-deck py-2">
      @foreach($quiz_chunk as $quiz)
        <div class="card border-dark" style="background: #dee2e5">
          <div class="card-body">
           {{--  <h5 class="card-title">Card title</h5> --}}
            <p class="card-text h2 text-center">{{$quiz->name}}</p>
          </div>
          <div>
      <p class="float-left">Questions: {{count($quiz->questions)}}</p><p><a class="btn btn-secondary float-right" href="{{route('user.quiz', $quiz->slug)}}" role="button">Take quiz now &raquo;</a></p>
    </div>
        </div>
      @endforeach
  </div>
@endforeach 

  
  
</div>
   

   
@endsection
{{-- @section('quiz')


@endsection --}}
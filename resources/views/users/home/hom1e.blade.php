@extends('users.layouts.master')

@section('content')
<div class="container col p-0 m-0 ">
  {{-- <div class="position-relative overflow-hidden text-center col-md-12">
    style="background: url({{asset('images/bg.png')}}) no-repeat center;  height: auto;"> 
    <div class="col-md-8 p-lg-5 mx-auto my-0 " style="height: auto;">
      <img src="{{ asset('images/WLLogo.png') }}" class=" "  alt="">       
      <h2 class="float-right">WebLingo is an online learning platform about Web Programming. You can use it as your guide in your studies, we have lectures and video tutorials about HTML, CSS and JavaScript.</h2>
    </div>  
    
  </div>--}}
      
  <div id="carouselExampleIndicators" class="carousel slide position-relative" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="col-md-12  p-lg-5 mx-auto my-0 " style="background:url({{ asset('images/etona.jpg') }}) no-repeat; background-size:100%; height: 100%;width: 100%">
          <div class="col-md-8 mx-auto text-center text-light position-relative">
            <img src="{{ asset('images/WLLogolight.png') }}" style="" class="mx-auto "  alt="">       
            <h2 class=" text-center mx-auto" >
              Improve your web development skills from beginner to intermediate.
            {{-- WebLingo is an online learning platform about Web Programming. You can use it as your guide in your studies, we have lectures and video tutorials about HTML, CSS and JavaScript. --}}

          </h2>
          </div>
          
        </div>  
      </div>
      <div class="carousel-item ">
        <div class="col-md-12  p-lg-5 mx-auto my-0 " style="background:url({{ asset('images/turokapadyan.png') }}) no-repeat center;background-size: 100%; height: 100%;width: 100%">
          <div class="col-md-8 mx-auto text-left float-left position-relative">
            <p class="display-2 ">About Us</p>     
            {{-- <h2 class="float-right">WebLingo is an online learning platform about Web Programming. You can use it as your guide in your studies, we have lectures and video tutorials about HTML, CSS and JavaScript.</h2> --}}
            <h2 class="color">Weblingo is produced by Antidote.</h2>
      <p class="lead">Antidote is a team made up of five members and currently taking up Bachelor of Science in Information Technology at Lyceum of the Philippines University - Cavite. They are also a graduating students.</p>
          </div>
          
        </div>  
      </div>

      {{-- <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div> --}}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <hr class="featurette-divider">
  <h1 class="card-title font-weight-bold text-center">Courses</h1>
  @foreach($courses->chunk(3) as $chunk)
  <div class="card-deck py-2 col-md-10 mx-auto">
      @foreach($chunk->take(3) as $course)
        @if($course->lesson->isNotEmpty())
        <div class="card border-dark" style="background: #dee2e5">
          {{-- {{$course->lesson}} --}}
          {{-- <img src="/storage/images/{{$course->image}}"  class=" card-img-top mx-auto py-2"  style="height: 200px;background: transparent; width: 200px;"> --}}
          @if($course->image)
           <img src="/storage/images/{{$course->image}}" alt="{{$course->name}} Logo"  class=" card-img-top mx-auto py-2" style="height: 200px;background: transparent; width: 200px;">
          @else
           <img src="{{asset('images/default_course_image.png')}}"  class=" card-img-top mx-auto py-2" style="height: 200px;background: transparent; width: 200px;">
          @endif
          <div class="card-body">
           {{--  <h5 class="card-title">Card title</h5> --}}
            <p class="card-text h4 text-center">{!!$course->description!!}</p>
          </div>
          <a href="{{route('user.course', [$course->slug, $course->lesson->first()['slug']] )}}" class=" text-center btn btn-secondary border-0 wlc" >
              <h2 class=" text-light" >Learn {{$course->name}} &raquo;</h2>
          </a>
        </div>
        @else

        @endif
      @endforeach
  </div>
  @endforeach

    
 <hr>
<h1 class="card-title font-weight-bold text-center">Video Series</h1>
<div class="container col-md-10 mx-auto">
  @foreach($videos->chunk(3) as $video_chunk)
    <div class="card-deck py-2">

    @foreach($video_chunk as $video)
    @if($video->media->isNotEmpty())
    <div class="col-lg-4  mx-auto card bg-transparent border-dark">
      <div class="row">
        <div class="col-md-4 border-dark">
          <img src="{{ asset('images/wltutorials.jpg') }}" class="card-img-top " style="height: 150px;width: 150px;border: 1px solid black" alt="">
          
        </div>
        <div class="col-md-8 "> 
            <p class=" h2 text-left " style="height: 65%;" >{{$video->title}}</p>
          <p><a class="btn btn-secondary col h2 border-0 wlc position-relative m-0" style="" href="{{route('user.video', $video->slug)}}" role="button">Watch now! <span data-feather="film"></span> </a></p>
        </div>
        
      </div>
      
    </div>
    @else

    @endif
    @endforeach
  </div>
  @endforeach
</div>
<hr class="featurette-divider">
<h1 class="card-title font-weight-bold text-center">Quizzes</h1>
@foreach($quizzes->chunk(3) as $quiz_chunk)
  <div class="card-deck py-2 mx-auto col-md-10">
      @foreach($quiz_chunk as $quiz)
      @if($quiz->questions->isNotEmpty())
        <div class=" card border-dark " style="background: #dee2e5">
          <div class="row card-body col">
            <div class="col-md-4 border-dark">
              <img src="{{ asset('images/questionmark.png') }}" class="card-img-top " style="height: 150px;width: 150px;border: 0px solid black" alt="">
              
            </div>
           {{--  <div class="card-body">
                <img src="{{ asset('images/qm2.png') }}" class="card-img-top " style="height: 150px;width: 150px;border: 0px solid black" alt="">
              
            </div> --}}
            <div class="ml-auto col-*">
              <p class="h2 text-nowrap">{{$quiz->name}}</p>
              <p class="float-left">Questions: {{count($quiz->questions)}}</p>
              {{-- <p class="float-left">Average: {{$quiz->tests_results->where('quiz_id', $quiz->id)->avg('tests_result')}}</p> --}}
              <p><a class="btn btn-secondary float-right border-0 wlc" href="{{route('user.quiz', $quiz->slug)}}" role="button">Take quiz now &raquo;</a></p>
            </div>
          </div>
          
        </div>
        @else
        @endif
      @endforeach
  </div>
@endforeach 

  
  
</div>
   

   
@endsection
{{-- @section('quiz')


@endsection --}}
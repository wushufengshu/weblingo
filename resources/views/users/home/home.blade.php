@extends('users.layouts.master')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item ">
        <div class="col-md-12  mx-auto " style="background:url({{ asset('images/etona.jpg') }}) center no-repeat;  height: 100%;width: 100%">
	        <div class="container ">
	          <div class="col-md-6 mx-auto text-center text-light position-relative">
	          	<img src="{{ asset('images/WLLogolight.png') }}" style="" class="mx-auto "  alt="">
	            <h2>Improve your web development skills from beginner to intermediate.</h2>
	          </div>
	        </div>
	    </div>
      </div>
      <div class="carousel-item active">
        <div class="col-md-12  mx-auto " style="background:url({{ asset('images/turokapadyan.png') }}) no-repeat center;background-size:cover; height: 100%;width: 100%">
	        <div class="container ">
	          <div class="col-md-6 mx-auto text-left float-left position-relative mt-5">
	          	<p class="display-4 ">About Us</p>     
	            <h2>Antidote is a team made up of five members and currently taking up Bachelor of Science in Information Technology at Lyceum of the Philippines University - Cavite. They are also a graduating students.</h2>
	          </div>
	        </div>
	    </div>
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
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

<div class="container marketing">


<hr class="featurette-divider">
<h1 class="card-title font-weight-bold text-center mb-5">Videos</h1>

@foreach($videos->chunk(3) as $video_chunk)
<div class="card-deck">
	@foreach($video_chunk as $video)
	    @if($video->media->isNotEmpty())
			<div class="col-lg-4 bg-transparent mx-auto mb-3 card border-0">
		        <img src="{{ asset('images/wltutorials.jpg') }}" class="card-img-top mx-auto img-fluid " style="height: auto;max-height:150px;max-width: 150px;width:auto;border: 1px solid black" alt="">
		        <div class="card-body">
		        	<h2 class="mt-2">{{$video->title}}</h2>
		        </div>
		        

		        <a href="{{route('user.video', $video->slug)}}" class=" text-center btn btn-secondary border-0 wlc" >
		              <h4 class=" text-light" >Watch now! <span data-feather="film"></span></h4>
		        </a>

		    </div>
	    @else

	    @endif
    @endforeach
</div>
@endforeach





<hr class="featurette-divider">
    
<h1 class="card-title font-weight-bold text-center">Quizzes</h1>
<div class="container">
@foreach($quizzes->chunk(3) as $quiz_chunk)
  <div class="card-deck mb-3 text-center">
  	@foreach($quiz_chunk as $quiz)
	    @if($quiz->questions->isNotEmpty()) 
        @if($quiz->limit <= count($quiz->questions))
  	    <div class="card mb-4 shadow-sm bg-transparent">
  	      <div class="card-header">
  	        <h4 class="my-0 font-weight-normal">{{$quiz->name}}</h4>
  	      </div>
  	      <div class="card-img"><img src="{{ asset('images/questionmark.png') }}" class="card-img-top " style="height: 150px;width: 150px;border: 0px solid black" alt=""></div>
  	      <div class="card-body">
  	        <ul class="list-unstyled mt-3 mb-4">
  	          <li>Questions: {{$quiz->limit}}</li>
  	        </ul>
  	        <p><a class="btn btn-secondary col border-0 wlc" href="{{route('user.quiz', $quiz->slug)}}" role="button">Take quiz now &raquo;</a></p>
  	      </div>
  	    </div>
        @else
        @endif
	    @else
	    @endif
  	@endforeach
  </div>
@endforeach


</div>
</div>
@endsection
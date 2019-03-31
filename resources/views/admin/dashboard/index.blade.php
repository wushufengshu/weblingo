@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Dashboard</h1>
    
</div>
@endsection
@section('content')
<div class="container col m-0 p-0">
  <div class="card bg-transparent">
    <h3 class="">Courses</h3><hr>
  <div class="container">
      <div class="card-deck">

          @foreach($archives->take(3) as $course)
          {{-- <div class="card border-secondary mb-3 bg-transparent" >
            <div class="card-header"></div>
            <div class="card-body text-secondary">
              <h5 class="card-title"></h5>
              <p class="card-text float-right"></p>
            </div>
          </div>  --}}
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header"><a href="" class="text-white"><b>{{$course->name}} </b></a></div>
            <div class="card-body">
              <h5 class="card-title">Lesson Count: {{count($course->lesson)}}</h5>
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
            </div>
          </div>
          @endforeach
      </div>
  </div>
  </div>
  
  <div class="card bg-transparent">
    <h3 class="">Video Tutorial</h3><hr>
  <div class="container">
      <div class="card-deck">
          @foreach($videos->take(3) as $video)
         {{--  <div class="card border-secondary mb-3 bg-warning" >
            <div class="card-header"></div>
            <div class="card-body text-secondary">
              <h5 class="card-title">Episode Count: {{count($video->media)}}</h5>
              <p class="card-text float-right"></p>
            </div>
          </div> 
 --}}
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
            <div class="card-header"><a href="" class="text-dark"><b>{{$video->title}} </b></a></div>
            <div class="card-body">
              <h5 class="card-title text-dark">Episode Count: {{count($video->media)}}</h5>
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
            </div>
          </div>
           @endforeach

      </div>
  </div>
  </div>
  <div class="card bg-transparent">
    <h3 class="">Quizzes</h3><hr>
  <div class="container">
      <div class="card-deck">

          @foreach($quizzess->take(3) as $quiz)
         {{--  <div class="card border-secondary mb-3 bg-transparent" >
            <div class="card-header"></div>
            <div class="card-body text-secondary">
              <h5 class="card-title text-dark"></h5>
              <p class="card-text float-right"></p>
            </div>
          </div>  --}}
          <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header"><a href="" class="text-dark"><b>{{$quiz->name}} </b></a></div>
            <div class="card-body">
              <h5 class="card-title">Question Count: {{count($quiz->questions)}}</h5>
              {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
            </div>
          </div>
          @endforeach
      </div>
  </div>
  </div>
  <hr>
  <div class="card bg-transparent">
    <h3 class="">Leaderboards</h3>
  <div class="container">
      <div class="card-deck">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Average</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tests_results as $tests_result)
              <tr>
                <td>{{$tests_result->user->first_name}} {{$tests_result->user->last_name}}</td>
                <td>{{$quiz->tests_results->where('quiz_id', $quiz->id)->avg('tests_result')}}</td>
                <td>{{$quiz->created_at}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
  </div>
    
</div>

    
    
@endsection

@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Dashboard</h1>
    
</div>
@endsection
@section('content')
<div class="container col m-0 p-0">
  <h3 class="">Courses</h3>
  <div class="container">
      <div class="card-deck">

          @foreach($archives->take(3) as $course)
          <div class="card border-secondary mb-3 bg-transparent" >
            <div class="card-header"><a href="" class="text-dark"><b>{{$course->name}} </b></a></div>
            <div class="card-body text-secondary">
              <h5 class="card-title">Lesson Count: {{count($course->lesson)}}</h5>
              <p class="card-text float-right"></p>
            </div>
          </div> 
          @endforeach
      </div>
  </div>
  <hr>
  <h3 class="">Video Tutorial</h3>
  <div class="container">
      <div class="card-deck">
          @foreach($videos->take(3) as $video)
          <div class="card border-secondary mb-3 bg-transparent" >
            <div class="card-header"><a href="" class="text-dark"><b>{{$video->title}} </b></a></div>
            <div class="card-body text-secondary">
              <h5 class="card-title">Episode Count: {{count($video->media)}}</h5>
              <p class="card-text float-right"></p>
            </div>
          </div> 
          @endforeach
      </div>
  </div>
  <hr>
  <h3 class="">Quizzes</h3>
  <div class="container">
      <div class="card-deck">

          @foreach($quizzess->take(3) as $quiz)
          <div class="card border-secondary mb-3 bg-transparent" >
            <div class="card-header"><a href="" class="text-dark"><b>{{$quiz->name}} </b></a></div>
            <div class="card-body text-secondary">
              <h5 class="card-title">Question Count: {{count($quiz->questions)}}</h5>
              <p class="card-text float-right"></p>
            </div>
          </div> 
          @endforeach
      </div>
  </div>
    <h3 class="">Leaderboards</h3>
  <div class="container">
      <div class="card-deck">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Score</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Den</td>
                <td>Mark</td>
                <td>Otto</td>
              </tr>
            </tbody>
          </table>
      </div>
  </div>
</div>

    
    
@endsection

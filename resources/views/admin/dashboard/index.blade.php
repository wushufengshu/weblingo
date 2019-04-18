@extends('admin.layouts.master')

@section('page-name')

<p class="h2">Dashboard</p>
    
@endsection
@section('content')
<div class="container col m-0 p-0 ">
<div class="row ">
  <div class="col-md-8">
    <div class="card bg-transparent">
      <h3 class="">Courses</h3><hr>
      <div class="container ">
        <div class="card-deck">

            @foreach($archives->take(3) as $course)
       {{--      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header"><a href="" class="text-white"><b> </b></a></div>
              <div class="card-body">
                <h5 class="card-title"></h5>
              </div>
            </div> --}}
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card bg-primary shadow h-100 py-2 mx-0 " >
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">{{$course->name}}</div>
                        <div class="h6 mb-0 font-weight-bold text-white">Lesson Count: {{count($course->lesson)}}</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
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
                 <div class="col-xl-4 col-md-6 mb-4">
                  <div class="card bg-info shadow h-100 py-2 mx-0" >
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">{{$video->title}}</div>
                          <div class="h6 mb-0 font-weight-bold text-white">Episode Count: {{count($video->media)}}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


             @endforeach

          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
   {{--  <div class="card bg-transparent h-100">
      @foreach($reports as $report)
      <tr>
        <td>{{$report->report}}</td>
        <td>{{$report->created_at->diffForHumans()}}</td>
      </tr>
        
      @endforeach
    </div> --}}
    <div class="card bg-transparent">
      <h3 class="">Reports</h3><hr>
      <div class=" bg-transparent">
          <ul class=" list-group list-group-flush" style="overflow-y: scroll;height: 24rem" >
            @foreach($reports->reverse() as $report)
            <li class="list-group-item bg-transparent">{{$report->report}} <br><small class="text-muted">{{$report->created_at->diffForHumans()}}</small></li>
            @endforeach
          </ul>
      </div>
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
  <div class="card bg-transparent">
    <h3 class="">Leaderboards</h3>
  <div class="container" style="overflow-y: scroll; height:50px;">
          <table class="table table-striped" >
            <thead>
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Average</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody style="height 50px;">
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

    
    
@endsection

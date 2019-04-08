@extends('users.layouts.master')

@section('content')
{{-- <form action="{{route('application.upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <br>
        fn<input type="text" name="first_name">
        <br>
        ln<input type="text" name="last_name"><br>
        cn<input type="text" name="contact_number"><br>
        em<input type="email" name="email"><br>
        sd<input type="text" name="short_description"><br>
        pdf<input type="file" name="pdf">
        <br> <br>
        <input type="submit" value="Upload">
    </form> --}}
    
    @if($careers->isEmpty())
    <div class="col-md-10 mx-auto my-3">
        <div class="row featurette">
        <div class="col-md-12 text-center">
          <h1 class="color">Sorry, there are no job openings for now..</h1>
          {{-- <p class="lead">We would like to acknowledge w3school, tutorialspoint for being our guide for this project. <br>
            All videos are courtesy of Brian Holt.
          </p> --}}
        </div>
      </div>
    </div>
    @else
   
       {{--  <ul class="list-unstyled">
            <li class="list-group-item">
                <a href="{{route('user.showCareer', $career->id)}}"></a>
            </li>
        </ul> --}}
        <div class="card-deck col-md-8 mx-auto">
        @foreach($careers as $career)
          <div class="card bg-transparent">
            <div class="card-header"><b><h3>{{$career->job}}</h3></b></div>
            <div class="card-body">
              <h5 class="card-title"><b>Job Description</b></h5>
              <p class="card-text">{{$career->job_description}}</p>
              <h5 class="card-title"><b>Employment Type</b></h5>
              <p class="card-text">{{$career->employment_type}}</p>
              <h5 class="card-title"><b>Duties</b></h5>
              <p class="card-text">{{$career->duties}}</p>
              <h5 class="card-title"><b>Requirements</b></h5>
              <p class="card-text">{{$career->requirements}}</p>
            </div>
            <div class="card-footer">
              
                <a href="{{route('user.showCareer', $career->id)}}" class="btn btn-success">Send CV</a>
            </div>
          </div>
        @endforeach
        </div>
    
    @endif
	{{-- <a href="{{URL::asset('storage/pdf/'.$app->name .'.'. $app->ext)}}" target="_blank">{{$app->name}}</a> --}}
@endsection

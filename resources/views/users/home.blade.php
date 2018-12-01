@extends('users.layouts.master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.who')


                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <div class="position-relative overflow-hidden text-center bg-light">
        
      <div class="col-md-5 p-lg-5 mx-auto my-0">
        <img src="{{ asset('images/WLLogo.png') }}" class=""  alt="">
        <h1 class="display-4 font-weight-normal">{{ config('app.name', 'Antidote') }}</h1>
        <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
      </div>
    </div>
    <div class="d-md-flex flex-md-equal my-md-3 pl-md-3 col-md-12 row ">
    @foreach($courses as $course)
    <a href="{{route('course.index')}}" class="  pt-3 px-4 pt-md-5 text-center text-white overflow-hidden bg-light col-md-4">
      <div class="">
        
        <div class=" mx-auto h-50" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"><img src="/storage/images/{{$course->image}}" alt Logo" style="height: 200px;background: transparent; width: 175px;"></div>
        <div class="my-2  py-2 ">
          <h2 class="display-5 text-dark" >{{$course->name}}</h2>
          <p class="lead text-dark">{{$course->description}}</p>
        </div>
      </div> 
    </a>
    @endforeach
    </div>
   

    
@endsection

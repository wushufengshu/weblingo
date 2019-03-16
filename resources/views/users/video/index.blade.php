@extends('users.layouts.master2')

@section('content')


<div class="container col">

      <div class="row ">

        <div class="col-md-12  blog-main bg-transparent ">

          <div class=" col-* ">
            <div class="row p-0" style="background: #F9A159; height: 450px;">
              <div class="p-5 col-md-4  mx-auto">
                <div class="h-50">
                  <h1 class=""><b>{{$video->title}}</b></h1>
                <p class="h4">{{$video->description}}</p>
                </div>
                <p data-feather="list" class="mr-2"></p>{{count($video->media)}} episodes

              </div>

              <div class="col-md-4 mr-auto mt-2 border-dark">
                @foreach($medium as $media)
                <div class=" bg-transparent pt-5 " style="">
                  <div class="">
                    <p class="h4"><b>Lesson Preview</b></p>
                  </div>
                  <h4 class="p-2 ">{{$media->title}}</h4>
                  <div class="embed-responsive embed-responsive-16by9  bg-dark">
                    
                    <video id="video-active" class="video-active" width="400" height="400" controls>
                      <source class="embed-responsive-item" src="{{URL::asset('storage/videos/' . $media->video.'.'.$media->ext)}}" type="{{$media->mime_type}}">
                    </video>
                    
                  </div>
                </div>
                @endforeach 
              </div>
            </div>
          </div>
        </div>
{{--           @foreach($medium as $media)
          <div class="card bg-transparent py-5 my-5"><h2>{{$media->title}}</h2>
            <div class="embed-responsive embed-responsive-21by9  bg-dark">
            	<video width="320" height="240" controls>
            	  <source src="{{URL::asset('storage/videos/' . $media->video.'.'.$media->ext)}}" type="{{$media->mime_type}}">
             	</video>
              </div>
            	<div class="row container p-3 ml-3">
      			     <p class="h5">{{$media->description}}</p>
      			  </div>
          </div>
    			
          @endforeach --}}
          @foreach($video->media as $media)
            
          {{-- <a href="/video/{{$video->slug}}/{{$media->id}}">{{$media->title}}</a> --}}
          <div class="row col-md-8 mx-auto pt-4">
            <div class="col-md-3">
              <img src="/storage/images/thegreatestkid_1544498126.jpg" alt Logo" class=" pl-2  mx-auto py-2"  style="height: 200px;background: transparent; width: 200px;">
            </div>
            <div class="col-md-7 ">
              <h5 class="text-muted pt-2">Episode {{$loop->iteration}}</h5>

              <h4 class="text-left">
                <a href="{{route('user.media', [$video->slug , $media->id]) }}" class="pt-2">{{$media->title}}</a>
              </h4>
              {{$media->description}}
            </div>
            
          </div>
          @endforeach
          <!-- /.blog-post -->

          {{-- {{$sidebar}} --}}
          

        </div><!-- /.blog-main -->

        {{-- @include('users.course.sidebar') --}}
        <!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection

<script>
  $(document).ready(function(){
  $("#video-active").on(
    "timeupdate", 
    function(event){
      onTrackedVideoFrame(this.currentTime, this.duration);
    });
});

function onTrackedVideoFrame(currentTime, duration){
    $("#current").text(currentTime); //Change #current to currentTime
    $("#duration").text(duration)
}
</script>
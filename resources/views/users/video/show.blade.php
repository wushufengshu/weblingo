@extends('users.layouts.master2')

@section('content')
<div class="container col bg-dark">
	<div class="col-md-8 mx-auto">
	@foreach($medium as $media)
		<div class="embed-responsive embed-responsive-16by9  bg-dark">
		    
		    <video id="video-active" class="video-active" width="400" height="400" controls>
		      <source class="embed-responsive-item" src="{{URL::asset('storage/videos/' . $media->video.'.'.$media->ext)}}" type="{{$media->mime_type}}">
		    </video>
		    
		</div>
    
    </div>
</div>
<div class="container col-md-10 mt-5" >
		<div class="row col">
			
	        
		</div>
</div>
<div class="row container col-md-10 mx-auto">
	<div class="row col-md-9 p-0 m-0 h-75 ">
		<div class="col-md-3">
          	<img src="/storage/images/thegreatestkid_1544498126.jpg" alt Logo" class=" pl-2  mx-auto py-2"  style="height: 200px;background: transparent; width: 200px;">
        </div>
        <div class="col-md-8 h-50">
        	<div class="row col-md-12 pt-0 pl-0 ml-0">
				
				<div class="alert " role="alert">
				  <h1 class="alert-heading pt-0">{{$media->title}}</h1>
				  <p class="h4">{{$media->description}}</p>
				  <p class="mb-0 text-muted">Published Date: {{$media->created_at->toFormattedDateString()}}</p>
				</div>
        	</div>
        	<p class="h6 "></p>
        </div>
        <div class="col-md-12">
    	<hr>
    	<div class="card m-0 bg-transparent">
			<div class="card-block">
				<form method="POST" action="{{route('comment.store', [$video->slug, $media->id])}}">
					@csrf
					@method('POST')
					<div class="row ">
						<input type="hidden" value="{{$media->id}}" name="media_id">
						<div class="form-group col-md-12 m-0 row">
							<textarea name="body" id="" class="form-control col-md-11" cols="25" rows="2" placeholder="Add comment here"></textarea>
							<button type="submit" class="col ml-2 mr-2 btn btn-primary"><span data-feather="corner-down-left"></span></button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
		<hr>
		<div class="comments ">
			
			<ul class="list-group">
				@foreach($media->comments as $comment)
					<li class="list-group-item bg-transparent">
						<strong>
							<h4>{{$comment->user->first_name}} {{$comment->user->last_name}}</h4> 
							
						</strong><span class="text-muted t">{{$comment->created_at->diffForHumans() }}</span>
						{{$comment->body}}
					</li>

				@endforeach
			</ul>
		</div>
        </div>
	</div>
	

	<div class="col-md-3">
		<div class="col-md-12">
			<ul class="list-group list-unstyled">
        	@foreach($video->media as $links)
        		<li class="wl-hover">
        			<div class="row">
        				<div class="col-md-2" style="background: #abacad">
        					<p class="mx-auto text-center justify-content-center">{{$loop->iteration}}</p>
        				</div><a class="text-nowrap  " href="{{route('user.media', [$video->slug , $links->id]) }}">
        				<div class="col-md-10">
        					Episode: {{$loop->iteration}}
		        			<br>
		        			{{$links->title}}
        				</div></a>
        			</div>
        			
        		</li>
        		<br>
        	@endforeach
        	</ul>
        </div>
	</div>
</div>
@endforeach
@endsection
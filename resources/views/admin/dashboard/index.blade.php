@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
@endsection
@section('content')
	
    <div class="row container-fluid">
	    <div class="card col-md-3 mb-2 bg-primary text-white bg-primary rounded-0"  style="max-width: 15rem;">
	      <div class="card-body text-light">
	        <h5 class="card-title">Primary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	      </div>
	    </div>
		  

	    <div class="card col-md-3 bg-danger mb-2 text-white bg-primary rounded-0"  style="max-width: 15rem;">
	      <div class="card-body text-light">
	        <h5 class="card-title">Primary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	      </div>
	    </div>

	    <div class="card col-md-3 bg-success mb-2 text-white bg-primary rounded-0"  style="max-width: 15rem;">
	      <div class="card-body text-light">
	        <h5 class="card-title">Primary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	      </div>
	    </div>
	    <div class="card col-md-3 bg-info mb-2 text-white bg-primary rounded-0"  style="max-width: 15rem;">
	      <div class="card-body text-light">
	        <h5 class="card-title">Primary card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	      </div>
	    </div>
  	</div>
	<div class="card bg-dark text-center" style="width: 15rem;">
		
		<ul  class="list-unstyled list-group-flush">
			@foreach($archives as $course)
			<li class="list-group-item bg-dark text-light">
				<a href="{{route('course.show', $course->slug)}}">
					{{$course->name}}
				</a>
			</li>
			@endforeach
			<li class="list-group-item  bg-dark text-light">
				<a class="btn btn-primary" href="{{ route('course.create') }}">Add Course </a>
			</li>
			
		</ul>		
	</div>
@endsection

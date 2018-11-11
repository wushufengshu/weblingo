@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
@endsection
@section('content')

	<div class="card text-center" style="width: 10rem;">
		
		<ul  class="list-unstyled list-group-flush">
			@foreach($archives as $course)
			<li class="list-group-item">
				<a href="{{route('course.show', $course->slug)}}">
					{{$course->name}}
				</a>
			</li>
			@endforeach
			<li class="list-group-item">
				<a class="btn btn-primary" href="{{ route('course.create') }}">Add Course </a>
			</li>
			
		</ul>


	    

		
	</div>
@endsection

@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Course</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
      @if(auth()->user()->admin_at == 'Super Admin')
      
        <a class="btn btn-primary" href="{{ route('course.create') }}">Add Course </a>
      @endif
    </div>
</div>
@endsection
@section('content')

<div class="table-responsive">
	
	<div class="table-responsive form-group col-md-12">
		{{-- 
		
                <a class="nav-link text-secondary collapse" id="collapse" href="{{route('course.show', $course->slug)}}">{{$course->name}}</a>


            @endforeach --}}
		<table class="table table-hover mw-100" border="0">
			
			<tr class="table-active">
				<th width="15%">Name</th>
				<th width="25%">Description</th>
				<th width="15%">Course Image</th>
				<th width="15%">Slug</th>
				<th>Date Created</th>
				<th class="text-center"width="20%">Action</th>
			</tr>

			@foreach($courses as $course)
			<tr>
				<td><a href="{{route('course.show', $course->slug)}}">{{$course->name}}</a> </td>
				<td>{!!$course->description!!}</td>
				<td><img src="/storage/images/{{$course->image}}" alt="{{$course->name}} Logo" style="height: 50px; width: 50px;"></td>
				<td>{{$course->slug}}</td>
				<td>{{$course->created_at->toFormattedDateString()}}</td>
				<td>
					<div class="form-group row">

						<a href="{{ route('course.edit', $course->id) }}" class="btn btn-secondary mx-auto">Update</a>

						<form method="POST" class="mx-auto" action="course/{{$course->id}}">
							@method('DELETE')
							@csrf
							<div class="field">
								<div class="control">
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</form>
					</div>
				</td>
			</tr>
			@endforeach

		</table>
	</div>
	
</div>
@endsection

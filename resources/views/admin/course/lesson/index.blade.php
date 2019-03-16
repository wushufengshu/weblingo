@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2"><img src="/storage/images/{{$course->image}}" alt="{{$course->name}} Logo" style="height: 30px; width: 30px;">{{$course->name}} </h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<a class="btn btn-primary" href="{{route('lesson.create', $course_slug)}}"><span data-feather="file-plus" style="margin-right: 5px;"> </span>Add Lesson</a>
    </div>
</div>
@endsection
@section('content')
{{-- @foreach($lessons as $lesson)

<ul class="list-unstyled list-group">
    <li class="list-item">
    	<a href="{{route('lesson.show', [$course_slug, $lesson->slug])}}">
    		{{$lesson->title}}
    	</a>
    </li>
</ul>
@endforeach --}}

<div class="table-responsive form-group col-md-12">
		
		<table class="table table-hover" border="0">
			
			<tr class="table-active">
				<th >Title</th>
				<th>Slug</th>
				<th class="text-center" width="20%">Action</th>
			</tr>
			@foreach($lessons as $lesson)
			<tr>
				<td><a href="{{route('lesson.show', [$course_slug, $lesson->slug])}}">{{$lesson->title}}</a></td>
				<td>{{$lesson->slug}}</td>
				<td>
					<div class="form-group row">

						<a href="{{ route('lesson.edit', $lesson->id) }}" class="btn btn-secondary mx-auto">Update</a>

						<form method="POST" class="mx-auto" action="{{route('lesson.destroy', $lesson->id)}}">
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

@endsection

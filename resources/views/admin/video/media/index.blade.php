@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Video Tutorial</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<a class="btn btn-primary" href="{{ route('video.create') }}">Create Video Tutorials</a>
    </div>
</div>
@endsection
@section('content')

	
	<div class="table-responsive form-group col-md-12">
		
		<table class="table table-hover" border="0">
			
			<tr class="table-active">
				<th width="15%">Title</th>
				<th>Created By</th>
				<th width="15%">Slug</th>
				<th width="20%">Description</th>
				<th width="15%">Number of videos</th>
				<th class="text-center" width="15%">Action</th>
			</tr>
			@foreach($videos as $video)
			<tr>
				<td><a href="{{route('video.show', $video->slug)}}">{{$video->title}}</a></td>
				<td>{{$video->admin->first_name}}</td>
				<td>{{$video->slug}}</td>
				<td>{{$video->description}}</td>
				<td>{{count($video->media)}}</td>
				<td>
					<div class="form-group row">

						<a href="{{ route('video.edit', $video->slug) }}" class="btn btn-secondary mx-auto">Update</a>

						<form method="POST" class="mx-auto" action="{{route('video.destroy', $video->id)}}">
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

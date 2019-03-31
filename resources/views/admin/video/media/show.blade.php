@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">{{$video->title}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Upload Video</button>

		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		    	<div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Video</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      	</div>
		      <div class="modal-body">
		      	<form method="POST" action="{{ route('video.add', $video->id) }}" enctype="multipart/form-data">    
		     	@method('POST')
		      	@csrf
			      	<input type="hidden" name="video_id" value="{{$video->id}}">

			      	<div class="form-group row">
				        <label for="title" class="col-md-2 col-form-label ">Title</label>
				        <div class="col-md-10">
				        	<input id="title" type="text" class="form-control" name="title" value="" placeholder="Title" required autofocus>
				        </div>
				    </div>
				    <div class="form-group row">
				        <label for="video" class="col-md-2 col-form-label ">Video</label>
				        <div class="col-md-10">
				        	<input id="video" type="file" class="form-control-file" name="video">
				        </div>
				    </div>
				    <div class="form-group row">
				        <label for="description" class="col-md-2 col-form-label ">Description</label>
				        <div class="col-md-10">
				        	<textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description" required=""></textarea>
				        </div>
				    </div>
			        
			      @include('admin.layouts.errors')
	      		
		      	</div>
		      	<div class="modal-footer">
		      		<button type="submit" class="btn btn-primary">Upload</button>
		      	</div>
		      </form>
		      </div>
		    </div>
		  </div>
    </div>
</div>
@endsection
@section('content')

	<div class="wrapper container">
		<div class="form-group row">
		    <label for="search" class="col-md-3 h3 "></label>
		    <div class="col-md-5 mx-auto">
		      
		    </div>
	 	 </div>
	</div>
	
	
	<div class="table-responsive form-group col-md-12">
		
		<table class="table table-hover" border="0">
			
			<tr class="table-active">
				<th >Video Title</th>
				<th>Video</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
			@foreach($video->media as $media)
			<tr>
				<td>{{$media->title}}</td>
				<td>{{$media->video}}</td>
				<td>{{$media->description}}</td>
				<td>
					<div class="form-group row">

						<a href="{{ route('video.edit', $video->id) }}" class="btn btn-secondary mx-auto">Update</a>

						<form method="POST" class="mx-auto" action="{{route('media.destroy', $media->id) }}">
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

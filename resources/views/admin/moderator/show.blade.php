@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Admin</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
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
	
	
	
	<div class="table-responsive form-group col-md-10">
		
		<table class="table table-hover" border="0">
			
			<tr class="table-active">
				<th width="20%">Name</th>
				<th width="25%">Email</th>
				<th width="35%">Address</th>
				<th class="text-center">Action</th>
			</tr>
			<tr>
				<td>{{$admin->first_name}} {{$admin->last_name}}</td>
				<td>{{$admin->email}}</td>
				<td>{{$admin->address}}</td>
				<td>
					<div class="form-group row">

						<a href="{{ route('moderator.edit', $admin->id) }}" class="btn btn-secondary mx-auto">Update</a>

						<form method="POST" class="mx-auto" action="{{route('moderator.destroy', $admin->id) }}">
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
		</table>
		
	</div>
	
@endsection

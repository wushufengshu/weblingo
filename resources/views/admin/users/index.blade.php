@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Users</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<a class="btn btn-primary" href="{{ route('users.create') }}">Create an user </a>
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
		
		<table class="table table-hover mw-100" border="0">
			
			<tr class="table-active">
				<th width="20%">Name</th>
				<th width="25%">Email</th>
				<th width="15%">Date Registered</th>
				<th width="15%">Date Verified</th>
				<th class="text-center"width="20%">Action</th>
			</tr>
			@foreach($users->all() as $user)
			<tr>
				<td><a href="{{ route('users.show', $user->id) }}">{{$user->first_name}} {{$user->last_name}}</a> </td>
				<td> {{$user->email}} </td>
				<td> {{$user->created_at->toFormattedDateString()}} </td>
				<td>@if($user->email_verified_at != null)
						{{$user->email_verified_at}}
					@else
						 Not yet verified
					@endif
				</td>
				<td>
					<div class="form-group row">

						<a href="{{ route('users.edit', $user->id) }}" class="btn btn-secondary mx-auto">Update</a>

						<form method="POST" class="mx-auto" action="users/{{$user->id}}">
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
		{{$users->links()}}
		
	</div>
	
@endsection

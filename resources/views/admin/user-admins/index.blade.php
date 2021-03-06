@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Admins</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<a class="btn btn-primary" href="/admin/user-admin/create">Create an user admin  <span data-feather="user-plus"></span></a>
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
				<th width="15%">Name</th>
				<th width="20%">Email</th>
				<th width="30%">Address</th>
				<th>Adminstrator at</th>
				<th class="text-center" width="20%">Action</th>
			</tr>
			{{-- @foreach($admins->except(Auth::id()) as $admin) --}}
			@foreach($admins as $admin)
			<tr>
				<td><a href="{{ route('user-admin.show', $admin->id) }}">{{$admin->first_name}} {{$admin->last_name}}</a> </td>
				<td> {{$admin->email}} </td>
				<td> {{$admin->address}} </td>
				<td> {{$admin->admin_at}} </td>
				<td>
					<div class="form-group row">

						<a href="{{ route('user-admin.edit', $admin->id) }}" class="btn btn-secondary mx-auto">Update</a>

						<form method="POST" class="mx-auto" action="user-admin/{{$admin->id}}">
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
		{{$admins->links()}}
		
	</div>
	
@endsection

@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Users</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    </div>
</div>
@endsection
@section('content')

	<div class="wrapper container">
		<div class="form-group row">
		    <label for="search" class="col-md-3 h3 ">User</label>
		    <div class="col-md-5 mx-auto">
		      
		    </div>
	 	 </div>
	</div>
	
	
	
	<div class="table-responsive form-group col-md-10">
		
		<table class="table table-hover" border="0">
			
			<tr class="table-active">
				<th >Name</th>
				<th>Email</th>
				<th>Address</th>
			</tr>
			<tr>
				<td>{{$user->first_name}} {{$user->last_name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->address}}</td>
			</tr>
		</table>
		
	</div>
	
@endsection

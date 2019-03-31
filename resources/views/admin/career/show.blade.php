@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">{{$career->job}}</h1>
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
	
	
	
	<div class="table-responsive form-group col-md-12">
		
		<table class="table table-hover" border="0">
			
			<tr class="table-active">
				<th width="15%">Job</th>
				<th width="25%">Job Description</th>
				<th width="15%">Employment Type</th>
				<th width="15%">Duties</th>
				<th>Requirements</th>
				<th class="text-center"width="20%">Action</th>
			</tr>

			<tr>
				<td>{{$career->job}}</td>
				<td> {{$career->job_description}} </td>
				<td> {{$career->employment_type}} </td>
				<td> {{$career->duties}} </td>
				<td> {{$career->requirements}} </td>
				<td>
					<div class="form-group row">

						<a href="{{ route('careers.edit', $career->id) }}" class="btn btn-secondary mx-auto">Update</a>

						<form method="POST" class="mx-auto" action="{{route('careers.destroy', $career->id) }}">
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

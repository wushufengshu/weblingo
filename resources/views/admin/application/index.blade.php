@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Application</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
      @if(auth()->user()->admin_at == 'Super Admin')
      
        <a class="btn btn-primary" href="{{ route('careers.create') }}">Add job </a>
      @endif
    </div>
</div>
@endsection
@section('content')
<div class="table-responsive">
	
	<div class="table-responsive form-group col-md-12">
		
		<table class="table table-hover mw-100" border="0">
			
			<tr class="table-active">
				<th width="15%">Name</th>
				<th width="15%">Contact Number</th>
				<th width="15%">Email</th>
				<th width="25%">Short Description</th>
				<th>Requirements</th>
				<th class="text-center"width="20%">Action</th>
			</tr>
			@foreach($application as $applicant)
			<tr>
				<td><a href="{{ route('application.show', $applicant->id) }}">{{$applicant->first_name}} {{$applicant->last_name}}</a> </td>
				<td> {{$applicant->contact_number}} </td>
				<td> {{$applicant->email}} </td>
				<td> {{$applicant->short_description}} </td>
				<td> <a href="{{URL::asset('storage/pdf/'.$applicant->name .'.'. $applicant->ext)}}" target="_blank">{{$applicant->name}}</a></td>
				<td>
					<div class="form-group row">
						<form method="POST" class="mx-auto" action="{{route('application.destroy', $applicant->id) }}">
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
				{{-- <td>
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
				</td> --}}
			</tr>
			@endforeach

		</table>

			

		</table>
	</div>
	
</div>
@endsection

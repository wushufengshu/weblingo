@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Careers</h1>
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
		{{-- 
		
                <a class="nav-link text-secondary collapse" id="collapse" href="{{route('course.show', $course->slug)}}">{{$course->name}}</a>


            @endforeach --}}
		<table class="table table-hover mw-100" border="0">
			
			<tr class="table-active">
				<th width="15%">Job</th>
				<th width="25%">Job Description</th>
				<th width="15%">Employment Type</th>
				<th width="15%">Duties</th>
				<th>Requirements</th>
				<th class="text-center"width="20%">Action</th>
			</tr>

			@foreach($careers as $career)
			<tr>
				<td>{{$career->job}}</td>
				<td> {{$career->job_description}} </td>
				<td> {{$career->employment_type}} </td>
				<td> {{$career->duties}} </td>
				<td> {{$career->requirements}} </td>
			</tr>
			@endforeach

		</table>
	</div>
	
</div>
@endsection

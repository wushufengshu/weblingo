@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">User</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    </div>
</div>
@endsection
@section('content')

	<div class="wrapper container">
		<div class="form-group row">
		    <div class="col-md-5 ">
	    	<h1 class="h1">{{$user->first_name}} {{$user->last_name}}</h1>
	      	Email: {{$user->email}} <br>
			Created at: {{$user->created_at->toFormattedDateString()}}
		</div>
	</div>
	<hr>
			
			
	 <div class="table-responsive form-group col-md-2">
		<h3>Quiz Record</h3>
		<span>Quiz Attempt: {{count($user->tests_result)}}</span>
		<table class="table table-hover table-striped" border="0">
			
			<tr class="table-active">
				<th></th>
				<th class="text-center">Score</th>
			</tr>
			@foreach($user->tests_result as $result)
			<tr>
				<td>{{$loop->iteration}}).</td>
				<td class="text-center">{{$result->tests_result}}</td>
			</tr>
			@endforeach
		</table>	
    </div>	
@endsection

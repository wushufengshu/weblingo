@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Reports</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	{{-- <a class="btn btn-primary" href="{{ route('users.create') }}">Create an user </a> --}}
    </div>
</div>
@endsection
@section('content')
	
	<div class="table-responsive form-group col-md-12">
		
		<table class="table table-hover mw-100" border="0">
			
			<tr class="table-active">
				<th width="20%">Reports</th>
				<th width="25%">Date and time</th>
			</tr>
			{{-- {{$tests_result}} --}}

			{{-- @foreach($tests_result as $result)
				{{$result->admin}}
			@endforeach --}}
			
			@foreach($reports as $report)
			<tr>
				<td>{{$report->report}}</td>
				<td>{{$report->created_at->diffForHumans()}}</td>
			</tr>
				
			@endforeach
					{{-- 	@foreach($quizzes as $quiz)
			<tr>
				<td><a href="{{ route('quiz.show', $quiz->slug) }}">{{$quiz->name}}</a></td>
				<td>{{count($quiz->questions)}}</td>
				<td>{{$quiz->tests_results->where('quiz_id', $quiz->id)->avg('tests_result')}}</td>
				<td>{{$quiz->tests_results->max('tests_result')}}</td>
				<td>
					<div class="form-group row">

						<a href="{{ route('quiz.edit', $quiz->id) }}" class="btn btn-secondary mx-auto">Update</a>

						<form method="POST" class="mx-auto" action="{{route('quiz.destroy', $quiz->id)}}">
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
			@endforeach --}}
			

		</table>
	</div>
	
@endsection

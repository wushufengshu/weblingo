@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Quiz</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	{{-- <a class="btn btn-primary" href="{{ route('quiz.quiz_details') }}">Create Quiz </a>  --}}
    	<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		  Create Quiz
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Create Quiz</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form method="POST" action="{{ route('quiz.store') }}">    
			      @method('POST')
			      @csrf
			      <div class="form-group row">
			        <label for="quiz_name" class="col-md-2 col-form-label ">Quiz Name</label>
			        <div class="col-md-10">
			          <input id="quiz_name" type="text" class="form-control" placeholder="Enter quiz name" name="quiz_name" value="" required autofocus>
			        </div>
			      </div>

			      <div class="form-group row">
			        <label for="slug" class="col-md-2 col-form-label ">Slug</label>
			        <div class="col-md-10">
			          <input id="slug" type="text" class="form-control" placeholder="Enter slug" name="slug" value="" required autofocus>
			        </div>
			      </div>
			      @include('admin.layouts.errors')
			      
			    
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary float-right">Save</button>
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
		    {{-- <label for="search" class="col-md-3 h3 ">List of all Users</label>
		    <div class="col-md-5 mx-auto">
		      <input type="text" class="form-control col-md" id="search" placeholder="Search" aria-label="Search">
		    </div> --}}
	 	 </div>
	</div>
	<div class="table-responsive form-group col-md-12">
		
		<table class="table table-hover mw-100" border="0">
			
			<tr class="table-active">
				<th width="20%">Quiz</th>
				<th width="15%">Total Questions</th>
				<th>Average Result</th>
				<th>QuizWiz</th>
				<th class="text-center"width="20%">Action</th>
			</tr>
			@foreach($quizzes as $quiz)
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
			@endforeach

		</table>

	</div>
	
@endsection

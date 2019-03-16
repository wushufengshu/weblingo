@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">{{$quiz->name }} </h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
		<a class="btn btn-primary" href="{{route('questions.create', $quiz->slug)}}"><span data-feather="file-plus" style="margin-right: 5px;"> </span>Add Question</a>
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
		<table class="table table-hover table-striped" border="0">
			
			<tr class="table-active">
				<th width="5%"></th>
				<th width="50%">Questions</th>
				<th class="text-center">Answers</th>
				<th>Correct</th>
			</tr>
			@foreach($quiz->questions as $question)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$question->body}}</td>
				<td>
					@foreach($question->answers as $answer)
					{{$answer->answer}} <br>
					@endforeach
				</td>
				<td>
					{{-- {{$question->answers->where('correct', true)}} --}}
					@foreach($question->answers->where('correct', true) as $correct)
						{{$correct->answer}}
					@endforeach
				</td>
			</tr>
			@endforeach
		</table>	
    </div>	
	
@endsection

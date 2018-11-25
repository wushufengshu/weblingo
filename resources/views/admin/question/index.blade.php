@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Questions</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<a class="btn btn-primary" href="{{ route('questions.create') }}">Add Question </a>
    </div>
</div>
@endsection
@section('content')
	<div class="container card">
		<div class="">
		    <label for="" class="">All Questions</label>
		    <button type="submit" class="btn btn-primary float-right">
	            Save
	        </button>
	 	</div>
	    <hr>
	    <div class="table-responsive form-group col-md-12  container">
		<table class="table table-hover mw-100" border="0">
			
			<tr class="table-active">
				<th width="40%">Question</th>
				<th width="25%">Score</th>		
			</tr>
			@foreach($questions as $question)
			<tr>
				<td>{{$question->question}}</td>
				<td>{{$question->score}} points</td>
			</tr>
			@endforeach

		</table>
			
		
		</div>
		{{$questions->links()}}

  	</div>
	
	
@endsection

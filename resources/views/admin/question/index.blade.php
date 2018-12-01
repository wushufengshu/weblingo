@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Questions</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<a class="btn btn-primary" href="/admin/questions/create">Create Question</a>
    </div>
</div>
@endsection

@section('content')
  	<div class="wrapper container">
		<div class="form-group row">
		    <label for="search" class="col-md-3 h3 ">List of all Questions</label>
	 	 </div>
	</div>
	
	<div class="table-responsive form-group col-md-12">
		
		<table class="table table-hover mw-100" border="0">
			<tr class="table-active">
				<th width="40%">Question</th>
				<th width="25%">Score</th>		
			</tr>
			@foreach($questions as $question)
			<tr>
				<td>{!!$question->question!!}</td>
				<td>{{$question->score}} points</td>
			</tr>
			@endforeach

		</table>
		{{$questions->links()}}
		
	</div>
	
	
@endsection

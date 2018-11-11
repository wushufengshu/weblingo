@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Category</h1>
    
</div>
@endsection
@section('content')
<div class="table-responsive">
	
	<div class="table-responsive form-group col-md-10">
		
		<a class="btn btn-primary" href="{{ route('category.create') }}">Add Category </a>
		
	</div>
	
</div>
@endsection

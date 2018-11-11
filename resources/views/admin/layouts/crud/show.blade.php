@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Users</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    </div>
</div>
@endsection
@section('content')
<div class="table-responsive">

	<div class="wrapper container">
		<div class="form-group row">
		    <label for="search" class="col-md-3 h3 ">SLUG</label>
		    <div class="col-md-5 mx-auto">
		      
		    </div>
	 	 </div>
	</div>
	
	
	
	<div class="table-responsive form-group col-md-10">
		{{$category->name}}
		{{$slug}}
	</div>
	
</div>
@endsection

@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">{{$quiz->name }} Quiz</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
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
	<div class="container  row col-md-12">
		<div class="col-md-8 mw-100">
			<div class="card">
				
			</div>
		</div>
		<div class="col-md-4 mw-100">
			<div class="card">
				
			</div>
		</div>
		
	</div>
	
	
	
	{{-- <div class="table-responsive form-group col-md-10">
		
		<table class="table table-hover" border="0">
			
			<tr class="table-active">
				<th >Name</th>
				<th>Email</th>
				<th>Address</th>
			</tr>
			<tr>
				
			</tr>
		</table>
		
	</div> --}}
	{{-- <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{$quiz->name}}</h4>
        </div>
        <div class="card-body">
            
        </div>
    </div> --}}
</div>
	
@endsection

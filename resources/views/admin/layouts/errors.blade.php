@if(count($errors))

<div class="form-group">
	<div class="col-md-8">
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>


@endif
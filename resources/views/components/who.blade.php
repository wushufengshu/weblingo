@if(Auth::guard('web')->check())
	
	<p class="text-success">
		Your are logged in as a User
	</p>
@else
	<p class="text-danger">
		Your are logged Out as a User
	</p>

@endif
@if(Auth::guard('admin')->check())
	
	<p class="text-success">
		Your are logged in as a Admin
	</p>
@else
	<p class="text-danger">
		Your are logged Out as a Admin
	</p>

@endif
@if($flash = session('message'))
	<div class="alert alert-success flash-message">
		{{ $flash }}
	</div>
@endif
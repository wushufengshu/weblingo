@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">{{$course->name}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">

    	<div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<a class="btn btn-primary" href="#"><span data-feather="file-plus" style="margin-right: 5px;"> </span>Add another content</a>
    </div>
    </div>
</div>
@endsection
@section('content')
<div class="content-main">
	<div class="content-post">
	<h3 class="content-post-title">{{$content->title}}</h3>



	<p class="content-post-meta">
		{!!$content->body!!}
	</p>

	@foreach($content->code as $code)
		<article>
			
			<textarea id="html" placeholder="HTML">{!!$code->code!!}</textarea>
			<iframe id="code"></iframe>
		</article>
	@endforeach

 	
</div>
	
</div>


@endsection

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
		<h3 class="content-post-title">{{$lesson->title}}</h3>
		<hr>


		<p class="content-post-meta">
			{!!$lesson->body!!}
		</p>
		@foreach($codes as $code)
			{{-- <article>
				
				<textarea id="html" placeholder="HTML">{!!$code->html!!}</textarea>
				<iframe id="code"></iframe>
			</article> --}}
			<hr>
			<textarea name="html-code" class="form-control" id="" cols="30" rows="10">{!!$code->{"html-code"}!!}</textarea>
			

		@endforeach

	 	
	</div>
	
</div>

<script>
document.getElementById('add').onclick = function(){
	var totalIterations = document.getElementById('snippet_count').value;
	var output = document.getElementById('output');
	output.innerHTML = '';
	for(var i = 1; i <= totalIterations; i ++) {
	    setFrame(i);
	}
	console.log(totalIterations);
}

  
function setFrame(i) {
	var editorHTML = document.getElementById("html"+i).value;
	var editorCSS = document.getElementById("css"+i).value;
	var editorJS = document.getElementById("js"+i).value;
	var iframe = document.getElementById('code'+i);

	iframe.contentWindow.document.open();
	iframe.contentWindow.document.write(editorHTML + '<style>' + editorCSS + '</style>' + '<script>' + editorJS +'</scr'+'ipt>');
	iframe.contentWindow.document.close();
}
</script>


@endsection

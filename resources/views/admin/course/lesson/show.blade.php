@extends('admin.layouts.master')
@section('page-name')
<div class="row">
<h1 class="h2 pr-2">{{$lesson->title}}</h1>

    
  <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    {{-- <form action="{{route('lesson.add_snippet', $course->slug)}}" method="POST"> 
      @method('POST')
      @csrf
      <input type="hidden" id="snippet_count" min="0" max="5"  placeholder="Add Snippet" class="" style="width: 6rem" name="add_snippet" value="1" required>
      <input type="submit" id="add" name="add" class="btn btn-success" value="Add snippet">
      
    </form> --}}
    <a href="{{route('code.create', [$course->slug, $lesson->slug])}}" class="btn btn-primary">Add lesson content</a>
    <div class="" id="output"></div>

    

  </div> 
</div>
{{--<div class="row">
<h1 class="h2">{{$course->name}}</h1>
     <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Upload Video</button>

		<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		    	<div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Video</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
		      	</div>
		      <div class="modal-body">
		      	<form method="POST" action="{{ route('lesson.store') }}">   
					  <div class="col-md-12 card-body" id="add_snippet">
					      @method('POST')
					      @csrf
					      <input type="hidden" value="{{$course->slug}}" name="course_slug">
					      <input type="hidden" value="{{$course->id}}" name="course_id">
					      <input type="hidden" value={{$snippet_count}} name="snippet_count">
					      <div class="form-group row">
					        <label for="title" class="col-md-2 col-form-label ">Lesson Title</label>
					        <div class="col-md-10">
					          <input id="title" type="text" class="form-control" name="title" value="" placeholder="Lesson title" required autofocus>
					        </div>
					      </div>
					      <div class="form-group row">
					        <label for="slug" class="col-md-2 col-form-label ">Page Title</label>
					        <div class="input-group col-md-10">
					          <div class="input-group-prepend">
					            <span class="input-group-text" id="course_slug">{{$course->slug }}/</span>
					          </div>
					          <input id="slug" type="text" class="form-control" name="slug" placeholder="Page title" value="" required autofocus aria-describedby="course_slug">
					        </div>
					      </div>

					      <div class="form-group row" id="row">
					        <label for="body" class="col-md-2 col-form-label ">Body</label>
					        <div class="col-md-10">
					          <textarea id="body"  class=" form-control ckeditor" name="body" placeholder="Content body" value="" rows="5" required autofocus></textarea> 
					        </div>
					      </div>
					      
					    
					      
					    
					    @if($snippet_count > 0)
					      @foreach(range(1, $snippet_count) as $code_count)
					      <hr>
					      <div class="form-group row" id="row{{$code_count}}">
					        <label for="heading-body" class="col-md-2 col-form-label ">Snippet{{$code_count}}</label>
					        <div class="col-md-10" id="add_snippet">
					          
					          <div class="input-group mb-3">        
					            <input id="heading" type="text" class="form-control form-control-md col-md-12" name="heading_{{$snippet_count}}" placeholder="Code Heading" value="" required autofocus">
					            <div class="input-group-append">
					              <button name="remove" id="{{$code_count}}" class="btn btn-outline-secondary bg-danger text-light btn_remove">x</button>
					            </div>
					          </div>
					          <textarea id="heading_body"  class=" form-control ckeditor" name="heading_body_{{$snippet_count}}" placeholder="Heading body" value="" rows="5" required autofocus></textarea> 

					          <ul class="nav nav-tabs nav-justified" role="tablist">
					            <li class="nav-item">
					              <a class="nav-link" href="#html-editor{{$code_count}}" role="tab" data-toggle="tab">HTML</a>
					            </li>
					            <li class="nav-item">
					              <a class="nav-link" href="#css-editor{{$code_count}}" role="tab" data-toggle="tab">CSS</a>
					            </li>
					            <li class="nav-item">
					              <a class="nav-link" href="#javascript-editor{{$code_count}}" role="tab" data-toggle="tab">JAVASCRIPT</a>
					            </li>
					            <li class="nav-item">
					              <a class="nav-link" href="#preview{{$code_count}}" role="tab" data-toggle="tab" >Preview</a>
					            </li>
					          </ul>

					          <div class="tab-content">
					            <div role="tabpanel" class="card text-white bg-success tab-pane fade in m-0 p-0" id="preview{{$code_count}}" >
					              <div class="card-body  m-0 p-1">
					                <iframe id="code{{$code_count}}"  class="codeeditor-iframe " ></iframe>
					              </div>
					            </div>

					            <div role="tabpanel" class="card text-white bg-danger tab-pane fade m-0 p-0 active" id="html-editor{{$code_count}}">
					              <div class="card-body  m-0 p-1">
					                 <textarea id='html{{$code_count}}' placeholder="HTML Codes here" class="codeeditor-textarea" name="html_code_{{$snippet_count}}" autofocus value=""  onkeyup="setFrame({{$code_count}});"></textarea>
					              </div>
					            </div>

					            <div role="tabpanel" class="card text-white bg-primary tab-pane fade m-0 p-0" id="css-editor{{$code_count}}">
					              <div class="card-body  m-0 p-1">
					                <textarea id="css{{$code_count}}" placeholder="CSS Codes here" class="codeeditor-textarea" name="css_code_{{$snippet_count}}" autofocus value=""  onkeyup="setFrame({{$code_count}});"></textarea>

					              </div>
					            </div>

					            <div role="tabpanel" class="card text-white bg-warning tab-pane fade m-0 p-0" id="javascript-editor{{$code_count}}">
					              <div class="card-body  m-0 p-1">
					                <textarea id="js{{$code_count}}" placeholder="JavaScript Codes here" class="codeeditor-textarea" name="javascript_code_{{$snippet_count}}" onkeyup="setFrame({{$code_count}});" autofocus value="" ></textarea> 
					              </div>
					            </div>

					          </div>
					        </div>
					      </div>
					        @endforeach
					        @endif
					    
					      
					      @include('admin.layouts.errors')
					     

					    
					  </div>
	      		
		      	</div>
		      	<div class="modal-footer"><button type="submit" class="btn btn-primary float-right">
			        Save content
			    </button>
		      	</div>
		      </form>
		      </div>
		  </div>
		</div>
    </div> 
</div>--}}
@endsection
@section('content')
<div class="table-responsive form-group col-md-12">
		<table class="table table-hover" border="0">
			
			<tr class="table-active">
				<th width="20%">Heading</th>
				<th>Heading Body</th>
				<th>Code</th>
			</tr>
			@foreach($lesson->code as $code)
			<tr>
				<td>{{$code['heading']}}</td>
				<td>{!!$code->heading_body!!} </td>
				<td>{{$code->html_code}}</td>
			</tr>
			@endforeach
		</table>
		
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

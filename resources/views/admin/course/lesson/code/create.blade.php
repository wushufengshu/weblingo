@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2 pr-2">Add lesson content to {{$lesson->title}}</h1>

    
  <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
{{--     <form action="{{route('lesson.add_snippet', $course->slug)}}" method="POST"> 
      @method('POST')
      @csrf
      <input type="hidden" id="snippet_count" min="0" max="5"  placeholder="Add Snippet" class="" style="width: 6rem" name="add_snippet" value="1" required>
      <input type="submit" id="add" name="add" class="btn btn-success" value="Add snippet">
      
    </form>
    <div class="" id="output"></div>
 --}}
    

  </div> 
</div>

@endsection
@section('content')
<div class=" container row m-0 card bg-transparent">
<form method="POST" action="{{ route('code.store', [$course->slug, $lesson->slug] ) }}">   
  <div class="col-md-12 card-body" id="add_snippet">
      @method('POST')
      @csrf
      <input type="hidden" value="{{$course->slug}}" name="course_slug">
      <input type="hidden" value="{{$lesson->slug}}" name="lesson_slug">
      <input type="hidden" value="{{$course->id}}" name="course_id">
      <input type="hidden" value="{{$lesson->id}}" name="lesson_id">
      <div class="form-group row" id="row{{$code_count}}">
        <label for="heading-body" class="col-md-2 col-form-label ">Snippet</label>
        <div class="col-md-10" id="add_snippet">
          
          <div class="input-group mb-3">        
            <input id="heading" type="text" class="form-control form-control-md col-md-12" name="heading" placeholder="Code Heading" value="" required autofocus">
            <div class="input-group-append">
              <button name="remove" id="{{$code_count}}" class="btn btn-outline-secondary bg-danger text-light btn_remove">x</button>
            </div>
          </div>
          <textarea id="heading_body"  class=" form-control ckeditor" name="heading_body" placeholder="Heading body" value="" rows="5" required autofocus></textarea> 

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

            <div role="tabpanel" class="card text-white bg-danger tab-pane = m-0 p-0 active" id="html-editor{{$code_count}}">
              <div class="card-body  m-0 p-1">
                 <textarea id='html{{$code_count}}' placeholder="HTML Codes here" class="codeeditor-textarea" name="html_code" autofocus value=""  onkeyup="setFrame({{$code_count}});"></textarea>
              </div>
            </div>

            <div role="tabpanel" class="card text-white bg-primary tab-pane fade m-0 p-0" id="css-editor{{$code_count}}">
              <div class="card-body  m-0 p-1">
                <textarea id="css{{$code_count}}" placeholder="CSS Codes here" class="codeeditor-textarea" name="css_code" autofocus value=""  onkeyup="setFrame({{$code_count}});"></textarea>

              </div>
            </div>

            <div role="tabpanel" class="card text-white bg-warning tab-pane fade m-0 p-0" id="javascript-editor{{$code_count}}">
              <div class="card-body  m-0 p-1">
                <textarea id="js{{$code_count}}" placeholder="JavaScript Codes here" class="codeeditor-textarea" name="javascript_code" onkeyup="setFrame({{$code_count}});" autofocus value="" ></textarea> 
              </div>
            </div>

          </div>
        </div>
      </div>
      <hr>
    @include('admin.layouts.errors')
     <button type="submit" class="btn btn-primary float-right">
        Save content
    </button>

      
     {{--  --}}

    
  </div>
</form>
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


$(document).ready(function(){  
  $(document).on('click', '.btn_remove', function(){  
    var button_id = $(this).attr("id");   
    $('#row'+button_id+'').remove();  
  });  
});
</script>


@endsection

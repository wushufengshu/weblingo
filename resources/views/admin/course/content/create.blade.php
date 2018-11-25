@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2 pr-2">Add Course Content to {{$course->name}}</h1>

    <form action="{{route('content.add_snippet', $course->slug)}}" method="POST"> 
      @method('POST')
      @csrf
      <input type="number" id="snippet_count" min="0" max="5"  placeholder="Add Snippet" class="" style="width: 6rem" name="add_snippet" required>
      <input type="submit" id="add" name="add" class="btn btn-info" value="Go">
      
    </form><div class="" id="output"></div>

  <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    <form method="POST" action="{{ route('content.store') }}"> 
    <button type="submit" class="btn btn-success float-right">
        Add content
    </button>

  </div> 
</div>

@endsection
@section('content')
<div class=" container row m-0 card bg-light">
  
  <div class="col-md-12 card-body" id="add_snippet">
      @method('POST')
      @csrf
      <input type="hidden" value="{{$course->slug}}" name="course_slug">
      <input type="hidden" value="{{$course->id}}" name="course_id">
      <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label ">Content Title</label>
        <div class="col-md-10">
          <input id="title" type="text" class="form-control" name="title" value="" placeholder="Content title" required autofocus>
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
      <div class="form-group row" id="row{{$code_count}}">
        <label for="body" class="col-md-2 col-form-label ">Snippet{{$code_count}}</label>
        <div class="col-md-10" id="add_snippet">
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
              <input id="heading" type="text" class="form-control form-control-sm" name="heading" placeholder="Code Heading" value="" required autofocus">
            </li>
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
              <a class="nav-link active" href="#preview{{$code_count}}" role="tab" data-toggle="tab" >Preview</a>
            </li>
            <li>
              <a type="button" name="remove" id="{{$code_count}}" class=" form-control btn-danger btn_remove">x</a>
            </li>
            
          </ul>

          <div class="tab-content">
            <div role="tabpanel" class="card text-white bg-success tab-pane fade in m-0 p-0" id="preview{{$code_count}}" >
              <div class="card-body  m-0 p-1">
                <iframe id="code{{$code_count}}"  class="codeeditor-iframe " ></iframe>
              </div>
            </div>

            <div role="tabpanel" class="card text-white bg-danger tab-pane fade m-0 p-0" id="html-editor{{$code_count}}">
              <div class="card-body  m-0 p-1">
                 <textarea id='html{{$code_count}}' placeholder="HTML Codes here" class="codeeditor-textarea" name="html-code" autofocus  onkeyup="setFrame();"></textarea>
              </div>
            </div>

            <div role="tabpanel" class="card text-white bg-primary tab-pane fade m-0 p-0" id="css-editor{{$code_count}}">
              <div class="card-body  m-0 p-1">
                <textarea id="css{{$code_count}}" placeholder="CSS Codes here" class="codeeditor-textarea" name="css-code" autofocus  onkeyup="setFrame();"></textarea>

              </div>
            </div>

            <div role="tabpanel" class="card text-white bg-warning tab-pane fade m-0 p-0" id="javascript-editor{{$code_count}}">
              <div class="card-body  m-0 p-1">
                <textarea id="js{{$code_count}}" placeholder="JavaScript Codes here" class="codeeditor-textarea" name="javascript-code" onkeyup="setFrame();" autofocus ></textarea> 
              </div>
            </div>

          </div>
        </div>
      </div>
        @endforeach
        @endif
    
      
      @include('admin.layouts.errors')
     

    
  </div>
  </form>
</div>

<script>

  // $("iframe").click(function() {    
  //       alert(this.id); // or alert($(this).attr('id'));
//   // });
//   function displayCode(id){
//     var editorHTML = document.getElementByClassName("html-code")[0]; alert(editorHTML)
//     var editorCSS = document.getElementByClassName("css-code").value;
//     var editorJS = document.getElementByClassName("javascript-code").value;
//     var iframe = document.getElementById('code'+id);


    

//     // iframe.contentWindow.document.open();
//     // iframe.contentWindow.document.write(editorHTML + '<style>' + editorCSS + '</style>' + '<script>' + editorJS +'</scr'+'ipt>');
//     // iframe.contentWindow.document.close();



//   }
  document.getElementById('add').onclick = function(){
    var totalIterations = document.getElementById('snippet_count').value;
    var output = document.getElementById('output');
    output.innerHTML = '';
    for(var i = 1; i <= totalIterations; i ++) {
        var item = document.createElement('div');
        item.innerHTML = i;
        output.appendChild(item);
    }
 console.log(totalIterations);
  }
 


  
 function setFrame() {
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

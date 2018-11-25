@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2 pr-2">Add Course Content to {{$course->name}}</h1>
    <form action="" method="POST"> 
      <button type="button" name="add" id="add" class="btn btn-info">Add Snippet</button>
    </form>
  <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    <form method="POST" action="{{ route('content.store') }}"> 
    <button type="submit" class="btn btn-success float-right">
        Go
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
          <textarea id="body"  class=" form-control" name="body" placeholder="Content body" value="" rows="5" required autofocus></textarea> 
        </div>
      </div>
      


    {{--   <div class="form-group row">
        <label for="body" class="col-md-2 col-form-label ">Snippet</label>
        <div class="col-md-10" id="add_snippet">
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
              <input id="heading" type="text" class="form-control form-control-sm" name="heading" placeholder="Code Heading" value="" required autofocus">
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#html-editor" role="tab" data-toggle="tab">HTML</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#css-editor" role="tab" data-toggle="tab">CSS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#javascript-editor" role="tab" data-toggle="tab">JAVASCRIPT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#preview" role="tab" data-toggle="tab" >Preview</a>
            </li>
            
          </ul>

          <div class="tab-content">
            <div role="tabpanel" class="card text-white bg-success tab-pane fade in m-0 p-0" id="preview">
              <div class="card-body  m-0 p-1">
                <iframe id="code1"  class="codeeditor-iframe active"></iframe>
              </div>
            </div>

            <div role="tabpanel" class="card text-white bg-danger tab-pane fade m-0 p-0" id="html-editor">
              <div class="card-body  m-0 p-1">
                 <textarea id="html1" placeholder="HTML Codes here" class="codeeditor-textarea" name="html-code" autofocus></textarea>
              </div>
            </div>

            <div role="tabpanel" class="card text-white bg-primary tab-pane fade m-0 p-0" id="css-editor">
              <div class="card-body  m-0 p-1">
                <textarea id="css1" placeholder="CSS Codes here" class="codeeditor-textarea" name="css-code" autofocus></textarea>
              </div>
            </div>

            <div role="tabpanel" class="card text-white bg-warning tab-pane fade m-0 p-0" id="javascript-editor">
              <div class="card-body  m-0 p-1">
                <textarea id="js1" placeholder="JavaScript Codes here" class="codeeditor-textarea" name="javascript-code" autofocus></textarea> 
              </div>
            </div>

          </div>
        </div>
      </div>  --}}      
      
      @include('admin.layouts.errors')
     

    
  </div></form>
</div>


<script type="text/javascript">
  function compile() {
    var html = document.getElementById("html"+i);
    var css = document.getElementById("css"+i);
    var js = document.getElementById("js"+i);
    var code = document.getElementById("code"+i).contentWindow.document;

    document.body.onclick = function() {
        code.open();
        code.writeln(
        html.value +
            "<style>" +
            css.value +
            "</style>" +
            "<script>" +
            js.value +
            "</scrip/t>"

        );
        code.close();
    };
  }
</script>
@endsection

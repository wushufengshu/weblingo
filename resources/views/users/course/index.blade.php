@extends('users.layouts.master')

@section('content')
 <div class="container col pt-3">

      <div class="row ">
        <div class="col-md-2">
          @include('users.course.sidebar')
        </div>
        <div class="col-md-10  blog-main">

          <div class="blog-post">
           {{--  <h2 class="alert-heading m-1" >{{$lesson->title}}</h2>
            <hr> --}}
           {{--  @foreach($lesson->code as $lesson_code => $code)
      				<h2>{{$code->heading}}</h2>
      				<blockquote><p>{!!$code->heading_body!!}</p></blockquote>
      				@if(!empty($code->html_code) || !empty($code->css_code) || !empty($code->javascript_code))
                {{$lesson_code}}
                  <input type="hidden" value="{{count($lesson->code)}}" id="add">
      			      <div class="container" id="">
      			      	<div class="card " style="background: #dee2e5">
        						  <ul class="nav nav-tabs nav-justified" role="tablist">
        						    <li class="nav-item">
        						      <a class="nav-link active" data-toggle="tab" href="#html">HTML</a>
        						    </li>
        						    <li class="nav-item">
        						      <a class="nav-link" data-toggle="tab" href="#css">CSS</a>
        						    </li>
        						    <li class="nav-item">
        						      <a class="nav-link" data-toggle="tab" href="#javascript">JavaScript</a>
        						    </li>
        						    <li class="nav-item">
        						      <a class="nav-link" data-toggle="tab" href="#preview">Preview</a>
        						    </li>
        						  </ul>

      						  Tab panes
        						  <div class="tab-content">
        						    <div id="html" class="container tab-pane active"><br>
        						      <textarea id='html' placeholder="HTML Codes here" class="codeeditor-textarea" name="html-code_" autofocus  onkeyup="setFrame();">{{$code->html_code}}</textarea>
        						    </div>
        						    <div id="css" class="container tab-pane fade"><br>
        						      <textarea id="css" placeholder="CSS Codes here" class="codeeditor-textarea" name="css-code_" autofocus  onkeyup="setFrame();">{{$code->css_code}}</textarea>
        						    </div>
        						    <div id="javascript" class="container tab-pane fade"><br>
        						      <textarea id="js" placeholder="JavaScript Codes here" class="codeeditor-textarea" name="javascript-code_" onkeyup="setFrame();" autofocus >{{$code->javascript_code}}</textarea> 
        						    </div>
        						    <div id="preview" class="container tab-pane fade"><br>
        						      <iframe id="code"  class="codeeditor-iframe " ></iframe>
        						    </div>
        						  </div>
      						  </div>
      						</div>
      				@endif

      				<hr>
            @endforeach --}}
            
           {{--  @foreach(range(1, $snippet_count) as $code_count)
              <hr> --}}
          {{-- <div id="editor" style="position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;  height: 50px;">
        </div> --}}
        
              @foreach($lesson->code as $code_count=> $code)
              <div class="card bg-transparent border-dark">
                <div class="card-body">
                  <h2><b>{{$code->heading}}</b></h2><hr>
                  {{-- <p class="pl-2 " style="font-size: 18px;"></p> --}}
                  <h5 class="pl-2">{!!$code->heading_body!!}</h5>
                  @if(!empty($code->html_code) || !empty($code->css_code) || !empty($code->javascript_code))
                  <div class="form-group row" id="row{{$code_count}}">
                    {{-- <div class="card col bg-transparent"> --}}
                    <div class="col-md-12" id="add_snippet">
                      {{-- <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link" href="#html-editor{{$code_count}}" role="tab" data-toggle="tab">HTML</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#css-editor{{$code_count}}" role="tab" data-toggle="tab">CSS</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#javascript-editor{{$code_count}}" role="tab" data-toggle="tab">JAVASCRIPT</a>
                        </li> 
                      </ul>--}}
          
                      <div class="tab-content">
                        <div role="tabpanel" class=" container col card border-dark bg-transparent tab-pane  active m-0 p-0" id="html-editor{{$code_count}}">
                          <div class="card-body  m-0 p-1">
                             <pre id='html{{$code_count}}' placeholder="HTML Codes here" class="codeeditor-textarea" name="html-code_{{$snippet_count = count($lesson->code)}}" autofocus  onkeyup="setFrame({{$code_count}});">{{$code->css_code}} <br>{{$code->html_code}} <br>{{$code->js_code}}
                            </pre>
                             
                             {{-- <a href="{{route('user.code_preview', ['code_preview'=>$lesson->code])}}">Try here</a> --}}
                            {{--  <a id="htmlz{{$code_count}}" class="codeeditor-textarea" name="html-code_{{$snippet_count = count($lesson->code)}}" autofocus  onkeyup="setFrame({{$code_count}});" ></a> --}}
                          </div>
                          
                        </div>

                       {{--  <div role="tabpanel" class="card text-white bg-primary tab-pane fade m-0 p-0" id="css-editor{{$code_count}}">
                          <div class="card-body  m-0 p-1">
                            <textarea id="css{{$code_count}}" placeholder="CSS Codes here" class="codeeditor-textarea" name="css-code_{{$snippet_count = count($lesson->code)}}" autofocus  onkeyup="setFrame({{$code_count}});">{{$code->css_code}}</textarea>

                          </div>
                        </div>
                        <div role="tabpanel" class="card text-white bg-warning tab-pane fade m-0 p-0" id="javascript-editor{{$code_count}}">
                          <div class="card-body  m-0 p-1">
                            <textarea id="js{{$code_count}}" placeholder="JavaScript Codes here" class="codeeditor-textarea" name="javascript-code_{{$snippet_count}}" onkeyup="setFrame({{$code_count}});" autofocus >{{$code->js_code}}</textarea> 
                          </div>
                        </div> --}}
                        <div class="form-group pt-2" >
                          <a href="{{route('user.code_preview', [$lesson->course->slug, $lesson->slug, $code_preview = $code->id])}}" class="form-control btn text-white" style="background: #008080" target="_blank">Try</a>
                        </div>
                        {{-- </div> --}}

                      </div>
                    </div>
                  </div>
                  @endif
                </div>
              </div>
              
              @endforeach
            
          </div><!-- /.blog-post -->
          

        </div><!-- /.blog-main -->
        
        
        <!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.1/ace.js" type="text/javascript" charset="utf-8"></script>

    <script>

 var totalIterations = document.getElementById('snippet_count').value;
  setUpEditor(totalIterations);
  document.getElementById('add').onclick = function(){
   
    var output = document.getElementById('output');
    output.innerHTML = '';
    for(var i = 1; i <= totalIterations; i ++) {
      setUpEditor(i);
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
  var e = window.editor;
  function setUpEditor(i){
    e = ace.edit("htmlz"+i);
    e.setTheme("ace/theme/monokai");
    e.session.setMode("ace/mode/html");
    e.getSession().on('change', function(){
      
    });
  }
    
    // update();
</script>

@endsection

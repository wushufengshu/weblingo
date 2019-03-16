@extends('users.layouts.master2')

@section('content')
<style type="text/css" media="screen">

  .editor { 
   height: 100%;
   min-height: 30vh;
   width: 100%;
   display: inline-block;
  }
  #result{
    position: block;
    bottom: 0;
    width: 100%;
    height: 50%;
  }
</style>

<div class="form-group row" id="row">
  <div class="col-md-12" id="add_snippet">
    <ul class="nav nav-tabs nav-justified" role="tablist">
      <li class="nav-item">
        <a class="nav-link" href="#html-editor" role="tab" data-toggle="tab">HTML</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#css-editor" role="tab" data-toggle="tab">CSS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#javascript-editor" role="tab" data-toggle="tab">JAVASCRIPT</a>
      </li>
    </ul>

    <div class="tab-content">

      <div role="tabpanel" class="  card text-white bg-transparent tab-pane  active m-0 p-0" id="html-editor">
        <div class="card-body  m-0 p-1">
          <div id="html_editor" class="editor codeeditor-textarea" style="">{{$content->html_code}}</div>
        </div>
      </div>

      <div role="tabpanel" class=" card text-white bg-transparent tab-pane fade m-0 p-0" id="css-editor">
        <div class="card-body  m-0 p-1">
          <div id="css_editor" class="editor codeeditor-textarea" style="">{{$content->css_code}}</div>
        </div>
      </div>

      <div role="tabpanel" class="card text-white bg-transparent tab-pane fade m-0 p-0" id="javascript-editor">
        <div class="card-body  m-0 p-1">
          <div id="js_editor" class="editor codeeditor-textarea" style="">{{$content->js_code}}</div>
        </div>
      </div>

    </div>
  </div>
</div>

    {{-- @include('users.course.sidebar') --}}
    
<div class="container col-md-12 pt-3 " style="height: 100%">
  <div class="container col-md-12" >
    <iframe id="result" frameborder="0"></iframe>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.1/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
  function update(){
    var res = document.getElementById('result').contentWindow.document;
    res.open();
    res.write(html_editor.getValue());
    res.write('<style>'+ css_editor.getValue() + '</style>');
    res.write('<script type="text/javascript">'+ js_editor.getValue() + '</scri'+'pt>');
    res.close();
  }
  function setUpEditor(){
    window.html_editor = ace.edit("html_editor");
    html_editor.setTheme("ace/theme/monokai");
    html_editor.session.setMode("ace/mode/html");
    html_editor.setOptions({
        autoScrollEditorIntoView: true,
        maxLines: 15
    });
    html_editor.renderer.setScrollMargin(10, 10, 10, 10);
    html_editor.getSession().on('change', function(){
      update();
    });

    window.css_editor = ace.edit("css_editor");
    css_editor.setTheme("ace/theme/monokai");
    css_editor.session.setMode("ace/mode/css");
    css_editor.setOptions({
        autoScrollEditorIntoView: true,
        maxLines: 15
    });
    css_editor.renderer.setScrollMargin(10, 10, 10, 10);
    css_editor.getSession().on('change', function(){
      update();
    });

    window.js_editor = ace.edit("js_editor");
    js_editor.setTheme("ace/theme/monokai");
    js_editor.session.setMode("ace/mode/javascript");
    js_editor.setOptions({
        autoScrollEditorIntoView: true,
        maxLines: 15
    });
    js_editor.renderer.setScrollMargin(10, 10, 10, 10);
    js_editor.getSession().on('change', function(){
      update();
    });

    // var editor = ace.edit("editor3");
    // editor.
    
    // var editor = ace.edit("editor");
    // editor.setTheme("ace/theme/tomorrow");
    // editor.session.setMode("ace/mode/html");
    // editor.setAutoScrollEditorIntoView(true);
  }
    setUpEditor();
    update();

</script>
@endsection

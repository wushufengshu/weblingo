@extends('users.layouts.master2')

@section('content')
<div class="container col">
  <div class="row">
    <div class="col-md-2 ">
          @include('users.layouts.quiz_sidebar')
      </div>
    <div class="col-md-10 mx-auto ">
      <div id="quiz-wrapper py-3 " class="">
    
        <form action="{{route('user.quiz_result', $quiz->slug)}}" method="POST">
          @method('POST')
          @csrf
          <h1 class="pl-1">{{$quiz->name}}</h1>
          <div class="card mx-auto quiz_form border-dark" style="background: #dee2e5">
          <h6>Answer these {{count($quiz->questions)}} questions. There's no time limit</h6>
          <hr>
          @foreach($questions->shuffle()->take($quiz->limit) as $question)
            <div class="container-fluid h-25 m-0 mb-1 py-1 text-white" style="background: #008080">
              <h6 class="">{{$loop->iteration}}.  {{ $question->body }}</h6>
            </div>
            
              @foreach($question->answers->shuffle() as $options)
                <div class="ml-3  form-group">
                    <div class="form-check ml-4">
                      <input class="form-check-input" type="radio" name="answers[{{$question->id}}]" value="{{$options->id}}" required>
                      <label class="form-check-label" for="answers[{{$question->id}}]"> {{$options->answer}}</label>
                    </div>
                </div>
              @endforeach
           
          @endforeach
          <hr>  
          <div class="col-md-12 ">
            <button type="submit" name="submit" class="btn btn-primary  float-left">Submit</button> 
          </div>
        </div>
          
          
        </form>
        {{-- <div class="container" onload="ready();">
          <div id="editor" style="position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;  height: 50px;">
        </div><br>
         <iframe id="result" frameborder="0"></iframe>
        </div>
         --}}
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.1/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
  function update(){
    var res = document.getElementById('result').contentWindow.document;
    res.open();
    res.write(editor.getValue());
    res.close();
  }
  function setUpEditor(){
    window.editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/html");
    editor.getSession().on('change', function(){
      update();
    });
  }
    setUpEditor();
    update();

</script>
@endsection
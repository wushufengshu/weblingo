@extends('users.layouts.master2')

@section('content')
<div class="container card col-md-8 bg-transparent" style="height: 100%">
  	{{-- <div class="card-header text-center">
        <h2>Result</h2>
	</div> --}}

{{--   <p class="alert-danger">{{$answers = $answer->where('id', $questions->answer_id)->first()->answer}}</p>
  {{$correct = $answer->where('question_id', $questions->question_id)->where('correct', true)->first()->answer}} --}}


{{--   {{$test_result}}
  <br>
  {{$for_review}} --}}
	<table class="table">
  <thead class="thead-default alert alert-primary">
    <tr>
      <th scope="col" colspan="2" class="text-center h2">Result</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="text-center">Your Score is: </th>
      <td >{{$score}}</td>
    </tr>
    <tr>
      <th class="text-center">Total Question</th>
      <td >{{count($quiz->questions)}}</td>
    </tr>
  </tbody>
</table>

@foreach($for_review as $questions)
  {{$loop->iteration}}. {{$q = $question->where('id', $questions->question_id)->first()->body }}
  <br>
  {{-- {{$answer->where('id', $questions->answer_id)->first()->answer}} --}}
  <br>
  @if($answer->where('id', $questions->answer_id)->first()->correct == false)
  <p class="alert-danger">Your answer: {{$answer->where('id', $questions->answer_id)->first()->answer}}
    <br>  Correct: {{$correct = $answer->where('question_id', $questions->question_id)->where('correct', true)->first()->answer}}</p>
  <br>
  @else
  <p class="alert-success">{{$answer->where('id', $questions->answer_id)->first()->answer}}</p>
  @endif

@endforeach
</div>

@endsection
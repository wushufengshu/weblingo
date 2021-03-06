@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="title">Edit Quiz</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
  <div class="wrapper container card bg-transparent">
    <form method="POST" action="{{ route('quiz.update', $quiz->id) }}">    
      @method('PATCH')
      @csrf

      <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label ">Quiz name</label>
          <div class="col-md-10">
            <input id="name" type="text" class="form-control" name="name" value="{{$quiz->name}}" required>
          </div>
      </div>
      <div class="form-group row">
        <label for="limit" class="col-md-2 col-form-label ">Limit</label>
        <div class="col-md-10">
          <input id="limit" type="text" class="form-control" placeholder="Enter quiz name" name="limit" value="{{$quiz->limit}}" required autofocus>
        </div>
      </div>
      <div class="form-group row">
        <label for="slug" class="col-md-2 col-form-label ">Slug</label>
          <div class="col-md-10">
            <input id="slug" type="text" class="form-control" name="slug" value="{{$quiz->slug}}" required>
          </div>
      </div>
      <div class="form-group">
        <div class="col-md-12 ">
            <button type="submit" class="btn btn-primary float-right" >
                Update
            </button>
        </div>
      </div>
      @include('admin.layouts.errors')
      </div>
    </form>
  </div>
@endsection

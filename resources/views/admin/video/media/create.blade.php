@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Create Video Tutorial</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
  <div class="wrapper container card bg-transparent">
    <form action="{{route('video.store')}}" method="POST">
      @method('POST')
      @csrf
      <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label ">Title</label>
            <div class="col-md-10">
              <input type="text" class="form-control" placeholder="Title" name="title" required>
            </div>
      </div>
      <div class="form-group row">
        <label for="slug" class="col-md-2 col-form-label ">Slug</label>
            <div class="col-md-10">
              <input type="text" class="form-control" placeholder="Slug" name="slug" required>
            </div>
      </div>
      <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label ">Description</label>
            <div class="col-md-10">
              <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description" required=""></textarea>
            </div>
      </div>
      <div class="form-group">
        <div class="col-md-12 ">
            <button type="submit" class="btn btn-primary float-right">
                Register
            </button>
        </div>
      </div>
      @include('admin.layouts.errors')
    </form>
  </div>
@endsection

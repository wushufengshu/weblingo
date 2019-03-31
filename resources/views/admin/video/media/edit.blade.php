@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="title">Edit video</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
  <div class="wrapper container card col-md-12 bg-transparent">
    <form method="POST" action="{{ route('video.update', $video->id) }}">    
      @method('PATCH')
      @csrf

      <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label ">Title</label>
            <div class="col-md-10">
              <input type="text" class="form-control" placeholder="Title" name="title" required value="{{$video->title}}">
            </div>
      </div>
      <div class="form-group row">
        <label for="slug" class="col-md-2 col-form-label ">Slug</label>
            <div class="col-md-10">
              <input type="text" class="form-control" placeholder="Slug" name="slug" required value="{{$video->slug}}">
            </div>
      </div>
      <div class="form-group row">
        <label for="description" class="col-md-2 col-form-label ">Description</label>
            <div class="col-md-10">
              <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Description" required="">{{$video->description}}</textarea>
            </div>
      </div>

      <div class="form-group">
        <div class="col-md-12 ">
            <button type="submit" class="btn btn-primary float-right" >
                Register
            </button>
        </div>
      </div>
      @include('admin.layouts.errors')
      </div>
    </form>
  </div>
@endsection

@extends('admin.layouts.master')

@section('page-name')

<div class="row ">
<h1 class="h2">Create User Admin</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
  <div class="wrapper container card col-md-10 bg-transparent">
    <form method="POST" action="{{ route('moderator.store') }}">    
      @method('POST')
      @csrf

      <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label ">Name</label>
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="First name" name="first_name" required>
            </div>
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
            </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-md-2 col-form-label ">E-Mail Address</label>
          <div class="col-md-10">
            <input id="email" type="email" class="form-control" name="email" placeholder="E-mail Address" required>
          </div>
      </div>

      <div class="form-group row">
        <label for="address" class="col-md-2 col-form-label ">Address</label>
          <div class="col-md-10">
            <input id="address" type="address" class="form-control" name="address" placeholder="Address" value="" required>
          </div>
      </div>
       <div class="form-group row">
        <label for="admin_at" class="col-md-2 col-form-label ">Administrator at</label>
          <div class="col-md-10">
            <select class="form-control" id="admin_at" name="admin_at" id="admin_at" >
              <option>--select--</option>
              @foreach($courses as $course)
              <option value="{{$course->name}}">{{$course->name}}</option>
              @endforeach
            </select>
          </div>
      </div>
      <input type="hidden" name="type" value="admin">

      <div class="form-group row">
        <label for="password" class="col-md-2 col-form-label">Password</label>
          <div class="col-md-10">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
      </div>

      <div class="form-group row">
        <label for="password-confirm" class="col-md-2 col-form-label ">Confirm Password</label>
          <div class="col-md-10">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
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
      </div>
    </form>
  </div>
@endsection

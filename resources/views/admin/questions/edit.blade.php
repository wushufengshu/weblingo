@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="title">Edit User</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
  <div class="wrapper container">
    <form method="POST" action="{{ route('users.update', $user->id) }}">    
      @method('PATCH')
      @csrf
      <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label ">Name</label>
            <div class="col-md-4">
              <input type="text" class="form-control" placeholder="First name" name="first_name" required>
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
            </div>
      </div>

      <div class="form-group row">
        <label for="email" class="col-md-2 col-form-label ">E-Mail Address</label>
          <div class="col-md-8">
            <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>
          </div>
      </div>

     {{--  <div class="form-group row">
        <label for="address" class="col-md-2 col-form-label ">Address</label>
          <div class="col-md-8">
            <input id="address" type="address" class="form-control" name="address" value="{{$user->address}}" required>
          </div>
      </div> --}}
      <div class="form-group">
        <div class="col-md-8 ">
            <button type="submit" class="btn btn-primary" >
                Register
            </button>
        </div>
      </div>
      @include('admin.layouts.errors')
      </div>
    </form>
  </div>
@endsection

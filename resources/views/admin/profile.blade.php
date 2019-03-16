@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Profile</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
@endsection
@section('content')
{{-- <div class="table-responsive">
This is the profile page
<br><br>
{{$auth}}
</div> --}}
<div class="card bg-transparent">
        <div class="card-header">
            <h4 class="card-title">Edit Profile</h4>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" placeholder="Company" value="">
                        </div>
                    </div>
                    <div class="col-md-6 pl-1">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Home address</label>
                            <input type="text" class="form-control" name="address" placeholder="Home Address" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="text" class="form-control" name="email" placeholder="Email Address" value="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>About Me</label>
                            <textarea rows="4" cols="80" class="form-control" name="" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-fill float-right pull-right">Update Profile</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
@endsection

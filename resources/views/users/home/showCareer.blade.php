@extends('users.layouts.master2')

@section('content')

<div class="col-md-6 mx-auto card bg-transparent mt-2">
    Applying for {{$career->job}} <hr>
<form action="{{route('application.upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <br>
        <input type="hidden" value="{{$career->id}}" name="job_id">

        <div class="form-group row">
            <label for="first_name" class="col-md-2 col-form-label ">First Name </label>
            <div class="col-md-10">
            <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name" class="col-md-2 col-form-label ">Last Name </label>
            <div class="col-md-10">
            <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="contact_number" class="col-md-2 col-form-label ">Contact Number </label>
            <div class="col-md-10">
            <input id="contact_number" type="text" class="form-control" name="contact_number" placeholder="Contact number" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-md-2 col-form-label ">Email </label>
            <div class="col-md-10">
            <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
        </div>

          <div class="form-group row">
            <label for="short_description" class="col-md-2 col-form-label ">Short Description</label>
              <div class="col-md-10">
                <textarea id="short_description" class="form-control" name="short_description" placeholder="Short Description" required></textarea>
              </div>
          </div>    
        <div class="form-group row">
            <label for="contact_number" class="col-md-2 col-form-label ">Resume </label>
            <div class="col-md-10">
            <input type="file" name="pdf">
            </div>
        </div>

        {{-- first name: <input type="text" name="first_name">
        <br><br>
        last name: <input type="text" name="last_name"><br><br>
        Contact Number: <input type="text" name="contact_number"><br><br>
        Email Address: <input type="email" name="email"><br><br>
        Short Description: <textarea name="short_description" id="" cols="30" rows="2"></textarea><br><br>
        pdf: <input type="file" name="pdf">
        <br> <br> --}}
        <div class="form-group row">
            <label for="contact_number" class="col-md-2 col-form-label "> </label>
            <div class="col-md-10">
                <input type="submit" class="btn btn-primary" value="Send">
            </div>
        </div>
        
    </form>
</div>
	{{-- <a href="{{URL::asset('storage/pdf/'.$app->name .'.'. $app->ext)}}" target="_blank">{{$app->name}}</a> --}}
@endsection
{{-- kailangan mas marami quest kesa limit --}}

@extends('users.layouts.master2')

@section('content')
Applying for {{$career->job}}
<form action="{{route('application.upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <br>
        <input type="hidden" value="{{$career->id}}" name="job_id">
        first name: <input type="text" name="first_name">
        <br><br>
        last name: <input type="text" name="last_name"><br><br>
        Contact Number: <input type="text" name="contact_number"><br><br>
        Email Address: <input type="email" name="email"><br><br>
        Short Description: <textarea name="short_description" id="" cols="30" rows="2"></textarea><br><br>
        pdf: <input type="file" name="pdf">
        <br> <br>
        <input type="submit" value="Send">
    </form>

	{{-- <a href="{{URL::asset('storage/pdf/'.$app->name .'.'. $app->ext)}}" target="_blank">{{$app->name}}</a> --}}
@endsection

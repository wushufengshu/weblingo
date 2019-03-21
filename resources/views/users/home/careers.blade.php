@extends('users.layouts.master2')

@section('content')
{{-- <form action="{{route('application.upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <br>
        fn<input type="text" name="first_name">
        <br>
        ln<input type="text" name="last_name"><br>
        cn<input type="text" name="contact_number"><br>
        em<input type="email" name="email"><br>
        sd<input type="text" name="short_description"><br>
        pdf<input type="file" name="pdf">
        <br> <br>
        <input type="submit" value="Upload">
    </form> --}}

    @foreach($careers as $career)
        <ul class="list-unstyled">
            <li class="list-group-item">
                <a href="{{route('user.showCareer', $career->id)}}">{{$career->job}}</a>
            </li>
        </ul>
    @endforeach

	{{-- <a href="{{URL::asset('storage/pdf/'.$app->name .'.'. $app->ext)}}" target="_blank">{{$app->name}}</a> --}}
@endsection

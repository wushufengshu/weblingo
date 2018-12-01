@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2"><img src="/storage/images/{{$course->image}}" alt="{{$course->name}} Logo" style="height: 30px; width: 30px;">{{$course->name}} </h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<a class="btn btn-primary" href="{{route('lesson.create', $course_slug)}}"><span data-feather="file-plus" style="margin-right: 5px;"> </span>Add Lesson</a>
    </div>
</div>
@endsection
@section('content')
@foreach($lessons as $lesson)

<ul class="list-unstyled list-group">
    <li class="list-item">
    	<a href="{{route('lesson.show', [$course_slug, $lesson->slug])}}">
    		{{$lesson->title}}
    	</a>
    </li>
</ul>
@endforeach


@endsection

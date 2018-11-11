@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">{{$course->name}} this is the course content page</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<a class="btn btn-primary" href="{{route('content.create', $course_slug)}}"><span data-feather="file-plus" style="margin-right: 5px;"> </span>Add content</a>
    </div>
</div>
@endsection
@section('content')
{{-- {{$contents}} --}}
@foreach($contents as $content)

<ul class="list-unstyled list-group">
    <li class="list-item">
    	<a href="{{-- /admin/course/{{$course_slug}}/{{$content->slug}} --}}{{route('content.show', [$course_slug, $content->slug])}}">
    		{{$content->title}}
    	</a>
    </li>
</ul>
@endforeach


@endsection

@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">{{$course->name}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    </div>
</div>
@endsection
@section('content')

	<div class="btn-toolbar mb-2 mb-md-0 ml-auto">
    	<a class="btn btn-primary" href="/admin/course/{{$course->slug}}/create"><span data-feather="file-plus" style="margin-right: 5px;"> </span>Add content</a>
    </div>


@endsection

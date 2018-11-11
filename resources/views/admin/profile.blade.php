@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Profile</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
@endsection
@section('content')
<div class="table-responsive">
This is the profile page
<br><br>
{{$auth}}
</div>
@endsection

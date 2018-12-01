@extends('admin.layouts.master')

@section('page-name')

<div class="row">
<h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0 ml-auto">
        <a class="btn btn-primary" href="{{ route('course.create') }}">Add Course </a>
    </div>
</div>
@endsection
@section('content')
	
   <div class="container-fluid">

            <!-- Widgets -->
            <div class="row clearfix">
                @foreach($archives as $course)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            {{-- <i class="material-icons">playlist_add_check</i> --}}
                        </div>
                        <div class="content">
                            <div class="text">{{$course->name}}</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
            <!-- #END# Widgets -->

        </div>
    </div>
@endsection

@extends('admin.layouts.master')

@section('page-name')

<div class="row ">
<h1 class="h2">Create Job</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
  </div>
</div>
@endsection
@section('content')
  <div class="wrapper container card col-md-10 bg-transparent">
    <form method="POST" action="{{ route('careers.store') }}">    
      @method('POST')
      @csrf
      <div class="form-group row">
        <label for="job" class="col-md-2 col-form-label ">Job </label>
          <div class="col-md-10">
            <input id="job" type="text" class="form-control" name="job" placeholder="Job" required>
          </div>
      </div>

      <div class="form-group row">
        <label for="job_description" class="col-md-2 col-form-label ">Job Description</label>
          <div class="col-md-10">
            <textarea id="job_description" class="form-control" name="job_description" placeholder="Job Description" required></textarea>
          </div>
      </div>

      <div class="form-group row">
        <label for="employment_type" class="col-md-2 col-form-label ">Employment Type</label>
          <div class="col-md-10">
            <select class="form-control" id="employment_type" name="employment_type" id="employment_type" >
              <option>--select--</option>
              <option value="Full time">Full time</option>
              <option value="Part time">Part time</option>
            </select>
          </div>
      </div>
      <div class="form-group row">
        <label for="duties" class="col-md-2 col-form-label ">Duties</label>
          <div class="col-md-10">
            <textarea id="duties" cols="30" rows="2" name="duties" class="form-control" placeholder="Duties" required></textarea>
          </div>
      </div>
      <div class="form-group row">
        <label for="requirements" class="col-md-2 col-form-label ">Requirements</label>
          <div class="col-md-10">
            <textarea name="requirements" id="requirements" class="form-control" cols="30" rows="2" placeholder="Requirements" required></textarea>
          </div>
      </div>
      <div class="form-group">
        <div class="col-md-12 ">
            <button type="submit" class="btn btn-primary float-right">
                Register
            </button>
        </div>
      </div>
      @include('admin.layouts.errors')
      </div>
    </form>
  </div>
@endsection

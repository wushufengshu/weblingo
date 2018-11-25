<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.home') }}">
          <span data-feather="home"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user-admin.index') }}">
          <span data-feather="users"></span>
          Admins
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
          <span data-feather="users"></span>
          Users
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="users"></span>
          Assessment
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('questions.index') }}">
          <span data-feather="file"></span>
          Questions
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse"><span data-feather="plus-circle"></span>Courses</a>
        
        <div class="container">
          <div class="collapse" id="collapse">
            
            @foreach($archives as $course)
                <a class="nav-link text-secondary collapse" id="collapse" href="{{route('course.show', $course->slug)}}">{{$course->name}}</a>


            @endforeach
          </div>
      </div>
      </li>
    </ul>

    
  </div>
</nav>
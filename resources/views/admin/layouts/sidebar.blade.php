
<nav class="col-md-2 d-none d-md-block sidebar">

  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.home') }}">
          <span data-feather="home"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>

      @if(auth()->user()->admin_at == 'Super Admin')
     {{--  <li class="nav-item">
        <a class="nav-link" href="{{ route('user-admin.index') }}">
          <span data-feather="users"></span>
          Admins
        </a>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link" href="{{ route('moderator.index') }}">
          <span data-feather="users"></span>
          Moderators
        </a>
      </li>
      

      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
          <span data-feather="users"></span>
          Users
        </a>
      </li>
      @endif
      <li class="nav-item">
        <a class="nav-link" href="{{ route('course.index') }}">
          <span data-feather="plus-circle"></span>
          Courses
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('quiz.index')}}">
          <span data-feather="file-text"></span>
          Quiz
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('video.index') }}">
          <span data-feather="video"></span>
          Video Tutorials
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('careers.index') }}">
          <span data-feather="users"></span>
          Careers
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('application.index') }}">
          <span data-feather="users"></span>
          Applications
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('reports.index') }}">
          <span data-feather="plus-circle"></span>
          Reports
        </a>
      </li>


      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('course.index') }}">
          <span data-feather="plus-circle"></span>
          Comments
        </a>
      </li> --}}
       {{-- <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapse"><span data-feather="plus-circle"></span>Courses</a>
        
        <div class="container">
          <div class="collapse" id="collapse">
            
            @foreach($archives as $course)
                <a class="nav-link text-secondary collapse" id="collapse" href="{{route('course.show', $course->slug)}}">{{$course->name}}</a>


            @endforeach
          </div>
        </div> 
      </li> --}}
    </ul>

    
  </div>
</nav>



<!-- #END# Right Sidebar -->

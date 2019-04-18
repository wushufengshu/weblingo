<nav class="navbar navbar-expand-xl navbar-light col-md-12  bg-transparent pl-3 p-0  m-0 " >

  <button class="navbar-toggler mt-4" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse  navbar-collapse  border-dark bg-transparent pl-0" id="navbar">

    <ul class="navbar-nav col-md-12 nav flex-column text-nowrap flex-nowrap " > 
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.home') }}">
          <span data-feather="home"></span>
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>

      @if(auth()->user()->admin_at == 'Super Admin')

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
       @if(auth()->user()->admin_at == 'Super Admin')
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
      @endif
    </ul>
  </div>
</nav>

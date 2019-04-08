{{-- 
<nav class="col-md-12 d-none d-md-block card bg-transparent sidebar_user mt-0 pt-0">

  <div class="sidebar-sticky border-dark p-2 bg-transparent">
    <ul class="nav flex-column">
      <li class="nav-item">
        <div class="row text-nowrap " style="background: #008080">
          <span class="m-2" data-feather="file-text"></span>
          <span style="font-size: 25px;">Lessons</span>
        </div>
          
          <ol class="list-unstyled pl-3">
            @foreach($course->lesson as $lesson)
            <a href="{{route('user.course',[$course->slug, $lesson->slug])}}"><li class="mt-1 mb-2">
              {{$lesson->title}}
            </li></a>
            @endforeach  
          </ol>
      </li>

      @auth

      <li class="nav-item">
        <div class="row text-nowrap " style="background: #008080">
          <span class="m-2" data-feather="file-text"></span>
          <span style="font-size: 25px;">Quizzes</span>
        </div>
          
          <ol class="list-unstyled pl-3">
            @foreach($quizzes as $quiz)
            <a href="{{route('user.quiz', $quiz->slug)}}"><li class="mt-1 mb-2">
              {{$quiz->name}}
            </li></a>
            @endforeach  
          </ol>
      </li>
      @endauth

    
  </div>
</nav>


 --}}

{{-- <nav class="col-md-12 d-none d-md-block card bg-transparent sidebar_user border-dark pt-0">

  <div class="sidebar-sticky border-dark p-2 bg-transparent">

    <div class="accordion" id="accordionExample">
      <div class=" bg-transparent">
          <h2 class="mb-0">
            <button class="btn col text-white" style="background: #008080" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Lesson
            </button>
          </h2>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="">
           <ol class="list-unstyled pl-3">
            @foreach($course->lesson as $lesson)
            <a href="{{route('user.course',[$course->slug, $lesson->slug])}}"><li class="mt-1 mb-2">
              {{$lesson->title}}
            </li></a>
            @endforeach  
          </ol>
          </div>
        </div>
      </div>
      
      @auth
      <div class=" bg-transparent">
          <h2 class="mb-0">
            <button class="btn col text-white collapsed mt-2" style="background: #008080" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Quizzes
            </button>
          </h2>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="">
            <ol class="list-unstyled pl-3">
            @foreach($quizzes as $quiz)
            <a href="{{route('user.quiz', $quiz->slug)}}"><li class="mt-1 mb-2">
              {{$quiz->name}}
            </li></a>
            @endforeach  
          </ol>
          </div>
        </div>
      </div>
      @endauth
      <div class=" bg-transparent">
          <h2 class="mb-0">
            <button class="btn col text-white collapsed mt-2" style="background: #008080" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Course
            </button>
          </h2>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="">
            <ol class="list-unstyled pl-3">
            @foreach($course->all() as $courses)
            <a href="{{route('user.course', [$courses->slug, $courses->lesson->first()['slug']] )}}" class=" " style="background: #5A6268"><li class="mt-1 mb-2">
              {{$courses->name}}
            </li></a>
            @endforeach  
          </ol>
          </div>
        </div>
      </div>

      

    </div>

    
  </div>
</nav> --}}

<nav class="navbar navbar-expand-xl navbar-light col-md-12  bg-transparent p-0 m-0 "  >

        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse col navbar-collapse card border-dark bg-transparent" id="navbar">

            <ul class="navbar-nav col-md-12 nav flex-column " > 
                 <div class="accordion" id="accordionExample">
                  <div class=" bg-transparent">
                      <h2 class="mb-0">
                        <button class="btn col text-white" style="background: #008080" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Lesson
                        </button>
                      </h2>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="">
                       <ol class="list-unstyled pl-3">
                        @foreach($course->lesson as $lesson)
                        <a href="{{route('user.course',[$course->slug, $lesson->slug])}}"><li class="mt-1 mb-2">
                          {{$lesson->title}}
                        </li></a>
                        @endforeach  
                      </ol>
                      </div>
                    </div>
                  </div>
                  
                  @auth
                  <div class=" bg-transparent">
                      <h2 class="mb-0">
                        <button class="btn col text-white collapsed mt-2" style="background: #008080" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Quizzes
                        </button>
                      </h2>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="">
                        <ol class="list-unstyled pl-3">
                        @foreach($quizzes as $quiz)
                        <a href="{{route('user.quiz', $quiz->slug)}}"><li class="mt-1 mb-2">
                          {{$quiz->name}}
                        </li></a>
                        @endforeach  
                      </ol>
                      </div>
                    </div>
                  </div>
                  @endauth
                  <div class=" bg-transparent">
                      <h2 class="mb-0">
                        <button class="btn col text-white collapsed mt-2" style="background: #008080" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Course
                        </button>
                      </h2>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="">
                        <ol class="list-unstyled pl-3">
                        @foreach($course->all() as $courses)
                        <a href="{{route('user.course', [$courses->slug, $courses->lesson->first()['slug']] )}}" class=" " style="background: #5A6268"><li class="mt-1 mb-2">
                          {{$courses->name}}
                        </li></a>
                        @endforeach  
                      </ol>
                      </div>
                    </div>
                  </div>

                  

                 </div>
            </ul>
        </div>
</nav>
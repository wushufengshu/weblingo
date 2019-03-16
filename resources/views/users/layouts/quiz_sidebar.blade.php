
 <nav class="col-md-12 d-none d-md-block card bg-transparent sidebar_user h-100 border-dark pt-0">

  <div class="sidebar-sticky border-dark p-2 bg-transparent">

    <div class="accordion" id="accordionExample">
      
      @auth
      <div class=" bg-transparent">
          <h2 class="mb-0">
            <button class="btn col text-white collapsed mt-2" style="background: #008080" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Quizzes
            </button>
          </h2>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
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
</nav>
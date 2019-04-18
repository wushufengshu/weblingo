
 <nav class="navbar navbar-expand-md navbar-dark wlc shadow pt-0 pb-0 fixed-top">
  <a class="navbar-brand" href="#">
    <img class="img-fluid mx-auto " src="{{ asset('images/WLLogo.png') }}" style="height: 30px" alt="">
    {{ config('app.name', 'Antidote') }}
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExample04">
  <ul class="navbar-nav px-3 ml-auto">
    @guest
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item text-nowrap">
            @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
        </li>
    @else
        <li class="nav-item dropdown text-nowrap">
            <a class="nav-link dropdown-toggle col" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown">
                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right mb-2" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('admin.profile') }}">
                  <span data-feather="file"></span>
                  {{ __('Profile') }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>


                

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
  </ul>
</div>

</nav>
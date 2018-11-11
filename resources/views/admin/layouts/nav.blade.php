<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow navbar-expand-md">
  <a class="navbar-brand col-md-2 mr-0" href="#"><span data-feather="anchor"></span>  Antidote</a>
  
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
            {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> --}}
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown">
                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}<span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
</nav>
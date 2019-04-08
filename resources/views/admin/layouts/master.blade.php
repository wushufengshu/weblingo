<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/WLLogolight.png') }}">

    <title>{{ config('app.name', 'Antidote') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/content.css') }}" rel="stylesheet">
    <link href="{{ asset('css/cards.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery-1.12.4.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>  
     {{-- <link href="{{ asset('css/codeeditor.css') }}" rel="stylesheet"> --}}
    
  </head>

  <body style="background: #d9dde0;">
    @include ('admin.layouts.nav')

    <div class="container-fluid">
      <div class="row">
        @include ('admin.layouts.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="container-fluid">
              @yield('page-name')
            </div>
          </div>
          <div class="wrapper container">

            <div class="table-responsive" style="padding-top: 3px;">
              @yield('content')
            </div>
          </div>
         

          
        </main>
      </div>

      @include('admin.layouts.flash-message')
    </div>

    @include('admin.layouts.scripts')
  </body>
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/product.css')}}" rel="stylesheet">
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Antidote') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body style="background: #d9dde0; max-width: 100% " > 
{{-- #EEEEEE --}}
	@include('users.layouts.nav')
    
    @yield('content')

    
    <div class="mw-100 mx-0 px-0 bg-transparent col-md-12 py-5">
        @include('users.layouts.footer')
    </div>
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-331.js') }}"></script>

    <script src="{{asset('js/feather.min.js')}}"></script>
    <script>
        feather.replace();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.3.1/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
  
</script>
    

  </body>
</html>

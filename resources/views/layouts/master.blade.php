<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Furbook</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  </head>
  <body>
    {!! Toastr::render() !!}
    <div class="container">
      <div class="page-header">
        <div class="text-right">
          @if (Auth::check())
            Logged in as
            <strong>{{ Auth::user()->name }}</strong>
            <form action="/logout" method="post">
              {{ csrf_field() }}
              <input type="submit" value="Logout"/>
            </form>
          @else
            {{ link_to('/login', 'Login') }}
          @endif

        </div>
        @yield('header')
      </div>
      @if (Session::has('success'))
        <div class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      @endif
      @yield('content')
    </div>
  </body>
</html>

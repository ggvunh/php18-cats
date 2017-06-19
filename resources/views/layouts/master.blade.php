<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Furbook</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  </head>
  <body>
    <div class="container">
      <div class="page-header">
        @yield('header')
      </div>
      @if (Session::has('succsess'))
        <div class="alert alert-success">
          {{ Sesstion::get('succsess') }}
        </div>
      @endif
      @yield('content')
    </div>
  </body>
</html>

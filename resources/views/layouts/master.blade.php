<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Furbook</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
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
      <input type="text" name="" value="" id='txt-name'>
      <button type="button" name="button" id='btn-add'>Add Category</button>
      <div class="alert alert-success">
        <ul>

        </ul>
      </div>
      @if (Session::has('success'))
        <div class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      @endif
      @yield('content')
    </div>
  </body>
  <script type="text/javascript">

    $('#btn-add').click(function(){
      var name = $('#txt-name').val();
      $.post('{{url('/api/categories')}}', {
        name: name
      }, function(data, status){
        $('ul').append('<li> ' + data.name + ' </li>');
      })
    });

    $.get('{{url('/api/categories')}}', function(data, status){
      data.forEach(function(category){
        // console.log(category.name);
        $('ul').append('<li> ' + category.name + ' </li>');
      });
    });
  </script>
</html>

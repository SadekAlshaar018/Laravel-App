<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Restart')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
          {{-- bootstrap linke for css --}}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: auto;
                margin: 0;
            }
            h1, p{
              text-align: center;
            }
        </style>
    </head>
    <body>
      @include('inc.navbar')
      <div class="container">
        @include('inc.messages')
        @yield('content')
      </div>
      <script src="http://localhost:8889/lsapp/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'article-ckeditor' );
      </script>
    </body>
</html>

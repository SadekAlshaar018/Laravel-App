<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->
    <style>
        html, body {
            background-color: silver !important;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: auto;
            margin: 5px;
        }
        h1, p{
          text-align: center;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
          @include('inc.messages')
          @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

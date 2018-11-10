<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravelandia') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('includes/nav')
    <div id="app">
        <div class="content">
       
                @include('includes/messages')
                @yield('content')
           
        </div> 
    </div>

    <!-- Scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>

    <script type=text/javascript src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'article-ckeditor' );
    </script-->
  
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


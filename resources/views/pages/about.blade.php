<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/cdn.3.3.7.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

           
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <!--   @if (Route::has('login')) -->
                <div class="top-right links">
                <!--     @auth -->
                        <a href="{{ url('/home') }}">Home</a>
                <!--     @else -->
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
               <!--      @endauth -->
                </div>
          <!--   @endif -->

            <div class="content">
                <div class="title m-b-md">
                   Welcome every one.
                </div>
            
            </div>
        </div>
       
        <script src="js/jquery.3.2.1.min.js"></script>
        <script src="js/cdn.3.3.7.bootstrap.min.js"></script>
        <script src="js/app.js"></script>
        

    </body>
</html>

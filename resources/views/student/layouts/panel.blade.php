<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title> | @yield('title')</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('head_meta')
        @yield('head_styles')
        @yield('head_scripts')
    </head>
    <body>
     <div class="main-wrapper">
            @yield('main_content_header')
            @yield('body_main_content')
            @yield('main_content_footer')
        <footer class="text-center"> @yield('body_footer')</footer>
     </div>
        @yield('body_scripts')
    </body>
</html>
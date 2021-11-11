<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Treemium </title>
        @include('layouts.user.head')
    </head>
    <body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">
         @include('layouts.user.header')
         @include('layouts.user.sidebar')

                   @yield('content')
        @include('layouts.user.footer')
    </div>
        @include('layouts.user.footer-script')

    </body>
</html>

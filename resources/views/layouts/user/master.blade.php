<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Paypooler | Money Beyond Border</title>
        @include('layouts.user.head')
    </head>
    <body>

    <div id="main-wrapper">
         @include('layouts.user.header')
         @include('layouts.user.sidebar')

                   @yield('content')
        @include('layouts.user.footer')
    </div>
        @include('layouts.user.footer-script')

    </body>
</html>

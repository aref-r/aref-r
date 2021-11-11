<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ایده بین</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        @include('layouts.user.head')
  </head>
    <body class="pb-0">
        @yield('content')
        @include('layouts.user.footer-script')
    </body>
</html>

<!-- App favicon -->

<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon.png') }}">
<!-- Custom Stylesheet -->
@yield('css')

<link rel="stylesheet" href="{{ asset('/vendor/toastr/toastr.min.css') }}">

@if (Auth::user()->lang == 'en')
    <link rel="stylesheet" href="{{ asset('/css/style-en.css') }}">
@elseif (Auth::user()->lang == 'fa')
    <link rel="stylesheet" href="{{ asset('/css/style-fa.css') }}">

@endif

<!-- App favicon -->

<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/icons/paypooler/arrgx-8bfem-003.ico') }}">
<!-- Custom Stylesheet -->
@yield('css')

<link rel="stylesheet" href="{{ asset('/vendor/toastr/toastr.min.css') }}">

@if (Auth::user()->lang == 'en')
    <link rel="stylesheet" href="{{ asset('/css/style-en.css') }}">
@elseif (Auth::user()->lang == 'fa')
    <link rel="stylesheet" href="{{ asset('/css/style-fa.css') }}">
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mio_CV</title>

    <link href="{{ asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/css/ionicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleCV.css') }}">
    <link rel="stylesheet" href="{{ asset('css/orbit-1.css')}}">
    <script src="{{ asset('js/all.min.js') }}"></script>
    @yield('link')
  </head>

  <body style="background-color:rgb(27, 46, 97)">
    @include('flash-message')
    @yield('main')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/jquery.peity.min.js') }}"></script>

    <script src="{{ asset('js/bracket.js') }}"></script>
  </body>

</html>

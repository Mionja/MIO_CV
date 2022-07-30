<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>MIO CV</title>

    <link href="{{ asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/css/ionicons.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bracket.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <body class="bg-dark">

      <div class="container center mr-5 mt-5 mb-5">
       <h1> Welcome to mio_homepage!</h1>
      </div>
      <div class="jumbotron jumbotron-fluid">
        <div class="container mt-5 mt-5">
          <div class="row">
            <div class="col-2"></div>
            <div class="col-3">
              <img src="{{asset('img/repair.png')}}" alt="" class="mt-2">
            </div>
            <div class="col-5">
              <code><h2 class="mb-5">Still in reparation :)</h2></code>
              <p>Come again later. <br> You can already create your own cv though, enjoy it!</p>
              <a href="{{route('perso_details.index')}}" class="float-right mr-5" style="text-decoration: underline">Create CV</a>
            </div>
          </div>
        </div>
       </div>
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/jquery.peity.min.js') }}"></script>

    <script src="{{ asset('js/bracket.js') }}"></script>
  </body>

</html>

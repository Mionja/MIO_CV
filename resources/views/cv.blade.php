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
    <link rel="stylesheet" href="{{ asset('css/styleCV.css') }}">
</head>

<body>
    <a href="{{route('home')}}">Retour</a>
{{-- //---------------------------------------------------------------------------------------------------- --}}
    <div class="container ">
        <div class="media border p-3 bg-info" >
            <img src="{{ asset('img/perso_detail.png') }}" alt="photo" class="mr-3 mt-3 rounded-circle" style="width:150px;">
            <div class="media-body mt-3" >
                <h1>{{$perso_details->nom}}</h1>
                <div class="row mt-5 ml-3">
                    <div class="col"><img src="{{ asset('img/email.png') }}" alt="" style="width: 35px;">
                             {{$perso_details->email}}
                    </div>
                    <div class="col"><img src="{{ asset('img/phone.png') }}" alt="" style="width: 35px;">
                        {{$perso_details->num}}
                    </div>
                    <div class="col"><img src="{{ asset('img/home.png') }}" alt="" style="width: 35px;">
                        {{$perso_details->address}}
                    </div>
                </div>
                <div class="row ml-5">
                    {{$a->age}}
                </div>
            </div>
        </div>
{{-- //---------------------------------------------------------------------------------------------------- --}}        
        <div class="media border">
            <div class="row">
{{-- CONTENU DE GAUCHE --}}
                <div class="sideleft bg-info ml-3">
                    LEFT SIDE
                    <div class="row">
                        <h4 class="ml-3 mt-3">EDUCATION</h4>
                        <div class="col">
                            @foreach($educations as $education)
                            <ul>
                                <li>{{$education -> degree}}</li>
                                <li>{{$education -> school}}</li>
                                <li>{{$education -> grade}}</li>
                                <li>{{$education -> year}}</li>
                            </ul> 
                            @endforeach
                        </div>
                    </div>{{--  Fin row education --}}
                </div>{{--  fin contenu gauche --}}

{{-- CONTENU DE DROITE --}}
                <div class="col">
                    <div class="row">
                        <h4 class="ml-3 mt-3">OBJECTIVE</h4>
                        <div class="row">
                            {{$obj->objective}}
                        </div>
                    </div>{{--  Fin row education --}}
                    <div class="row">
                        <h4 class="ml-3 mt-3">EDUCATION</h4>
                        <div class="col">
                            @foreach($educations as $education)
                            <ul>
                                <li>{{$education -> degree}}</li>
                                <li>{{$education -> school}}</li>
                                <li>{{$education -> grade}}</li>
                                <li>{{$education -> year}}</li>
                            </ul> 
                            @endforeach
                        </div>
                    </div>{{--  Fin row education --}}

                    <div class="row">
                        <h4 class="ml-3 mt-3">EDUCATION</h4>
                        <div class="col">
                            @foreach($educations as $education)
                            <ul>
                                <li>{{$education -> degree}}</li>
                                <li>{{$education -> school}}</li>
                                <li>{{$education -> grade}}</li>
                                <li>{{$education -> year}}</li>
                            </ul> 
                            @endforeach
                        </div>
                    </div>{{--  Fin row education --}}
                             
                    <div class="row border">
                        <div class="col-sm-1"></div>PYTHON</div>
                        <div class="col-sm-3">
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:75%"></div>
                            </div>
                        </div>
                    </div>
                </div>{{--  fin contenu droite --}}
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


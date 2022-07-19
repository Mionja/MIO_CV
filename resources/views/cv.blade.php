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
    <div class="container-fluid mt-3">
        <a href="{{route('home')}}" class="btn btn-dark">Home</a>
        <a href="{{route('perso_details.index')}}" class="btn btn-success">Back</a>

        <marquee behavior="20" direction="right" class="mt-5">Bouuuuuuuuuuu</marquee>
    </div>
{{-- //---------------------------------------------------------------------------------------------------- --}}
    <div class="container mt-5">
        <div class="media border p-3 bg-dark text-light">
            <img src="{{ asset('img/perso_detail.png') }}" alt="photo" class="mr-3 mt-3 rounded-circle border" style="width:180px;">
            <div class="container mt-3" >
                <h1>{{$perso_details->nom}}</h1>
                <div class="row mt-5 ml-3">
                    <div class="col"><img src="{{ asset('img/mail.png') }}" alt="" style="width: 30px;">
                             {{$perso_details->email}}
                    </div>
                    <div class="col"><img src="{{ asset('img/phone.png') }}" alt="" style="width: 30px;">
                        {{$perso_details->num}}
                    </div>
                    <div class="col"><img src="{{ asset('img/home.png') }}" alt="" style="width: 30px;">
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
                <div class="sideleft bg-dark text-light ml-3">
                    <div class="container mt-3 mr-5">
                       <h5 class="bg-info text-black-50">Soft-skills</h5> 
                        <ul>
                        @foreach($s_skill as $s_skill)
                            <li>{{$s_skill->name}}</li>                            
                        @endforeach
                        </ul>
                    </div>

                    <div class="container">
                        <h5 class="bg-info text-black-50">Activities</h5>
                        <ul>
                            @foreach($activities as $activity)
                                <li>{{$activity->name}}</li>                            
                            @endforeach
                            </ul>
                    </div>

                    <div class="container">
                        <h5 class="bg-info text-black-50">Languages </h5>
                        <ul>
                            @foreach($languages as $language)
                                <li>{{$language->name}}</li>                            
                            @endforeach
                        </ul>
                    </div>
                </div>{{--  fin contenu gauche --}}

{{-- CONTENU DE DROITE --}}
                <div class="col">
                    <div class="container mt-3">
                        <h5 class="bg-dark text-light">Objective </h5>
                            <p class="ml-4">{{$obj->objective}}</p>
                    </div>
                    <div class="container">
                        <h5 class="bg-dark text-light">Education</h5>
                        @foreach($educations as $education)
                        <ul>
                            <li>{{$education -> degree}}</li>
                            <li>{{$education -> school}}</li>
                            <li>{{$education -> grade}}</li>
                            <li>{{$education -> year}}</li>
                        </ul> 
                        @endforeach
                    </div>   

                    <div class="container">
                        <h5 class="bg-dark text-light">Experiences</h5>
                        @foreach($experiences as $experience)
                        <ul>
                            <li>{{$experience -> company}}</li>
                            <li>{{$experience -> job}}  
                                <span class="ml-4">| {{$experience -> start}}</span>  
                                <span class="ml-3">{{$experience -> end}}</span>
                            </li>
                            <li>{{$experience -> details}}</li>
                        </ul> 
                        @endforeach
                    </div>
                    <div class="container">
                        <h5 class="bg-dark text-light">Formations</h5>
                        @foreach($formations as $formation)
                        <ul>
                            <li>{{$formation -> name}}</li>
                            <li>{{$formation -> about}} <span class="ml-4">| {{$formation -> start}}</span>  <span class="ml-3">{{$formation -> end}}</span></li>
                        </ul> 
                        @endforeach
                    </div> 
                    <div class="container">
                        <h5 class="bg-dark text-light">Hard skills</h5>
                            <div class="progress mb-3 bg-black-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-black-4 border rounded" style="width:12%"></div>
                            </div>
                            <div class="progress mb-3 bg-black-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-black-4 border rounded" style="width:25%"></div>
                            </div>
                            <div class="progress mb-3 bg-black-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-black-4 border rounded" style="width:50%"></div>
                            </div>
                            <div class="progress mb-3 bg-black-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-black-4 border rounded" style="width:75%"></div>
                            </div>
                            <div class="progress mb-3 bg-black-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-black-4 border rounded" style="width:100%"></div>
                            </div>
                    </div>

                    {{-- <div class="row border">
                        <div class="col-sm-1"></div>PYTHON</div>
                        <div class="col-sm-3">
                            <div class="progress mb-3">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:75%"></div>
                            </div>
                        </div>
                    </div> --}}

                </div>{{--  fin contenu droite --}}
            </div>
        </div>
    </div>
    <div class="footer mb-5"></div>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/datepicker.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/moment.min.js') }}"></script>
  <script src="{{ asset('js/jquery.peity.min.js') }}"></script>

  <script src="{{ asset('js/bracket.js') }}"></script>
</body>

</html>


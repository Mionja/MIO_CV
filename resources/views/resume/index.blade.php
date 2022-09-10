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
        <a href="{{route('age.index')}}" class="btn btn-dark">Home</a>
        <a href="{{route('perso_details.index')}}" class="btn btn-success">Back</a>

        <marquee behavior="20" direction="right" class="mt-5">Bouuuuuuuuuuu</marquee>
    </div>

    
{{-- //---------------------------------------------------------------------------------------------------- --}}
    <div class="container mt-5 w-100">
        <div class="media border p-3 bg-dark text-light">
            @foreach($perso_details as $perso_details)
                @if($perso_details->photo)
                <img src="img/profile_pic/{{$perso_details->photo}}" alt="photo" class="mr-3 mt-3 rounded-circle border" style="width:180px;height:180px;">
                @else
                <img src="{{asset('img/age.png')}}" alt="photo" class="mr-3 mt-3 rounded-circle border" style="width:180px;height:180px;">
                @endif
            <div class="container mt-3" >
                <h1>{{$perso_details->nom}}</h1>
                    <ul class="nav mt-5">
                        <li class="nav-item">
                          <span class="nav-link text-light">
                            <img src="{{ asset('img/mail.png') }}" alt="" style="width: 22px;">
                            {{$perso_details->email}}</span>
                        </li>
                        <li class="nav-item">
                          <span class="nav-link text-light">
                            <img src="{{ asset('img/phone.png') }}" alt="" style="width: 22px;">
                            {{$perso_details->num}}
                          </span>
                        </li>
                        <li class="nav-item">
                          <span class="nav-link text-light">
                            <img src="{{ asset('img/home.png') }}" alt="" style="width: 22px;">
                            {{$perso_details->address}}
                          </span>
                        </li>
                      </ul>
                        
            @endforeach
            
                <div class="row ml-3 mt-4">
                    @foreach($a as $a)
                        {{$a->age}}
                    @endforeach
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
                        @foreach($obj as $obj)
                            <p class="ml-4">{{$obj->objective}}</p>
                        @endforeach
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
                        @foreach($h_skill as $h_skill)
                            {{$h_skill->name}} : 
                            <div class="progress mb-3 bg-black-2">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-black-4 border rounded" style="width:{{$h_skill->level}}%"></div>
                            </div>
                        @endforeach
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


@extends('normal')

@section('main')

   
<div class="container-fluid mt-3 text-center">
    <form action="{{route('logout')}}" method="post" class="br-menu-link">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
      </form>
    <a href="{{route('perso_details.index')}}" class="btn btn-dark">Back</a>
</div>
{{-- //---------------------------------------------------------------------------------------------------- --}}
    
<div class="wrapper mt-lg-5">
    <div class="sidebar-wrapper">
        <div class="profile-container">
            @foreach($perso_details as $perso_details)
                @if($perso_details->photo)
                <img src="img/profile_pic/{{$perso_details->photo}}" alt="photo" class="mr-3 mt-3 rounded-circle border" style="width:180px;height:auto;">
                @endif
            
            <h2 class="name">{{$perso_details->nom}}</h2>
            @if($a->isNotEmpty())
            <h3 class="tagline">
                @foreach($a as $a)
                {{$a->age}}
                @endforeach    
            </h3>
            @endif
        </div><!--//profile-container-->
        
        <div class="contact-container container-block">
            <ul class="list-unstyled contact-list">

                <li class="email"><i class="fa-solid fa-envelope"></i><a href="mailto: {{$perso_details->email}}">{{$perso_details->email}}</a></li>
                <li class="phone"><i class="fa-solid fa-phone"></i><a href="tel:{{$perso_details->num}}">0{{$perso_details->num}}</a></li>
                <li class="linkedin"><i class="fa-brands fa-linkedin-in"></i><a href="#" target="_blank">linkedin.com/in/Mionj</a></li>
                <li class="github"><i class="fa-brands fa-github"></i><a href="#" target="_blank">github.com/Mionja</a></li>
                <li class="address"><i class="fa-brands fa-location"></i>{{$perso_details->address}}</li>
            </ul>
        </div><!--//contact-container-->
            @endforeach


        @if($languages->isNotEmpty())
        <div class="languages-container container-block">
            <h2 class="container-block-title">Languages</h2>
            <ul class="list-unstyled interests-list">
                @foreach($languages as $language)
                <li>{{$language->name}}</li>
                @endforeach
            </ul>
        </div><!--//interests-->
        @endif

        
        @if($activities->isNotEmpty())
        <div class="interests-container container-block">
            <h2 class="container-block-title">Activities & Interests</h2>
            <ul class="list-unstyled interests-list">
                @foreach($activities as $activity)
                <li>{{$activity->name}}</li>
                @endforeach
            </ul>
        </div><!--//interests-->
        @endif
        
    </div><!--//sidebar-wrapper-->
    
    <div class="main-wrapper">
        @if($obj->isNotEmpty())
        <section class="section summary-section">
            <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-user"></i></span>Objective</h2>
            @foreach($obj as $obj)
            <div class="summary">
                <p>{{$obj->objective}}</p>
            </div><!--//summary-->
            @endforeach
        </section><!--//section-->
        @endif


        @if($experiences->isNotEmpty())
        <section class="section experiences-section">
            <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-briefcase"></i></span>Experiences</h2>
            @foreach($experiences as $experience)
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">{{$experience -> job}} </h3>
                        <div class="time">{{$experience -> start}} - {{$experience -> end}}</div>
                    </div><!--//upper-row-->
                    <div class="company">{{$experience -> company}}</div>
                </div><!--//meta-->
                <div class="details">
                    <p>{{$experience -> details}}</p>  
                </div><!--//details-->
            </div><!--//item-->
            @endforeach
        </section><!--//section-->
        @endif   

        @if($educations->isNotEmpty())
        <section class="section experiences-section">
            <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-briefcase"></i></span>Education</h2>
            @foreach($educations as $education)
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">{{$education -> degree}}</h3>
                        <div class="time">{{$education -> year}}</div>
                    </div><!--//upper-row-->
                    <div class="company">{{$education -> grade}}</div>
                </div><!--//meta-->
                <div class="details">
                    <p>{{$education -> school}}</p>  
                </div><!--//details-->
            </div><!--//item-->
            @endforeach
        </section><!--//section-->
        @endif

    @if($formations->isNotEmpty())
        <section class="section experiences-section">
            <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-archive"></i></span>Formation</h2>
            @foreach($formations as $formation)
            <div class="item">
                <div class="meta">
                    <div class="upper-row">
                        <h3 class="job-title">{{$formation -> name}}</h3>
                        <div class="time">{{$formation -> start}} - {{$formation -> end}}</div>
                    </div><!--//upper-row-->
                </div><!--//meta-->
                <div class="details">
                    <p>{{$formation -> about}}</p>  
                </div><!--//details-->
            </div><!--//item-->
            @endforeach
        </section><!--//section-->
        @endif


        @if($h_skill->isNotEmpty())
            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-rocket"></i></span>Skills &amp; Proficiency</h2>
                <div class="skillset">  
                    @foreach($h_skill as $h_skill)
                    <div class="item">
                        <h3 class="level-title">{{$h_skill->name}} </h3>
                        <div class="progress level-bar">
                            <div class="progress-bar theme-progress-bar" role="progressbar" style="width: {{$h_skill->level}}%" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>                               
                    </div><!--//item-->
                    @endforeach
                </div>  
            </section><!--//skills-section-->
        @endif        
        
    </div><!--//main-body-->
</div>

{{-- //---------------------------------------------------------------------------------------------------- --}}
<div class="row">
 <div class="col-4"></div>   
 <div class="col-3 mt-5 mb-5">
    <button class="btn btn-primary float-right mr-5">Download PDF</button>
</div>   
</div>

@endsection
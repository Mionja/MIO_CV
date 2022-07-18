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

  <body>

    <!-- ##########  MENU A GAUCHE ########## -->
    <div class="br-logo"><a href="#"><span class="text-danger">[ </span> <i class="text-muted">MIO CV</i><span class="text-danger">]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar ">
      <ul class="br-sideleft-menu">
        <label class="sidebar-label pd-x-10 mg-t-20 op-3">  </label>
        <li class="br-menu-item">
          <a href="{{route('home')}}" class="br-menu-link">
            <img src="{{asset('img/house.png')}}" class="menu-item-icon wd-25">
            <span class="menu-item-label ">HOME</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <label class="sidebar-label pd-x-10 mg-t-20 op-3 mt-5">Sections</label>
        <li class="br-menu-item">
          <a href="{{route('perso_details.index')}}" class="br-menu-link">
            <img src="{{asset('img/perso_detail.png')}}" alt="img" class="menu-item-icon wd-30">
            <span  class="menu-item-label"> PERSONAL DETAILS</span>
          </a><!-- br-menu-link -->
        
        </li>

        <li class="br-menu-item">
          <a href="{{route('education.index')}}" class="br-menu-link">
            <img src="{{asset('img/education.png')}}" alt="img" class="menu-item-icon wd-30">
            <span class="menu-item-label">EDUCATION</span>
          </a><!-- br-menu-link -->
          
        </li>

        <li class="br-menu-item">
          <a href="{{route('experience.index')}}" class="br-menu-link ">
            <img src="{{asset('img/experience.png')}}" alt="img" class="menu-item-icon wd-30">
            <span class="menu-item-label">EXPERIENCE</span>
          </a><!-- br-menu-link --> 
        </li>

        <li class="br-menu-item">
          <a href="{{route('formation.index')}}" class="br-menu-link ">
            <img src="{{asset('img/formation.png')}}" alt="img" class="menu-item-icon wd-30">
            <span class="menu-item-label "> FORMATION</span>
          </a><!-- br-menu-link -->
        </li>

        <li class="br-menu-item">
          <a href="{{route('objective.index')}}" class="br-menu-link ">
            <img src="{{asset('img/objective.png')}}" alt="img" class="menu-item-icon  wd-30">
            <span class="menu-item-label">OBJECTIVE</span>
          </a><!-- br-menu-link -->
          
        </li>

        <label class="sidebar-label pd-x-10 mg-t-20 op-3">More sections</label>

        <li class="br-menu-item">
          <a href="{{route('age')}}" class="br-menu-link ">
            <img src="{{asset('img/age.png')}}" alt="img" class="menu-item-icon  wd-30">
            <span class="menu-item-label">AGE</span>
          </a><!-- br-menu-link -->
        </li>

        <li class="br-menu-item">
          <a href="{{route('h_skill.index')}}" class="br-menu-link ">
            <img src="{{asset('img/skill.png')}}" alt="img" class="menu-item-icon wd-30">
            <span class="menu-item-label "> HARD SKILLS</span>
          </a><!-- br-menu-link -->
        </li>

        <li class="br-menu-item">
          <a href="{{route('s_skill.index')}}" class="br-menu-link ">
            <img src="{{asset('img/s_skill.png')}}" alt="img" class="menu-item-icon wd-30">
            <span class="menu-item-label "> SOFT SKILLS</span>
          </a><!-- br-menu-link -->
        </li>

        <li class="br-menu-item">
          <a href="{{route('activity.index')}}" class="br-menu-link ">
            <img src="{{asset('img/hobbies.png')}}" alt="img" class="menu-item-icon wd-30">
            <span class="menu-item-label ">ACTIVITIES</span>
          </a><!-- br-menu-link -->
        </li>
        
        <li class="br-menu-item">
          <a href="{{route('language.index')}}" class="br-menu-link">
            <img src="{{asset('img/language.png')}}" alt="img" class="menu-item-icon wd-30">
            <span class="menu-item-label">LANGUAGE</span>
          </a><!-- br-menu-link -->
        </li>
        
        <label class="sidebar-label pd-x-10 mg-t-20 op-3">--------------------------------------------</label>
        <li class="br-menu-item">
          <a href="{{route('cv')}}" class="br-menu-link">
            
            <span class="menu-item-label ml-5">View CV</span>
          </a><!-- br-menu-link -->
        </li>
      </ul><!-- br-sideleft-menu -->     

      <br>
    </div><!-- br-sideleft -->

    <!-- ########## FIN DU MENU A GAUCHE ########## -->

    <!-- ########## ENTETE ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- br-header-left -->
    </div><!-- br-header -->
    <!-- ########## FIN ENTETE ########## -->


    <!-- ########## CONTENU PRINCIPAL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <span class="breadcrumb-item active">@yield('page-title')</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <div>
          <h4>@yield('pagetitle')</h4>
          <p class="mg-b-0">@yield('page-description')</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">

          @yield('main-content')    
        
      </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->
    <!-- ########## FIN DU MENU PRINCIPALE ########## -->
    <footer>
      <div class="mb-5"></div>
    </footer>

    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/jquery.peity.min.js') }}"></script>

    <script src="{{ asset('js/bracket.js') }}"></script>
  </body>

</html>

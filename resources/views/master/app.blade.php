<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Norbert, Template, Theme, Responsive, Fluid, Retina">
  <title>Lycee communal de Zorgho</title>

  <!-- Favicons -->
  <link href="{{asset('img/LOGOL.jpg')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{asset('css/bulle.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-fileupload.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/datepicker.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/daterangepicker.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/compiled/timepicker.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/datertimepicker.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/carte.css')}}">
  <!--external css-->

</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo">
      <img src="{{asset('img/LOGOL.jpg')}}" width="40px" height="40px" alt=""> </a>
      <!--logo end-->
        
      <div class="nav centre notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
        LYCEE COMMUNAL DE ZORGHO 
          <!-- notification dropdown end -->
        </ul>
      </div>

      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
          <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Se deconnecter') }}
                    </x-responsive-nav-link>
                </form>
            </div>
          </li>
        </ul>
      </div>
    </header>


   

    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('img/directeur.png')}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="couleur mt">
            <a class="" href="{{route('dashboard')}}">
              <i class="fa fa-dashboard"></i>
              <span>Profile</span>
              </a>
          </li>
          <li class="couleur1 sub-menu">
            <a  href="javascript:;">
             
              <span>Adimistration</span>
              </a>
            <ul class="sub1">
              <li><a href="{{route('ajout.secret')}}">Ajouter un secretaitre</a></li>
              <li><a href="{{route('ajouteleve.index')}}">Ajouter un eleve</a></li>
              <li><a href="#">Liste des secretaire</a></li>
              <li><a href="{{route('listee.index')}}">Lister des eleves</a></li>
            </ul>
          </li>
          <li class="couleur2 sub-menu">
            <a href="javascript:;">
            <i class="fa fa-book"></i>
              <span>Pedagogie</span>
              </a>
            <ul class="sub1">
              <li><a href="#">Matiere</a></li>
              <li><a href="{{route('devoir.index')}}">Devoir</a></li>
              <li><a href="{{route('note.index')}}">Note</a></li> 
            </ul>
          </li>
          <li class="couleur3 sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Paramettre</span>
              </a>
            <ul class="sub1">
              <li><a href="{{route('anneesco.index')}}">Annee-scholaire</a></li>
              <li><a href="{{route('classe.index')}}">Classe</a></li>
              <li><a href="{{route('matiere.index')}}">Matiere</a></li>
              <li><a href="{{route('trimestre.index')}}">Trimestre</a></li>
            </ul>
          </li>
          
          
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>




    @yield('content')


    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights lycee communal de Zorgho
        </p>
        
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/common-scripts.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/jquery.gritter.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/gritter-conf.js')}}"></script>
  <script src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap-fileupload.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap-datepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/date.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/daterangepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap-timepicker.js')}}"></script>
  <script src="{{asset('js/advanced-form-components.js')}}"></script>

</body>

</html>

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
  <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-Norbert-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
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




      <!--logo end-->
     
     
    
    </header>

    




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
  <!--common script for all pages-->
  <script src="{{asset('js/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script type="text/javascript" src="{{asset('js/jquery.gritter.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/gritter-conf.js')}}"></script>
</body>

</html>

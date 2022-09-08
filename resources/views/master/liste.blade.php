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
  <link href="{{asset('css/demo_page.css')}}" rel="stylesheet" />
  <link href="{{asset('css/demo_table.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('css/DT_bootstrap.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
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
             
              <span>Administration</span>
              </a>
            <ul class="sub1">
              <li><a href="{{route('secretaire.create')}}">Ajouter un secretaitre</a></li>
              <li><a href="{{route('ajouteleve.index')}}">Ajouter un eleve</a></li>
              <li><a href="{{route('secretaire.index')}}">Liste des secretaire</a></li>
              <li><a href="{{route('listee.index')}}">Lister des eleves</a></li>
            </ul>
          </li>
          <li class="couleur2 sub-menu">
            <a href="javascript:;">
            <i class="fa fa-book"></i>
              <span>Pedagogie</span>
              </a>
            <ul class="sub1">
              <li><a href="{{route('listes.index')}}">Matiere</a></li>
              <li><a href="{{route('devoir.index')}}">Devoir</a></li>
              <li><a href="{{route('note.index')}}">Note</a></li>
              <li><a href="{{route('index.index')}}">Note des élèves</a></li>  
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



    </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" language="javascript" src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="{{asset('js/jquery.dataTables.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/DT_bootstrap.js')}}"></script>
  <!--common script for all pages-->
  <script src="{{asset('js/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');


      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>

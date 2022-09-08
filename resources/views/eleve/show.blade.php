@extends('master.app')

@section('content')
  
  

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Carte</h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">


            <div class="container cartee"> 
                <div class="entoure">
                    <p class="lyceec">
                        LYCEE COMMUNAL DE ZORGHO
                    </p>

                    <br>
                    <div class="diposi">
                        <div>
                          <img class="ima" src="{{asset('img/drapeau.png')}}" width="80px" height="50px" >
                        </div>
                        <div>
                          <p class="devise">
                              DICIPLINE-TRAVAIL-EXCELLENCE
                          </p>
                          <p class="cartes">
                              CARTE SCOLAIRE 2022-2023
                          </p>
                        </div>
                        <div>
                              <img class="imalo" src="{{asset('img/LOGOL.jpg')}}" width="80px" height="60px" alt="">
                        </div>
                        
                    </div>

                    <div class="civile">
                    <table>
                      
                
                            <tr>
                                <td class="gras">Matricule</td>
                                <td>{{$eleves->matricule}}</td>
                            </tr>
                            <tr>
                                <td class="gras">Nom et Prenom</td>
                                <td>{{$eleves->nom}} {{$eleves->prenom}}</td>
                            </tr>
                            <tr>
                                <td class="gras">Sexe</td>
                                <td>{{$eleves->sexe}}</td>
                            </tr>
                            <tr>
                                <td class="gras">Date et lieu de naissance</td>
                                <td>{{$eleves->date_naissance}} {{$eleves->lieu}}</td>
                            </tr>
                            <tr>
                                <td class="gras">Classe</td>
                                <td>{{$eleves->classe_id}}</td>
                            </tr>
                            <tr>
                                <td class="gras">Annee</td>
                                <td>{{$eleves->annee_id}}</td>
                            </tr>
                            <tr>
                                <td class="gras">Personne a prevenir</td>
                                <td>{{$eleves->pere}} {{$eleves->numero}}</td>
                            </tr>
                            

                        </table>

                    </div>

                </div>

           </div>


            

          

              
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    @endsection
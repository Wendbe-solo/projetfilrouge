@extends('master.app')

@section('content')
  
  

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Carte</h3>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">




           <div class="cartee"> 
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

                </div>

           </div>

                    <div class="flex">
                        
                        <div  id="button-print"  class="bg-[#1C683F] hover:bg-[#1C683F] btn btn-primary mt-4 ml-6" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Imprimer la carte
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
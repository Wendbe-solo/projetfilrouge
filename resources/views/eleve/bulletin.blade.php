@extends('master.app')

@section('content')
  
  

    <section id="main-content">
      <section class="wrapper">
        <p><i class="fa fa-angle-right"></i> Bulletin</p>
        <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
                <p class="trime">Trimestre</p>
                <p class="bulle">BULLETIN DE NOTES</p>

            <div class="classe1"><p class="nom"> Nom et Prénom: </p> <p class="matril">N° Matricule</p></div>

            <p>Date et lieu de naissance</p>
            
            <div class="classe">
                <p class="clas">Classe:  </p> <p class="effec">Effectif Garçon: </p> 
                <p class="fill">Fille: </p> <p class="total"> Totale: </p> 
                <p class="double"> Classe doublé: </p>
            </div>


        <div class="center">
            <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">Matiere</th>
            <th scope="col">coeficient</th>
            <th scope="col">Devior</th>
            <th scope="col">Composition</th>
            <th scope="col">Moyenne</th>
            <th scope="col">Note</th>
            <th scope="col">Appreciation</th>
            <th scope="col">Professeur</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
            <th></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>  
        </tbody>
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
@extends('master.app')

@section('content')



    <section id="main-content">
      <section class="wrapper">
        <h3> Liste des eleves</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              

            <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Matricule</th>
            <th scope="col">Nom et prenom</th>
            <th scope="col">Date et lieu de naissance</th>
            <th scope="col">Gerne</th>
            <th scope="col">Nom du pere</th>
            <th scope="col">Nom de la mere</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Annee scolaire</th>
            <th scope="col">Classe</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eleves as $eleve)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$eleve->matricule}}</td>
            <td>{{$eleve->nom}} {{$eleve->prenom}}</td>
            <td>{{$eleve->date_naissance}} à {{$eleve->lieu}}</td>
            <td>{{$eleve->sexe}}</td>
            <td>{{$eleve->pere}}</td>
            <td>{{$eleve->mere}}</td>
            <td>{{$eleve->numero}}</td>
            <td>{{$eleve->annee->annee}}</td>
            <td>{{$eleve->classe->classe}}</td>
            <td>{{$eleve->photo}}</td>
            <td>{{$eleve->created_at}}</td>
            <td>
                <a href="" class="btn btn-info">Editer</a>
                <a href="" class="btn btn-danger" onclick="">Suprimer</a>

                <form id="" action="" method="post">
                    @csrf 
                    <input type="hidden" name="_method" value="delete">
                </form>
            </td>
            </tr>  
            @endforeach
        </tbody>
        </table>

            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    
  </section>
  




@endsection
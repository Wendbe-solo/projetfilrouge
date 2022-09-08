@extends('master.app')

@section('content')

<section id="main-content">
    <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Ajout d'élève</h3>
            <div class="form-panel">

            <div class="content-panel">
            <div class="adv-table">

            @if(session()->has("success"))
        <div class="alert alert-sucess">
            {{session()->get('success')}}
            </div>
        @endif

        @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

@if (!empty($eleves))

<table class="table table-bordered table-hover">
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Classe</th>
        <th>Sexe</th>
        <th colspan="3">Action</th>
    </tr>
    @foreach($eleves as $eleve)

    <tr>
        <td>{{ $eleve->nom}}</td>
        <td>{{ $eleve->prenom}}</td>
        <td>{{ $eleve->classe->classe}}</td>
        <td>{{ $eleve->sexe}}</td>
       
        <td><a  class="btn btn-info" href="/eleve/update/{{ $eleve->id}}">Editer</a></td>
        <td><a  class="btn btn-info" href="/eleve/{{ $eleve->id}}">Afficher</a></td>
        <td> <a class="btn btn-danger" onclick="return confirm('Etes vous sur de supprimer?');"   href="/eleve/delete/{{ $eleve->id}}">Supprimer</a></td>
    </tr>
    @endforeach
</table>

    @else
    <p>La liste des eleves est vide</p>
    @endif


            </div>
            </div>

        <!-- /form-panel -->
        </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
  </section

@endsection
@extends('master.app')

@section('content')


<section id="main-content">
      <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Choisir la classe</h3>
            <div class="form-panel">


        <div class="center">
            <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Classe</th>
            <th scope="col">Matiere</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matieres as $matiere)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$matiere->classe->classe}}</td>
            <td>{{$matiere->matiere}}</td>
            <td>
            <a class="btn btn-info" href="{{route('moyennematiere.show',$matiere->id)}}">Afficher</a>
            </td>
            </tr>  
            @endforeach
        </tbody>
        </table>
        </div>

            </div>
            </div>
        </div>

      </section>
      <!-- /wrapper -->
    </section>








@endsection
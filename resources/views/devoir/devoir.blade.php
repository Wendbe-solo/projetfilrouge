@extends('master.app')

@section('content')


<section id="main-content">
      <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Ajout de Devoir</h3>
            <div class="form-panel">

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
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="{{route('devoir.store')}}">
                @csrf


                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Devoir</label>
                    <div class="col-lg-10">
                      <select class="form-select form-select-lg mb-3" name="libele" aria-label=".form-select-lg example">
                        <option value="1er">1</option>
                        <option value="2ème">2</option>
                        <option value="3ème">3</option>
                        <option value="4ème">4</option>
                        <option value="5ème">5</option>
                        <option value="6ème">6</option>
                        <option value="7ème">7</option>
                        <option value="8ème">8</option>
                        <option value="9ème">9</option>
                        <option value="10ème">10</option>
                      </select>
                    </div>
                </div>

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Matiere</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="matiere_id" id="">
                  <option value=""></option>

                @foreach ($matieres as $matiere)
                <option value="{{$matiere->id}}"> {{$matiere->matiere}} {{$matiere->classe->classe}} </option>
                @endforeach

                </select>
                </div>
                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Trimestre</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="trimestre_id" id="">
                  <option value=""></option>

                @foreach ($trimestres as $trimestre)
                <option value="{{$trimestre->id}}"> {{$trimestre->trimestre}}</option>
                @endforeach

                </select>
                </div>

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Classe</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="classe_id" id="classe">
                  <option value="">Classe</option>

                  @foreach ($classes as $classe)
                <option value="{{$classe->id}}"> {{$classe->classe}}</option>
                @endforeach

                </select>
                </div>

                

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-theme" type="submit">Valider</button>
                        <button class="btn btn-theme04" type="button">Annuler</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>

        <div class="center">
            <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Devoir</th>
            <th scope="col">Matiere</th>
            <th scope="col">Classe</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($devoirs as $devoir)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$devoir->libele}}</td>
            <td>{{$devoir->matiere->matiere}}</td>
            <td>{{$devoir->matiere->classe->classe}}</td>
            <td>{{$devoir->created_at}}</td>
            <td>
                <a href="{{route('devoir.edit',['devoir'=>$devoir->id])}}" class="btn btn-info">Editer</a>
                <form id="form-{{$devoir->id}}"  action="{{route('devoir.destroy',$devoir->id)}}" method="post">
                    @csrf 
                    <input type="hidden" name="_method" value="delete">

                    @method('DELETE')
                    <button class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cette devoir?')){document.getElementById('form-{{$devoir->id}}').submit()}"  type="submit">Supprimer</button>
                </form>
            </td>
            </tr>  
            @endforeach
        </tbody>
        </table>
        </div>
        <!-- /row -->




        
      </section>
      <!-- /wrapper -->
    </section>








@endsection
@extends('master.app')

@section('content')



<section id="main-content">
      <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Relation</h3>

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
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="">
                @csrf

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Nom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="annee" type="text" />
                    </div>
                </div>

                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="gestion" id="">
                  <option value=""></option>

                @foreach ($annees as $annee)
                <option value="{{$annee->id}}"> {{$annee->annee}}</option>
                @endforeach

                </select>


                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="classe" id="">
                  <option value=""></option>

                @foreach ($classes as $classe)
                <option value="{{$classe->id}}"> {{$classe->classe}}</option>
                @endforeach

                </select>


                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="trimestre" id="">
                  <option value=""></option>

                @foreach ($trimestres as $trimestre)
                <option value="{{$trimestre->id}}"> {{$trimestre->trimestre}}</option>
                @endforeach

                </select>


                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="matiere" id="">
                  <option value=""></option>

                @foreach ($matieres as $matiere)
                <option value="{{$matiere->id}}"> {{$matiere->matiere}}</option>
                @endforeach

                </select>

                
                
                
                  


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-theme" type="submit">Save</button>
                        <button class="btn btn-theme04" type="button">Cancel</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- /form-panel -->
       

<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

</div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->


      </section>


@endsection
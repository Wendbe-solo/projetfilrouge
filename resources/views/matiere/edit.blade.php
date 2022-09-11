@extends('master.app')

@section('content')


<section id="main-content">
      <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Ajout de matiere</h3>
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
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="{{route('matiere.update',$matiere->id)}}">
                @csrf

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Matiere</label>
                    <div class="col-lg-10">
                      <input class=" form1" id="firstname" value="{{$matiere->matiere}}" name="matiere" type="text" />
                    </div>
                </div>

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Professeur</label>
                    <div class="col-lg-10">
                      <input class=" form1" id="firstname" value="{{$matiere->professeur}}" name="professeur" type="text" />
                    </div>
                </div>

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Coeficient</label>
                    <div class="col-lg-10">
                      <select class="form-select form-select-lg mb-3" value="{{$matiere->coeficient}}" name="coeficient" aria-label=".form-select-lg example">
                        <option selected>Choisir</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="8">9</option>
                        <option value="8">10</option>
                      </select>
                    </div>
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
                        <button class="btn btn-theme" type="submit">Save</button>
                        <button class="btn btn-theme04" type="button">Cancel</button>
    
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>








@endsection
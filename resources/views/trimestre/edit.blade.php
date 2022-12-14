@extends('master.app')

@section('content')


<section id="main-content">
      <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu">Ajout de classe</h3>
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
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="{{route('trimestre.update',$trimestre->id)}}">
                @method('PATCH')
                @csrf

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Trimestre</label>
                    <div class="col-lg-10">
                    <select class="form-select form-select-lg mb-3" value="{{$trimestre->trimestre}}" aria-label=".form-select-lg example" name="trimestre" id="">
                  <option value=""></option>
                <option value="Premier Trimestre">Premier Trimestre </option>
                <option value="Deuxième Trimestre">Deuxième Trimestre </option>
                <option value="Troisième Trimestre">Troisième Trimestre </option>
                <option value="Premier Semestre">Premier Semestre </option>
                <option value="deuxieme Semestre"> deuxieme Semestre</option>
                </select>

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Annee</label>
                    <div class="col-lg-10">
                    <select class="form-select form-select-lg mb-3" value="{{$trimestre->annee_id}}" aria-label=".form-select-lg example" name="annee_id" id="">
                  <option value=""></option>

                @foreach ($annees as $annee)
                <option value="{{$annee->id}}"> {{$annee->annee}}</option>
                @endforeach

                </select>
                    </div>
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
        <!-- /row -->

        
      </section>
      <!-- /wrapper -->
    </section>





@endsection
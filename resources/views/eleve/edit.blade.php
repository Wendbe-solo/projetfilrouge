@extends('master.app')

@section('content')

    <section id="main-content">
    <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Modification d'élève</h3>
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
              <form  method="post" action="/listee/update/{{$eleves->id}}" class="form-horizontal style-form">
              @csrf

              <div class="form-group last">
                  <label class="control-label col-md-3">Image Upload</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" name="photo" value="{{$eleves->photo}}" class="default" />
                        </span>
                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                      </div>
                    </div>
                    <span class="label label-info">NOTE!</span>
                  </div>
                </div>


              <div class="col-6 ">
                    <label for="firstname" class="control-label col-lg-2">Matricule</label>
                    
                      <input class=" col-6" id="firstname" value="{{$eleves->matricule}}" name="matricule" type="text"  require/>
                  

                    <label for="firstname" class="control-label col-lg-2">Nom</label>
                    
                      <input class="col-6" id="firstname" value="{{$eleves->nom}}" name="nom" type="text" />
                  

                </div>

                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Prenom</label>
                    <input class=" col-6" id="lastname" value="{{$eleves->prenom}}" name="prenom" type="text" />

                    <label class="control-label col-lg-2">Date de naissance</label>
                    <input type="date" value="{{$eleves->date_naissance}}" name="date_naissance" class="col-6" id="">
                  
                     
                  </div>

                  </div>



                <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Lieu de naissance</label>
                    <input class=" col-6" value="{{$eleves->lieu}}" id="lastname" name="lieu" type="text" />

                    <label for="lastname" class="control-label col-lg-2">Sexe</label>
                    <select class="col-6" id="lastname" value="{{$eleves->sexe}}" name="sexe" type="text">
                      <option >Choisir</option>
                      <option value="Maxculin">Maxculin</option>
                      <option value="Feminin">Feminin</option>

                    </select>  
                    
                  </div>


                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Nom du père</label>
                    <input class="col-6" id="lastname" value="{{$eleves->pere}}" name="pere" type="text" />

                    <label for="lastname" class="control-label col-lg-2">Nom de la mère</label>
                    <input class="col-6" id="lastname" value="{{$eleves->mere}}" name="mere" type="text" />
                  </div>

                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Telephone</label>
                    <div class="col-lg-10">
                      <input class="col-6" id="lastname" value="{{$eleves->numero}}" name="numero" type="text" />
                    </div>
                  </div>


                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Annee</label>
                    <select class="col-6" aria-label=".form-select-lg example" value="{{$eleves->annee_id}}" name="annee_id" id="">
                  <option value=""></option>

                @foreach ($annees as $annee)
                <option value="{{$annee->id}}"> {{$annee->annee}}</option>
                @endforeach

                </select>

                <label for="firstname" class="control-label col-lg-2">Classe</label>
                    <select class="col-6" aria-label=".form-select-lg example" value="{{$eleves->classe_id}}" name="classe_id" id="">
                  <option value=""></option>

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

            <a href="{{route('classeliste1')}}">Retour</a>
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
  </section>
 

  @endsection
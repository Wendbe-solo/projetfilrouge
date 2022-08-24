@extends('master.appi')

@section('content')
    
      <center>
      <section class="wrapper1">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4 class="direction"> Inscription du directeur</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="get" action="">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Nom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="firstname" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Prenom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="lastname" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Mot de passe</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="password" type="password" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Confirmer Mot de passe</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="agree" class="control-label col-lg-2 col-sm-3">Diecteur</label>
                    <div class="col-lg-10 col-sm-9">
                      <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                    </div>
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
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <button class="btn btn-theme05" type="button"> <a class="lien" href="{{route('login')}}"> Se connecter</a></button>

    <br>
    <br>
    </center>


    <div class="cartee" >
                        <div id="printCard" >
                            <div class="flex h-1/4 w-100">
                                <div class="mb-1 w-2/3 text-2xl font-semibold text-[#007436] pl-3">
                                    Carte Scolaire
                                </div>
                                <div class="flex w-1/3 h-20 mb-1 ml-6">
                                    <img src="" alt="logo_universiteBobo" class="relative z-10 inset-0 w-auto h-42 " loading="lazy" />
                                    <p class="font-semibold text-black text-center p-3">Lycée Communal<br> de Zorgho</p>
                                </div>
                            </div>
                            <p class="border-1 w-1/3 mb-3 border-black"></p>
                            <div class="flex  w-100 h-3/4">
                                <div class="h-100 w-1/4 mb-1 ml-2 border-black">
                                    <img src="" alt="" class="lowercase object-contain " />
                                </div>
                                <div class="flex-auto pl-6 h-2/3">
                                    <h1 class="relative text-2xl font-semibold">
                                        Matricule: 
                                    </h1>
                                    <div class="relative text-lg ">
                                        Nom:
                                    </div>
                                    <div class="relative text-lg  mt-1">
                                        Prenom:
                                    </div>
                                    <div class="relative text-lg mt-1 capitalize">
                                        Cycle: 
                                    </div>
                                    <div class="relative  text-lg mt-1">
                                        Contact: 
                                    </div>
                                    <div class="relative  text-lg mt-1">
                                        Email: 
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
    @endsection
@extends('master.app')

@section('content')
    <section id="main-content">
      <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Inscription de l'administration</h3>
            <div class="form-panel">
              <div class="form">
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

        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{ route('ajout.secretaire') }}">
            @csrf

            <!-- Name -->
            <div class="form-group ">
            <label for="firstname" class="control-label col-lg-2">Nom</label>

            <div class="col-lg-10">
                <x-input id="name" class=" form-control" type="text" name="name" :value="old('name')" required  />
            </div>
            </div>

            <div class="form-group ">
            <label for="firstname" class="control-label col-lg-2">Prenom</label>

            <div class="col-lg-10">
                <x-input id="name" class=" form-control" type="text" name="last_name" :value="old('last_name')" required  />
            </div>
            </div>

         


            <div class="form-group ">
                  <label for="firstname" class="control-label col-lg-2">Role</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="name"  name="role" :value="old('Role')" required >
                      <option value="Directeur">Directeur</option>
                      <option value="Secretaire">Secretaire</option>

                </select>
                </div>


            <!-- Email Address -->
            <div class="form-group ">
           
            <label for="firstname" class="control-label col-lg-2">Email</label>
            <div class="col-lg-10">

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>
            </div>

            

            <!-- Password -->
            <div class="form-group ">
            
            <label for="firstname" class="control-label col-lg-2">Password</label>
            <div class="col-lg-10">
                <x-input id="password" class="form-control"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>
            </div>

            <!-- Confirm Password -->
            <div class="form-group ">
            
            <label for="firstname" class="control-label col-lg-2">Confirmation</label>

            <div class="col-lg-10">
                <x-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />
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
    



    @endsection
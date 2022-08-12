@extends('master.appi')

@section('content')

    <x-auth-card>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <center>
      <section class="wrapper1">
      <div class="row mt">
          <div class="col-lg-12">
            <h4 class="direction"> Inscription du directeur</h4>
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

        <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{ route('register') }}">
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

            <div class="col-lg-10">
                <x-input id="name" class=" form-control" type="text" name="role" :value="old('Role')" required  />
            </div>
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

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>

        </section>
    </center>
    <button class="btn btn-theme05" type="button"> <a class="lien" href="{{route('login')}}"> Se connecter</a></button>
    <br>
    <br>
    </x-auth-card>

    @endsection


@extends('master.app')

@section('content')



<section id="main-content">
      <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Ajout d'annee scolaire</h3>
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
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="{{route('anneesco.store')}}">
                @csrf

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Annee</label>
                    <div class="col-lg-10">
                      <input class="form1" id="firstname" name="annee" type="text" />
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
        <div class="center">
            <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Annee scolaire</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($annees as $annee)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$annee->annee}}</td>
            <td>{{$annee->created_at}}</td>
            <td>
       
            <a href="" class="btn btn-info">Editer</a>
                <form id="form-{{$annee->id}}"  action="{{route('anneesco.destroy',$annee->id)}}" method="post">
                    @csrf 
                    <input type="hidden" name="_method" value="delete">

                    @method('DELETE')
                    <button class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cet annee?')){document.getElementById('form-{{$annee->id}}').submit()}"  type="submit">Supprimer</button>
                </form>
            </td>
            </tr>  
            @endforeach
        </tbody>
        </table>
        </div>

      </section>
      <!-- /wrapper -->
    </section>


@endsection
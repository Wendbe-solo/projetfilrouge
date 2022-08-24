@extends('master.app')

@section('content')


<section id="main-content">
      <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Ajout de trimestre</h3>
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
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="{{route('trimestre.store')}}">
                @csrf

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Trimestre</label>
                    <div class="col-lg-10">
                      <input class=" form1" id="firstname" name="trimestre" type="text" />
                    </div>
                </div>

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Annee</label>
                    <div class="col-lg-10">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="annee_id" id="">
                  <option value=""></option>

                @foreach ($annees as $annee)
                <option value="{{$annee->id}}"> {{$annee->annee}}</option>
                @endforeach

                </select>
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
            <th scope="col">Trimestre</th>
            <th scope="col">Annee</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trimestres as $trimestre)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$trimestre->trimestre}}</td>
            <td>{{$trimestre->annee->annee}}</td>
            <td>{{$trimestre->created_at}}</td>
            <td>
                <a href="" class="btn btn-info">Editer</a>
                <form id="form-{{$trimestre->id}}"  action="{{route('trimestre.destroy',$trimestre->id)}}" method="post">
                    @csrf 
                    <input type="hidden" name="_method" value="delete">

                    @method('DELETE')
                    <button class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cette trimestre?')){document.getElementById('form-{{$trimestre->id}}').submit()}"  type="submit">Supprimer</button>
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
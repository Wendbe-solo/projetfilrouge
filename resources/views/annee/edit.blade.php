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
              <form method="post" action="{{route('anneesco.update',$annee->id)}}">
                @csrf

                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Annee</label>
                    <div class="col-lg-10">
                      <input class="form1" id="firstname" name="annee" value="{{$annee->annee}}" type="text" />
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


@endsection
@extends('master.app')

@section('content')

    <section id="main-content">
      <section class="wrapper">

      <h3>  ({{$devoirs->count()}}) devoir </h3>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Inséré les notes</h3>
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
                @php 

                $success = Session::get('success');
                @endphp

                @if($success)

                  <div class="alert alert-success">{{$success}} </div>
                @endif

           
                    <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('moyennematiere.store')}}">
                    @csrf
                        <table class="table table-bordered table-hover">
                              <thead>
                                  <tr>
                                  <th scope="col">N°</th>
                                  
                                  <th scope="col">Eleve</th>
                                  <th scope="col">Devoir</th>
                                  <th scope="col">matiere</th>
                                  <th scope="col">Note</th>

                                  </tr>
                              </thead>
                              <tbody>
                                
                              
                              
                              @foreach($notes as $note)
                              
                                  <tr>
                                  <th scope="row">{{$loop->index + 1}}</th>
                                  <td><input  name="eleve[]" type="text" value="{{$note->eleve_id}} " />{{$note->eleve->nom}} {{$note->eleve->prenom}}</td>
                                  <td> <input  name="note[]" type="text" value="{{$note->id}} " />{{$note->note}} </td>
                                
                                  @endforeach
                                  
                                  </tr>

                                  </tr> 
                        
                                   
                                  
                      
                              </tbody>
                        </table>

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


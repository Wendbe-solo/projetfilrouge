@extends('master.app')

@section('content')

    <section id="main-content">
      <section class="wrapper">

    
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

           
                    <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="{{route('note.store')}}">
                    @csrf
                    
                        <table class="table table-bordered table-hover">
                              <thead>
                                  <tr>
                                  <th scope="col">N°</th>
                                  <th scope="col">Nom et prenom</th>
                                  <th scope="col">Devoir</th>
                                  <th scope="col">Matiere</th>
                                  <th scope="col">Note</th>

                                  </tr>
                              </thead>
                              <tbody>
                                
                              @foreach($eleves as $eleve)
                              

                                  <tr>
                                  <th scope="row">{{$loop->index + 1}}</th>
                                  <td > <input name="eleve_id[]" value="{{$eleve->id}}" type="text"> {{$eleve->nom}} {{$eleve->prenom}}</td>
                                  <td > 
                                    
                                  <select name="devoir_id[]"  type="text" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                                          <option value=""></option>

                                          @foreach($devoirs as $devoir)
                                        <option value="{{$devoir->id}}"> {{$devoir->trimestre->trimestre}} {{$devoir->matiere->classe->classe}} {{$devoir->libele}} {{$devoir->matiere->matiere}}</option>
                                        @endforeach 
                                        </select>
                                  </td>

                                  <td > 
                                    
                                  <select name="matiere_id[]"  type="text" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                                          <option value=""></option>

                                          @foreach($matieres as $matiere)
                                        <option value="{{$matiere->id}}"> {{$matiere->classe->classe}}  {{$matiere->matiere}}</option>
                                        

                                        @endforeach 
                                        </select>
                                </td>
                                  <td><input  name="note[]" type="text" /></td>
                                  </tr>

                                  </tr> 
                        
                                  @endforeach 
                      
                              </tbody>
                        </table>

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


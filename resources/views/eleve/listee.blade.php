@extends('master.app')

@section('content')



    <section id="main-content">
      <section class="wrapper">
        <h3> Liste des eleves ({{$eleves->count()}}) </h3>
        <div class="row mb">
          <!-- page start-->

          <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Classe</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="classe_id" id="">
                  <option value=""></option>

                @foreach ($classes as $classe)
                <option value="{{$classe->id}}"> {{$classe->classe}}</option>
                @endforeach

                </select>
                </div>









                <div class="box-body">
                                <form action="{{ route('listee.index') }}" method="GET">
                                    {{-- @csrf --}}
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <h5><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="year_id" id="year_id" required class="form-control">
                                                        <option value="" {{ old('annee_id') ? '' : 'selected' }} disabled> annee
                                                            </option>
                                                        @foreach ($annees as $annee)
                                                            <option
                                                                value="{{ $annee->id }}">{{ $annee->annee }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <h5>@lang('Class') <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="class_id" id="class_id" required class="form-control">
                                                        <option value=""
                                                            {{ old('classe_is') ? '' : 'selected' }} disabled>
                                                            classe</option>
                                                        @foreach ($classes as $classe)
                                                            <option
                                                                value="{{ $classe->id }}">{{ $classe->classe }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4" style="padding-top: 25px;">
                                            <input type="submit" value="@lang('Search')" class="btn btn-rounded btn-dark">
                                        </div>
                                    </div>
                                </form>
                            </div>






                
          <div class="content-panel">
            <div class="adv-table">



              

            <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Matricule</th>
            <th scope="col">Nom et prenom</th>
            <th scope="col">Date et lieu de naissance</th>
            <th scope="col">Gerne</th>
            <th scope="col">Annee scolaire</th>
            <th scope="col">Classe</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eleves as $eleve)
            <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$eleve->matricule}}</td>
            <td>{{$eleve->nom}} {{$eleve->prenom}}</td>
            <td>{{$eleve->date_naissance}} à {{$eleve->lieu}}</td>
            <td>{{$eleve->sexe}}</td>
            <td>{{$eleve->annee->annee}}</td>
            <td>{{$eleve->classe->classe}}</td>
            <td>{{$eleve->created_at}}</td>
            <td>
              
                <a href="" class="btn btn-info">Editer</a>
                <form id="form-{{$eleve->id}}"  action="{{route('listee.destroy',$eleve->id)}}" method="post">
                    @csrf 
                    <input type="hidden" name="_method" value="delete">

                    @method('DELETE')
                    <button class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cet eleve?')){document.getElementById('form-{{$eleve->id}}').submit()}"  type="submit">Supprimer</button>
                </form>
            </td>
            </tr>  
            @endforeach
        </tbody>
        </table>

            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    
  </section>
  




@endsection
@extends('master.app')

@section('content')


<section id="main-content">
      <section class="wrapper">
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h3 class="milieu"> Ajout de Devoir</h3>
            <div class="form-panel">


            <div class="form-group">
            <select name="classe_id" id="classe" class="form-control input-lg dynamic" 
            data-dependent="state" >
              <option value="">select classe</option>
                @foreach($classes as $classe)

                <option value="{{$classe->id}}">{{$classe->classe}}</option>

                @endforeach
            </select>
            </div>
            <br>
            <div class="form-group">
            <select name="matiere_id" id="matiere" class="form-control input-lg dynamic" 
            data-dependent="city" >
                <option value="">Select</option>
            </select>
            </div>
            <div class="form-group">
            <select name="trimetre_id" id="trimetre" class="form-control input-lg dynamic" >
                <option value="">Select</option>
            </select>
            </div>
            {{ csrf_field()}}
           
            </div>
          </div>
        </div>





        
      </section>
    </section>
<script>
  $(document).ready(function()
  {
    $('.dynamic').change(function(){

      if($(this).val()!=''){
        var select = $(this).attr("id");
        var value = $(this).val();
        var dependent = $(this).data('dependent');
        var _token = $('input[name="_token"]').val();
        $.ajax({
          url:"{{route('composition.fetch')}}",
          method:"POST",
          data:{select:select, value:value, _token: _token, dependent:dependent},
          success:function(result){
            $('#'+dependent).html(result);
          }
        })
      }
    });
  });
</script>







@endsection
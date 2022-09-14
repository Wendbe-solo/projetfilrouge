@extends('master.liste')

@section('content')



  <section id="main-content">
      <section class="wrapper">
        <h3> Liste des eleves ({{$eleves->count()}}) </h3>
        <div class="row mb">
          <!-- page start-->
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
         

                <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th class="hidden-phone">classe</th>
                    <th class="hidden-phone">Gerne</th>
                    <th class="hidden-phone">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($eleves as $eleve)
                  <tr class="gradeX">
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$eleve->nom}}</td>
                    <td>{{$eleve->prenom}}</td>
                    <td class="center hidden-phone">{{$eleve->classe->classe}}</td>
                    <td class="center hidden-phone">{{$eleve->sexe}}</td>
                    <td>
              
                <a class="btn btn-info" href="{{route('listee.edit',$eleve->id)}}">Editer</a>
                <a class="btn btn-info" href="{{route('listee.show',$eleve->id)}}">Afficher</a>
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
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>




    
  




@endsection
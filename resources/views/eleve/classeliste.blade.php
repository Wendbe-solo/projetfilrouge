<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lycée</title>
</head>
<body>


    <form action="" method="get">
        <input type="text" value="{{Request::get('keyword')}}" name="keyword" id="" placeholder="entrez keyword">
        <select name="annee" id="">
            <option value="">-- Select Annee --</option>
            @if(!empty($annees))
                @foreach($annees as $annee)

                        <option value="{{$annee->id}}" {{(Request::get('annee')== $annee->id)? 'selected' : ''}}>
                            {{$annee->annee}}</option>
                @endforeach
            @endif
        </select>
        <!-- <input type="text" name="annee" value="{{Request::get('annee')}}" id="" placeholder="Entrer la annee">
        <input type="text" name="classe" value="{{Request::get('classe')}}" id="" placeholder="Entrer la classe"> -->
        <select name="classe" id="">
            <option value="">-- Select Classe --</option>
            @if(!empty($classes))
                @foreach($classes as $classe)

                        <option value="{{$classe->id}}" {{(Request::get('classe')== $classe->id)? 'selected' : ''}}>{{$classe->classe}}</option>
                @endforeach
            @endif
        </select>
        <button type="submit">Search</button>
        <button type="button" onclick="window.location.href='{{ route('classeliste') }}'">Retour</button>
    </form>
    
    <br>
    <table border="1" with="800">
        <tr>
            <th>N°</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Annee</th>
            <th>Classe</th>
            <th>Gerne</th>
        </tr>

        @if(!empty($eleves))
            @foreach($eleves as $eleve)
            <tr>
            <th>{{$loop->index + 1}}</th>
            <th>{{$eleve->nom}}</th>
            <th>{{$eleve->prenom}}</th>
            <th>{{$eleve->anneeName}}</th>
            <th>{{$eleve->classeName}}</th>
            <th>{{$eleve->sexe}}</th>
        </tr>
            @endforeach
        @endif
    </table>

</body>
</html>
<!doctype html>
<html lang="en">
 <head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Adherents</title>
</head>
<body>
 <h1 class="text-center text-success">Adherent</h1>
 
    
    <div class="card">
    <div class="card-header">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
            {{ session('success') }}
            </div>
            @endif
             <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/adherent.search')}}">
                <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
            
     </div>

    <div class="container">
    <table class="table">
        <thead>
            <tr>
                 <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date naissance</th>
                <th>Sexe</th>
                <th>Cotisation mensuel</th>
            </tr>
 </thead>

     <tbody>
             @foreach($a as $as)
            <tr>
                <td>{{ $as->id }}</td>
                <td>{{ $as->nom }}</td>
                <td>{{ $as->prenom }}</td>
                <td>{{ $as->date_naissance}}</td>
                <td>{{ $as->sexe }}</td>
                <td>{{ $as->cotisation_mensuel }}</td>
                <td>
                <a class = "btn btn-success" href="{{route('adherent.edit', $as->id)}}" > <i class="ft-edit mr-1 "></i>Modifier</a>
                    <a class = "btn btn-danger" 
                href="{{route('adherent.destroy', $as->id)}}"><i class="ft-trash-2 "></i>Supprimer</a></td>

            </tr>
            @endforeach
     </tbody>
    </table>
    <a class = "btn btn-success" href="{{route('adherent.create')}}" > <i class="ft-edit mr-1 "></i>Inserer Adherent</a>
    
    </div>
    </div>
    </div>
    
    
     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>
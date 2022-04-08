<!doctype html>
<html lang="en">
 <head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Creer Patient</title>

</head>
<body>
 <h1 class="text-center text-success">Ajout Adherent</h1>
 <div class="row justify-content-md-center">
<div class="col-md-6">
 <div class="card">
    <div class="card-header">
     <div class="container">
     @if($errors->any())
        <div class="alert alert-danger">
            <p>Veillez entrer les lettres</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
 <form action="{{ route('enregistrer.adherent') }}" method="POST" >
         @csrf
        <label for="">Nom:</label>
        <input type="text" name="nom" id="" class="form-control"><br>
            
        <label for="">Prenom:</label>
         <input type="text" name="prenom" id="" class="form-control"><br>

         <label for="">Date naissance:</label>
            <input type="date" name="date_naissance" id="" class="form-control"><br>

        <label for="">Sexe:</label>

            <select name="sexe" id="" class="form-control"><br>
                <option value="masculin">Masculin</option>
                <option value="feminin">Feminin</option>
            </select>

         <label for="">Cotisation mensuel:</label>
         <input type="number" name="cotisation_mensuel" id="" class="form-control"><br>

        <button class="btn btn-primary mt-3">Inserer</button>
        <div  align="right">
 <a class = "btn btn-info" href="{{route('adherent.index')}}" > <i class="ft-edit mr-1 "></i>Liste Adherent</a>
 </div>
 </form>
 
 </div>
 </div>
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
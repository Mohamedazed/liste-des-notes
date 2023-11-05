<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    @extends('layout')

    @section('title', 'Welcome Page')
</head>
<body>
    @section('content')
    <form action="{{route('notes.show')}}" method="GET">
       <div class="text-center">
        <h1>Liste des notes</h1> 
       <input type="text" placeholder="Entrer un nom" name="nom"><br>
       <input type="submit" value="Rechercher">
       </div>
        
    </form>
    
    <table class="table">  
        <thead>
            <tr>
                <th>Nom</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $nom=>$note)
                <tr>
                    <td>{{$nom}}</td>
                    <td>{{$note}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>
</html>
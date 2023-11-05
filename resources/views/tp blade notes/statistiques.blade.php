<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
    <style>
        .green{
           background-color: green 
        }
        .red{
           background-color: red 
        }
        .orange{
           background-color: orange 
        }
    </style>
    @extends('layout')

    @section('title', 'Welcome Page')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    @section('content')
    <form action="{{url('notes.statistique')}}" method="GET">
        <div class="margin 1px text-center">
            <h1>Liste des notes</h1> 
           <input type="text" placeholder="Entrer un nom" name="nom"><br>
           <input type="submit" value="Rechercher">
        </div>
    </form>
    <?php
    $notes = [
        "Mohamed Alaoui" => "16",
        "Ahmed Bennani" => "14",
        "Rachida Kich" => "6",
        "Aicha Saaoudi" => "19",
        "Noura Alaoui" => "7",
        "Samar Rhaoussi" => "13",
        "Aicha Siraj" => "10",
        "Samiha Hakim" => "9",
        "Mohamed Rami" => "17",
        "Sami Tazi" => "7",
        "Noura Tazi" => "14"
    ];
    arsort($notes);
    ?>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $nom=>$note)
                @if ($note > 10 )                
                <tr class="green">
                    <td>{{$nom}}</td>
                    <td>{{$note}}</td>
                </tr>
                @elseif (8 <= $note && $note <= 10 )                
                <tr class='orange'>
                    <td>{{$nom}}</td>
                    <td>{{$note}}</td>
                </tr>
                @else                
                <tr class='red'>
                    <td>{{$nom}}</td>
                    <td>{{$note}}</td>
                </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    @endsection
</body>
</html>
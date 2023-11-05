<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Results</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- resources/views/welcome.blade.php -->
@extends('layout')

@section('title', 'Welcome Page')


</head>
<body>
    @section('content')
    
    <div class="text-center">
        <h1>Search Results</h1>
        @if(count($result) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($result as $nom => $note)
                        <tr>
                            <td>{{ $nom }}</td>
                            <td>{{ $note }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Aucun élève ne correspond à la recherche.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        @else
            <p>Aucun résultat trouvé.</p>
        @endif
        <a href="{{ route('notes.index') }}">Retour à la liste complète</a>
    </div>
    @endsection
</body>
</html>


@extends('layout') 

@section('content')
    <div class="container">
        <h1>Page d'accueil</h1>
<hr>
        <div class="articles">
            <label for="">Email :</label><br>
            <input type="email" name="email" id=""><br>
            <label for="">Message :</label><br>
            <textarea  rows="4" cols="50"></textarea>
            <br>
            <input type="submit" value="Submit">
            <hr>
        </div>
    </div>
@endsection
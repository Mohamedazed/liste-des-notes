@extends('layout') 

@section('content')
    <div class="container ">
        <h1 class="text-center">Page d'accueil</h1>
<hr>
        <div class="row">
            @foreach($articles as $article)
            <div class="col-md-3 m-4">
                
                <x-article 
                    image="{{  $article['image'] }}"
                    title="{{ $article['title'] }}"
                    text="{{ $article['text'] }}"
                    url="{{ $article['url'] }}"
                />
                
            </div>
            @endforeach
        </div>
    </div>
@endsection

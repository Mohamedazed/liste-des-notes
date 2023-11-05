<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class noteControlleur extends Controller
{
    public function index(Request $request){
        
        $notes=["Mohamed Alaoui" => "16", 
        "Ahmed Bennani" => "14",
         "Rachida kich" => "6", 
        "Aicha Saaoudi" => "19", 
        "Noura Alaoui" => "7", 
        "Samar Rhaoussi" => "13", 
        "Aicha Siraj" => "10",
         "Samiha Hakim" => "09", 
         "Mohamed Rami"=> "17",
          "Sami Tazi" => "7", 
          "Noura Tazi" => "14"] ; 
        return view('notes', ['notes'=> $notes]);
    }
    public function statistique(Request $request){
        $notes=[
        "Mohamed Alaoui" => 16,   
        "Ahmed Bennani" => 14,
        "Rachida Kich" => 6,
        "Aicha Saaoudi" => 19,
        "Noura Alaoui" => 7,
        "Samar Rhaoussi" => 13,
        "Aicha Siraj" => 10,
        "Samiha Hakim" => 9,
        "Mohamed Rami" => 17,
        "Sami Tazi" => 7,
        "Noura Tazi" => 14] ; 
        return view('statistiques', ['notes'=> $notes]);
    }
    public function show(Request $request){
        $nomR = $request->input("nom");
        $res = [];
        $notes = [
            "Mohamed Alaoui" => 16,
            "Ahmed Bennani" => 14,
            "Rachida Kich" => 6,
            "Aicha Saaoudi" => 19,
            "Noura Alaoui" => 7,
            "Samar Rhaoussi" => 13,
            "Aicha Siraj" => 10,
            "Samiha Hakim" => 9,
            "Mohamed Rami" => 17,
            "Sami Tazi" => 7,
            "Noura Tazi" => 14
        ];
    
        foreach($notes as $nom => $note) {
            if(stripos($nom, $nomR) !== false) {
                $res[$nom] = $note;
            }

        }
    
        return view('show', ['result' => $res]);
    }

    public function index1()
    {
        $articles = [
            [
                'image' => "{{ asset('images/image.png') }}",
                'title' => 'Titre de l\'article 1',
                'text' => 'Contenu de l\'article 1',
                'url' => 'lien_article1',
            ],
            [
                'image' => "{{ asset('images/bg.png') }}",
                'title' => 'Titre de l\'article 2',
                'text' => 'Contenu de l\'article 2',
                'url' => 'lien_article2',
            ],
            [
                'image' => 'url_de_l_image3.jpg',
                'title' => 'Titre de l\'article 3',
                'text' => 'Contenu de l\'article 3',
                'url' => 'lien_article3',
            ],
        ];        
        return view('home', compact('articles'));
    }
    

public function index2()
{
    return view('contact');
}

}
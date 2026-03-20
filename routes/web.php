<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route 2:page a propos
Route::get('/about',function(){
    return '<h1>A propos de nous </h1>
            <p>nous sommes une equipe laravel!</p>';
});
//Route 3:contact
Route::get('/contact',function(){
    return '<h1>contactez-nous </h1>
            <p>Email :contact@laravel.com</p>';
});

//Route 4:Services
Route::get('/services',function(){
    return '<h1>Nos services </h1>
            <ul>
                <li>Developpement web</li>
                <li>Application Mobile</li>
                </ul>';
});
//Route avec parametre obligatoire
Route::get('/utilisateur/{nom}', function ($nom){
    return "<h1>Profil de $nom</h1>
            <p>Bienvenue sur votre page!</p>";
});
//Route avec deux paramétres
Route::get('/article/{id}/{titre}' ,function($id, $titre){
    return "<h1>Article  #$id :$titre</h1>";
});
//Route avec parametre optionnel
Route::get('/bonjour/{nom?}', function ($nom='visiteur'){
    return "<h1>Bonjour, $nom!</h1>";
});
//Route avec contrainte(seulement des chiffres)
Route::get('/produit/{id}' , function($id){
    return "<h1>Produit #$id </h1>";
})->where('id','[0-9]+');

Route::get("/calculer/{a}/{b}", function($a ,$b){
    return $a + $b;
});
Route::get("/age/{age}", function($age){
    if ($age>=18){
        return"vous etes majeur";
    }else{
        return "vous etes mineur";
    };
});
Route::get("/equipe/{membre?}", function($membre){
    $equipe = ["asma","yasmine","aziz"];
    if ($membre === null) {
        return "Toute l'équipe";
    }

    if (in_array($membre, $equipe)) {
        return "Membre de l'équipe : " . $membre;
    }

    return "Ce membre n'existe pas";
});

Route::get('/home', function(){
    return view('home');
});
Route::get('/profil', function (){
    return view ('profil' ,[
        'nom' => 'Alice',
        'age' => '25',
        'ville' => 'Paris',
    ]);
});
Route::get('/produits', function (){
    $produits = [
        ['nom'=>'ordinateur','prix'=>899],
        ['nom'=>'Souris','prix'=> 25],
        ['nom'=>'Clavier','prix'=> 65],
        ['nom'=>'Ecran','prix'=> 299],
    ];
    return view('produits',['produits'=>$produits]);
});
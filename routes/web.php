<?php 
 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PageController; 
 
Route::get('/', [PageController::class, 'home']); 
 
Route::get('/about', [PageController::class, 'about']); 
 
Route::get('/contact', [PageController::class, 'contact']); 
 
Route::get('/services', [PageController::class, 'services']); 
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
use App\Http\Controllers\TaskController;
// Redirige / vers la liste des tâches
Route::get('/', fn() => redirect()->route('tasks.index'));
// Génère automatiquement les 7 routes CRUD
Route::resource('tasks', TaskController::class);

Route::get('/blog', [PageController::class, 'blog']);
Route::get('/', fn()=>redirect()->route('tasks.index'));
Route::resource('tasks',TaskController::class);
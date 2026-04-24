<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
 
class PageController extends Controller 
{ 
    // Page d'accueil 
    public function home() 
    { 
        return view('home'); 
    } 
 
    // Page À propos 
    public function about() 
    { 
        $data = [ 
            'titre'       => 'À propos de nous', 
            'description' => 'Nous sommes une équipe passionnée par Laravel !' 
        ]; 
 
        return view('about', $data); 
    } 
 
    // Page Contact 
    public function contact() 
    { 
        $contacts = [ 
            'email'     => 'contact@monsite.com', 
            'telephone' => '01 23 45 67 89', 
            'adresse'   => '123 Rue Laravel, Paris' 
        ]; 
 
        return view('contact', ['contacts' => $contacts]); 
    } 
 
    // Page Services 
    public function services() 
    { 
        $services = [ 
            ['nom' => 'Développement Web', 'prix' => '1500€'], 
            ['nom' => 'Design UI/UX', 'prix' => '800€'], 
            ['nom' => 'SEO', 'prix' => '500€'] 
        ]; 
 
        return view('services', compact('services')); 
    } 
    public function blog()
{
    $articles = [
        [
            'titre' => 'Introduction à Laravel',
            'contenu' => 'Laravel est un framework PHP moderne et puissant.'
        ],
        [
            'titre' => 'Pourquoi utiliser Blade',
            'contenu' => 'Blade permet de créer des vues propres et dynamiques.'
        ],
        [
            'titre' => 'Les routes en Laravel',
            'contenu' => 'Les routes permettent de gérer la navigation.'
        ]
    ];

    return view('blog', compact('articles'));
}
} 
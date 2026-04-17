<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function presentation()
    {
        return view('presentation');
    }

    public function expertise()
    {
        return view('expertise');
    }

    public function sectors()
    {
        return view('sectors');
    }

    public function team()
    {
        return view('team');
    }

    public function publications()
    {
        $publications = [
            [
                'title' => "L'Afrique centrale, nouveau hub d'investissement",
                'excerpt' => "Analyse des dynamiques d'investissement en Afrique centrale et des opportunités émergentes dans un contexte de transformation structurelle.",
                'date' => '15 Mars 2025',
                'category' => 'Analyse',
                'slug' => 'afrique-centrale-hub-investissement',
            ],
            [
                'title' => "Financement des infrastructures : enjeux et perspectives",
                'excerpt' => "Le déficit infrastructurel africain représente à la fois un défi majeur et une opportunité d'investissement sans précédent pour les acteurs privés et institutionnels.",
                'date' => '02 Février 2025',
                'category' => 'Perspectives',
                'slug' => 'financement-infrastructures-afrique',
            ],
            [
                'title' => "Agrobusiness : le potentiel inexploité du Bassin du Congo",
                'excerpt' => "Le Bassin du Congo dispose d'atouts agricoles considérables. Comment transformer ce potentiel en projets bancables et attractifs pour les investisseurs ?",
                'date' => '10 Janvier 2025',
                'category' => 'Secteurs',
                'slug' => 'agrobusiness-bassin-congo',
            ],
            [
                'title' => "Intelligence économique : la clé de l'investissement en Afrique",
                'excerpt' => "Dans un environnement en rapide mutation, la maîtrise de l'information stratégique constitue un avantage concurrentiel décisif pour tout investisseur.",
                'date' => '05 Décembre 2024',
                'category' => 'Intelligence économique',
                'slug' => 'intelligence-economique-investissement-afrique',
            ],
            [
                'title' => "Levée de fonds : structurer pour réussir",
                'excerpt' => "Les clés d'une opération de levée de fonds réussie en Afrique : de la structuration financière à la sélection des investisseurs.",
                'date' => '18 Novembre 2024',
                'category' => 'Conseil financier',
                'slug' => 'levee-fonds-structurer-reussir',
            ],
            [
                'title' => "Immobilier de bureau à Brazzaville : état du marché",
                'excerpt' => "Le marché de l'immobilier commercial brazzavillois connaît une transformation profonde. État des lieux et perspectives pour les investisseurs avisés.",
                'date' => '30 Octobre 2024',
                'category' => 'Immobilier',
                'slug' => 'immobilier-bureau-brazzaville',
            ],
        ];

        return view('publications', compact('publications'));
    }

    public function contact()
    {
        return view('contact');
    }
}

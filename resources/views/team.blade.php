@extends('layouts.app')

@section('title', 'Équipe dirigeante — ARIES Investissements')
@section('description', "Loïc Mackosso et Régis Matondo, une direction expérimentée au service de vos projets d'investissement en Afrique.")

@section('content')
@php
    $leaders = [
        [
            'initials' => 'LM',
            'name' => 'Loïc Mackosso',
            'role' => 'Associé-gérant',
            'bio' => "Fondateur d'ARIES Investissements, Loïc Mackosso pilote la stratégie de la société et l'accompagnement des opérations complexes en Afrique centrale avec une lecture fine des enjeux de structuration et de financement.",
        ],
        [
            'initials' => 'RM',
            'name' => 'Régis Matondo',
            'role' => 'Associé',
            'bio' => "Régis Matondo apporte une expertise complémentaire en analyse financière, structuration de projets et relations avec les investisseurs institutionnels actifs sur le continent.",
        ],
    ];

    $principles = [
        [
            'title' => 'Engagement personnel',
            'text' => "Les associés s'impliquent directement dans chaque mission, du premier échange jusqu'aux étapes décisives.",
        ],
        [
            'title' => 'Discrétion absolue',
            'text' => "Les échanges, les données et les arbitrages sont traités avec le niveau de confidentialité attendu sur des sujets sensibles.",
        ],
        [
            'title' => 'Résultats mesurables',
            'text' => "Nous cherchons à produire un effet concret : cadrage clair, dossier renforcé, partenaires mobilisés, décision facilitée.",
        ],
    ];
@endphp

<section class="page-hero" aria-label="Équipe dirigeante ARIES">
    <div class="page-hero__media">
        <img src="{{ asset('images/team-photo.jpg') }}" alt="Les dirigeants d'ARIES Investissements" loading="eager">
        <div class="page-hero__overlay"></div>
    </div>

    <div class="page-hero__inner">
        <div class="page-hero__content">
            <p class="page-hero__kicker reveal">Les femmes et les hommes derrière ARIES</p>
            <h1 class="page-hero__title reveal reveal-delay-1">Équipe dirigeante</h1>
            <p class="page-hero__sub reveal reveal-delay-2">
                Une direction à taille humaine, engagée sur les dossiers et animée par une même exigence :
                rendre les projets plus lisibles, plus solides et mieux exécutés.
            </p>
            <div class="page-hero__pills reveal reveal-delay-3">
                <span>Brazzaville</span>
                <span>Leadership</span>
                <span>Exécution terrain</span>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--soft">
    <div class="h-container">
        <div class="aries-split aries-split--match-height">
            <div class="aries-split__media reveal-left">
                <img src="{{ asset('images/team-photo.jpg') }}" alt="Direction d'ARIES Investissements" loading="lazy">
            </div>

            <div class="aries-split__content reveal-right">
                <p class="h-kicker">Notre direction</p>
                <h2 class="aries-split__title">Une équipe fondée sur la confiance et la complémentarité</h2>
                <div class="aries-split__text">
                    <p>
                        ARIES Investissements s'appuie sur une direction resserrée dont l'expérience, les réseaux et la connaissance des marchés africains
                        constituent le socle de la société.
                    </p>
                    <p>
                        Notre taille est volontairement maîtrisée pour garantir un suivi direct des missions,
                        une implication personnelle des associés et une capacité d'adaptation rapide.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--light">
    <div class="h-container">
        <div class="page-intro reveal">
            <p class="h-kicker">Profils</p>
            <h2 class="page-title">Deux associés, une même exigence d'exécution</h2>
            <p class="page-text">
                Chaque mission bénéficie d'un regard stratégique, d'une discipline d'analyse et d'un ancrage relationnel directement portés par les associés.
            </p>
        </div>

        <div class="page-profile-grid">
            @foreach($leaders as $index => $leader)
                <article class="page-profile-card reveal reveal-delay-{{ $index + 1 }}">
                    <div class="page-profile-card__header">
                        <span class="page-profile-card__avatar">{{ $leader['initials'] }}</span>
                        <div>
                            <h3 class="page-profile-card__name">{{ $leader['name'] }}</h3>
                            <p class="page-profile-card__role">{{ $leader['role'] }}</p>
                        </div>
                    </div>
                    <p class="page-profile-card__bio">{{ $leader['bio'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section page-section--dark">
    <div class="h-container">
        <div class="page-intro reveal">
            <p class="h-kicker h-kicker--light">Notre approche</p>
            <h2 class="page-title page-title--light">Une philosophie fondée sur la confiance</h2>
            <p class="page-text page-text--light">
                Nous n'acceptons que les mandats sur lesquels nous pouvons créer une vraie valeur ajoutée et tenir un niveau d'implication à la hauteur des enjeux.
            </p>
        </div>

        <div class="page-card-grid">
            @foreach($principles as $index => $principle)
                <article class="page-card page-card--dark reveal reveal-delay-{{ $index + 1 }}">
                    <span class="page-card__num">{{ sprintf('%02d', $index + 1) }}</span>
                    <h3 class="page-card__title">{{ $principle['title'] }}</h3>
                    <p class="page-card__text">{{ $principle['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="aries-home-section aries-cta-band-section" aria-label="Appel à l'action équipe">
    <div class="h-container">
        <div class="aries-cta-band reveal">
            <div class="aries-cta-band__media">
                <img src="{{ asset('images/team-meeting.jpg') }}" alt="Équipe en réunion stratégique" loading="lazy">
            </div>

            <div class="aries-cta-band__content">
                <p class="h-kicker">Rencontrons-nous</p>
                <h2 class="aries-cta-band__title">Une relation directe avec les associés</h2>
                <p class="aries-cta-band__text">
                    Si vous souhaitez échanger sur un projet, une levée de fonds ou une opération à structurer,
                    nous sommes disponibles pour une première discussion confidentielle.
                </p>
                <a href="{{ route('contact') }}" class="h-btn h-btn--dark">
                    Prendre rendez-vous
                    <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                        <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

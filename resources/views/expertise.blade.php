@extends('layouts.app')

@section('title', 'Expertise — ARIES Investissements')
@section('description', "Conseil stratégique, levée de fonds, intelligence économique et structuration de projets d'investissement en Afrique.")

@section('content')
@php
    $expertises = [
        [
            'num' => '01',
            'title' => 'Conseil stratégique & financier',
            'text' => "Nous accompagnons les décisions critiques : positionnement, acquisitions, stratégie d'entrée marché et structuration des arbitrages financiers.",
            'items' => [
                "Advisory M&A et cessions",
                "Évaluation d'actifs et d'entreprises",
                "Stratégie d'entrée sur les marchés africains",
                "Due diligence financière et stratégique",
            ],
        ],
        [
            'num' => '02',
            'title' => 'Levée de fonds & financement de projets',
            'text' => "Nous structurons les opérations de dette et de fonds propres en mobilisant un réseau ciblé d'investisseurs institutionnels, fonds et banques de développement.",
            'items' => [
                'Structuration financière de projets',
                "Préparation de mémorandums d'investissement",
                'Mise en relation avec investisseurs qualifiés',
                'Négociation et closing des opérations',
            ],
        ],
        [
            'num' => '03',
            'title' => 'Intelligence économique',
            'text' => "En Afrique, la qualité de l'information conditionne la qualité des décisions. Nous cartographions acteurs, risques et opportunités pour agir avec lucidité.",
            'items' => [
                'Cartographie des acteurs et marchés',
                "Analyse de l'environnement concurrentiel",
                'Veille réglementaire et politique',
                "Évaluation des risques pays et sectoriels",
            ],
        ],
        [
            'num' => '04',
            'title' => 'Structuration & conseil en investissement',
            'text' => "Nous définissons les véhicules, cadres juridiques et logiques financières qui rendent un investissement solide, lisible et durable.",
            'items' => [
                "Montage de véhicules d'investissement",
                "Optimisation fiscale et structurelle",
                "Accompagnement d'investisseurs étrangers",
                'Suivi et reporting post-investissement',
            ],
        ],
    ];

    $method = [
        [
            'title' => 'Cadrer',
            'text' => "Comprendre l'enjeu, clarifier la thèse d'investissement et poser les critères de décision dès le départ.",
        ],
        [
            'title' => 'Structurer',
            'text' => "Organiser les flux, les parties prenantes, les documents et le séquencement pour rendre l'opération exécutable.",
        ],
        [
            'title' => 'Exécuter',
            'text' => "Mobiliser le bon réseau, piloter les échanges et faire avancer le dossier jusqu'aux premières concrétisations.",
        ],
    ];
@endphp

<section class="page-hero" aria-label="Expertise ARIES">
    <div class="page-hero__media">
        <img src="{{ asset('images/hero-bridge.jpg') }}" alt="Connexion entre stratégie et exécution" loading="eager">
        <div class="page-hero__overlay"></div>
    </div>

    <div class="page-hero__inner">
        <div class="page-hero__content">
            <p class="page-hero__kicker reveal">Ce que nous faisons</p>
            <h1 class="page-hero__title reveal reveal-delay-1">Nos expertises</h1>
            <p class="page-hero__sub reveal reveal-delay-2">
                ARIES intervient à toutes les étapes du cycle d'investissement, de la définition de la stratégie
                jusqu'à la structuration et au financement des opérations.
            </p>
            <div class="page-hero__pills reveal reveal-delay-3">
                <span>Conseil stratégique</span>
                <span>Levée de fonds</span>
                <span>Structuration</span>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--soft">
    <div class="h-container">
        <div class="page-intro reveal">
            <p class="h-kicker">Accompagnement 360°</p>
            <h2 class="page-title">Un conseil global, adapté à chaque projet</h2>
            <p class="page-text">
                Nous n'appliquons pas de recette générique. Chaque mission est pensée comme une architecture sur mesure,
                adaptée au stade du projet, à son secteur et aux parties prenantes engagées.
            </p>
        </div>

        <div class="page-card-grid page-card-grid--2">
            @foreach($expertises as $index => $expertise)
                <article class="page-card reveal reveal-delay-{{ ($index % 2) + 1 }}">
                    <span class="page-card__num">{{ $expertise['num'] }}</span>
                    <h3 class="page-card__title">{{ $expertise['title'] }}</h3>
                    <p class="page-card__text">{{ $expertise['text'] }}</p>
                    <ul class="page-card__list">
                        @foreach($expertise['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section page-section--dark">
    <div class="h-container">
        <div class="page-band reveal">
            <div class="page-band__grid">
                <div class="page-copy page-copy--light">
                    <p class="h-kicker h-kicker--light">Notre méthode</p>
                    <h2 class="page-title page-title--light">Une exécution disciplinée, du premier cadrage au closing</h2>
                    <p class="page-text page-text--light">
                        Notre valeur ne tient pas seulement à la qualité des analyses, mais à la capacité de transformer
                        une intention d'investissement en trajectoire d'exécution claire.
                    </p>
                </div>

                <div class="page-band__list">
                    @foreach($method as $step)
                        <div class="page-band__item">
                            <strong>{{ $step['title'] }}</strong>
                            <p>{{ $step['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aries-home-section aries-cta-band-section" aria-label="Appel à l'action expertise">
    <div class="h-container">
        <div class="aries-cta-band reveal">
            <div class="aries-cta-band__media">
                <img src="{{ asset('images/hero-main.jpg') }}" alt="Décisions stratégiques et financières" loading="lazy">
            </div>

            <div class="aries-cta-band__content">
                <p class="h-kicker">Passons au concret</p>
                <h2 class="aries-cta-band__title">Une équipe dédiée à vos ambitions en Afrique</h2>
                <p class="aries-cta-band__text">
                    Si vous avez un projet à structurer, un financement à préparer ou une opération à sécuriser,
                    ARIES peut vous aider à transformer le cadre stratégique en mouvement réel.
                </p>
                <a href="{{ route('contact') }}" class="h-btn h-btn--dark">
                    Prendre contact
                    <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                        <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

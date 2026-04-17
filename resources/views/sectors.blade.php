@extends('layouts.app')

@section('title', 'Secteurs d\'activité — ARIES Investissements')
@section('description', "Infrastructures, immobilier, agrobusiness, technologie : ARIES Investissements accompagne les investissements dans les secteurs clés du développement africain.")

@section('content')
@php
    $sectors = [
        [
            'num' => '01',
            'title' => 'Infrastructures',
            'image' => 'sector-infra.jpg',
            'text' => "Énergie, transport, logistique et télécommunications : des secteurs où les besoins structurels rencontrent de vraies perspectives d'investissement long terme.",
            'items' => [
                'Énergie & électrification',
                'Transport & logistique',
                'Télécommunications & connectivité',
                'Infrastructures portuaires & aéroportuaires',
            ],
        ],
        [
            'num' => '02',
            'title' => 'Immobilier',
            'image' => 'sector-immo.jpg',
            'text' => "L'urbanisation accélérée crée une demande durable sur le résidentiel, le bureau, l'hôtellerie et les actifs commerciaux à fort potentiel.",
            'items' => [
                'Immobilier de bureau & commercial',
                'Développements résidentiels',
                'Hôtellerie & tourisme',
                'Zones industrielles & entrepôts',
            ],
        ],
        [
            'num' => '03',
            'title' => 'Agrobusiness',
            'image' => 'sector-agro.jpg',
            'text' => "L'Afrique centrale porte un potentiel agricole exceptionnel. Notre travail consiste à transformer ce potentiel en projets lisibles, structurés et finançables.",
            'items' => [
                'Production & transformation agricole',
                'Chaînes de valeur alimentaires',
                'Sécurité alimentaire & stockage',
                'Agro-industrie & export',
            ],
        ],
        [
            'num' => '04',
            'title' => 'Technologie',
            'image' => 'sector-tech.jpg',
            'text' => "Fintech, solutions SaaS, e-commerce et innovation digitale : nous accompagnons les projets qui peuvent scaler avec de vrais fondamentaux.",
            'items' => [
                'Fintech & paiements mobiles',
                'E-commerce & marketplace',
                'Solutions SaaS pour entreprises',
                'Healthtech & Edtech',
            ],
        ],
    ];
@endphp

<section class="page-hero" aria-label="Secteurs d'activité ARIES">
    <div class="page-hero__media">
        <img src="{{ asset('images/hero-building.jpg') }}" alt="Bâtiments et infrastructures en développement" loading="eager">
        <div class="page-hero__overlay"></div>
    </div>

    <div class="page-hero__inner">
        <div class="page-hero__content">
            <p class="page-hero__kicker reveal">Domaines d'intervention</p>
            <h1 class="page-hero__title reveal reveal-delay-1">Secteurs d'activité</h1>
            <p class="page-hero__sub reveal reveal-delay-2">
                ARIES concentre son accompagnement sur les secteurs où la création de valeur exige vision stratégique,
                discipline financière et capacité de déploiement.
            </p>
            <div class="page-hero__pills reveal reveal-delay-3">
                <span>Infrastructures</span>
                <span>Immobilier</span>
                <span>Agrobusiness</span>
                <span>Technologie</span>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--soft">
    <div class="h-container">
        <div class="page-intro reveal">
            <p class="h-kicker">Notre focale sectorielle</p>
            <h2 class="page-title">Des secteurs structurants pour le développement africain</h2>
            <p class="page-text">
                Nous privilégions les marchés où l'investissement peut générer un impact durable et une création de valeur robuste,
                à condition d'être structuré avec méthode.
            </p>
        </div>

        <div class="page-card-grid page-card-grid--2">
            @foreach($sectors as $index => $sector)
                <article class="page-card reveal reveal-delay-{{ ($index % 2) + 1 }}">
                    <div class="page-card__media">
                        <img src="{{ asset('images/' . $sector['image']) }}" alt="{{ $sector['title'] }}" loading="lazy">
                    </div>
                    <span class="page-card__num">{{ $sector['num'] }}</span>
                    <h3 class="page-card__title">{{ $sector['title'] }}</h3>
                    <p class="page-card__text">{{ $sector['text'] }}</p>
                    <ul class="page-card__list">
                        @foreach($sector['items'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <a href="{{ route('contact') }}" class="h-btn h-btn--dark" style="margin-top: 1.25rem;">
                        Discuter d'un projet
                        <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                            <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                        </svg>
                    </a>
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
                    <p class="h-kicker h-kicker--light">Notre lecture</p>
                    <h2 class="page-title page-title--light">Sélectionner les secteurs, puis structurer l'exécution</h2>
                    <p class="page-text page-text--light">
                        Notre différence ne tient pas seulement au choix des secteurs, mais à la manière de transformer
                        une opportunité sectorielle en projet crédible pour les partenaires financiers et opérationnels.
                    </p>
                </div>

                <div class="page-band__list">
                    @foreach([
                        ['title' => 'Potentiel', 'text' => "Identifier les marchés où la demande, l'environnement et les acteurs créent un vrai terrain d'exécution."],
                        ['title' => 'Structuration', 'text' => "Définir le véhicule, le phasage, les partenaires et les flux pour rendre le projet finançable."],
                        ['title' => 'Déploiement', 'text' => "Faire avancer le projet avec les bons interlocuteurs, au bon rythme, dans un cadre maîtrisé."],
                    ] as $item)
                        <div class="page-band__item">
                            <strong>{{ $item['title'] }}</strong>
                            <p>{{ $item['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aries-home-section aries-cta-band-section" aria-label="Appel à l'action secteurs">
    <div class="h-container">
        <div class="aries-cta-band reveal">
            <div class="aries-cta-band__media">
                <img src="{{ asset('images/hero-bridge.jpg') }}" alt="Connexion entre opportunités sectorielles et investissement" loading="lazy">
            </div>

            <div class="aries-cta-band__content">
                <p class="h-kicker">Un projet dans l'un de ces secteurs ?</p>
                <h2 class="aries-cta-band__title">ARIES vous aide à passer du potentiel à l'exécution</h2>
                <p class="aries-cta-band__text">
                    Nous pouvons cadrer avec vous les priorités, la structuration et les partenaires à mobiliser
                    pour rendre votre projet robuste et finançable.
                </p>
                <a href="{{ route('contact') }}" class="h-btn h-btn--dark">
                    Parler à un expert
                    <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                        <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

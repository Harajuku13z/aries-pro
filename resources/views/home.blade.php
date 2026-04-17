@extends('layouts.app')

@section('title', 'ARIES Investissements — Conseil financier & investissement en Afrique')
@section('description', 'ARIES Investissements accompagne investisseurs, institutions et porteurs de projets en Afrique avec une approche stratégique, financière et opérationnelle.')

@section('content')

@php
    $growthCards = [
        [
            'title' => 'S’implanter',
            'desc' => 'Aider investisseurs, groupes et partenaires à entrer sur le marché avec une lecture locale fiable.',
            'image' => 'hero-building.jpg',
            'alt' => 'Horizon urbain symbolisant une implantation stratégique en Afrique centrale',
            'href' => route('presentation'),
        ],
        [
            'title' => 'Structurer',
            'desc' => 'Transformer une ambition en montage financier, opérationnel et partenarial crédible.',
            'image' => 'team-photo.jpg',
            'alt' => 'Équipe en discussion autour de la structuration d’un projet',
            'href' => route('expertise'),
        ],
        [
            'title' => 'Accélérer',
            'desc' => 'Aider les projets déjà engagés à lever des fonds, sécuriser leurs parties prenantes et passer à l’échelle.',
            'image' => 'hero-bridge.jpg',
            'alt' => 'Pont illustrant l’accélération et la mise à l’échelle d’un projet',
            'href' => route('sectors'),
        ],
    ];

    $featureBlocks = [
        [
            'eyebrow' => 'Pourquoi ARIES',
            'title' => 'Votre avantage terrain en Afrique centrale',
            'body' => [
                'ARIES Investissements accompagne investisseurs, institutions et dirigeants qui ont besoin d’un partenaire capable de lire le contexte, structurer les options et sécuriser les bonnes décisions.',
                'De l’analyse stratégique à la mise en relation qualifiée, nous intervenons là où l’exécution demande à la fois une discipline financière élevée et une compréhension fine des réalités africaines.',
            ],
            'cta' => 'Voir notre expertise',
            'href' => route('expertise'),
            'image' => 'hero-bridge.jpg',
            'alt' => 'Pont représentant le lien entre stratégie et exécution',
            'layout' => 'right',
        ],
        [
            'eyebrow' => 'Équipe dirigeante',
            'title' => 'Une équipe qui parle finance, terrain et exécution',
            'body' => [
                'Fondée par des professionnels aguerris de la finance et du conseil, ARIES Investissements combine réseau, exigence et proximité avec les décideurs locaux.',
                'Nous aidons nos clients à aller plus vite sans perdre en rigueur, en gardant la bonne lecture des acteurs, des risques et du tempo opérationnel.',
            ],
            'cta' => 'Découvrir l’équipe',
            'href' => route('team'),
            'image' => 'team-photo.jpg',
            'alt' => 'L’équipe dirigeante d’ARIES Investissements',
            'layout' => 'left',
        ],
    ];

    $sectorHighlights = [
        [
            'tag' => 'Infrastructures',
            'title' => 'Projets qui structurent durablement un marché',
            'desc' => 'Transport, énergie, télécoms et logistique : nous accompagnons les dossiers qui ont besoin d’un montage robuste.',
            'meta' => 'Afrique centrale',
            'image' => 'hero-building.jpg',
            'alt' => 'Ville moderne représentant les infrastructures et la croissance',
            'href' => route('sectors'),
        ],
        [
            'tag' => 'Immobilier',
            'title' => 'Actifs stratégiques et exécution disciplinée',
            'desc' => 'Résidentiel, commercial, hôtellerie et actifs urbains dans les marchés à fort potentiel.',
            'meta' => 'Brazzaville · Région',
            'image' => 'hero-bridge.jpg',
            'alt' => 'Pont et structures urbaines représentant des actifs immobiliers stratégiques',
            'href' => route('sectors'),
        ],
        [
            'tag' => 'Agrobusiness',
            'title' => 'Passer du potentiel à des projets bancables',
            'desc' => 'Chaînes de valeur, transformation agricole et structuration d’opérations à impact durable.',
            'meta' => 'Croissance réelle',
            'image' => 'team-photo.jpg',
            'alt' => 'Équipe en discussion symbolisant la structuration de projets à impact',
            'href' => route('sectors'),
        ],
    ];

    $publications = [
        [
            'tag' => 'Analyse',
            'title' => 'L’Afrique centrale, nouveau hub d’investissement',
            'desc' => 'Lecture des dynamiques d’investissement et des opportunités qui structurent la sous-région.',
            'image' => 'hero-building.jpg',
            'alt' => 'Paysage urbain utilisé comme illustration d’analyse',
        ],
        [
            'tag' => 'Perspectives',
            'title' => 'Financement des infrastructures : nouveaux équilibres',
            'desc' => 'Comment mobiliser dette, capital patient et partenaires institutionnels sur les projets structurants.',
            'image' => 'hero-bridge.jpg',
            'alt' => 'Pont représentant le financement des infrastructures',
        ],
        [
            'tag' => 'Secteurs',
            'title' => 'Agrobusiness : transformer le potentiel en projets bancables',
            'desc' => 'Des chaînes de valeur à la structuration financière, les leviers concrets pour passer à l’exécution.',
            'image' => 'team-photo.jpg',
            'alt' => 'Photo d’équipe utilisée pour illustrer les secteurs stratégiques',
        ],
    ];
@endphp

<section class="aries-home-hero" aria-label="Introduction">
    <div class="aries-home-hero__media">
        <img
            src="{{ asset('images/team-photo.jpg') }}"
            alt="Équipe ARIES Investissements illustrant la croissance et l’accompagnement"
            loading="eager"
        >
        <div class="aries-home-hero__overlay"></div>
    </div>

    <div class="aries-home-hero__panel">
        <div class="aries-home-hero__copy">
            <h1 class="aries-home-hero__title reveal reveal-delay-1">
                Accélérer
                <span class="aries-home-hero__title-line">
                    <span class="aries-home-hero__squiggle" aria-hidden="true">
                        <svg viewBox="0 0 273 121" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M271 0V74.415H251.492V19.583H202.906V0H271Z" fill="currentColor"/>
                            <path d="M19.508 46.5845V93.3073L21.986 99.067L26.5761 101.417H68.0829V121H0V46.5845H19.508Z" fill="currentColor"/>
                            <path d="M106.411 75.9475L162.534 14.1611C171.844 3.90916 188.849 10.5292 188.849 24.3981V75.9475L244.973 14.1611L259.388 27.3555L195.654 97.5205L195.653 97.5194C186.343 107.77 169.341 101.151 169.341 87.2824V35.7319L113.216 97.5205L113.215 97.5194C103.905 107.771 86.9026 101.151 86.9026 87.2824V37.426L28.5155 107.492L13.5528 94.9275L79.6723 15.583C88.7568 4.67857 106.411 11.1569 106.411 25.3318V75.9475Z" fill="currentColor"/>
                        </svg>
                    </span>
                    la croissance
                </span>
                en Afrique
            </h1>

            <div class="aries-home-hero__support">
                <div class="aries-home-hero__prose reveal reveal-delay-2">
                    <p>
                        Nous aidons investisseurs, institutions et porteurs de projets à s’implanter, structurer et accélérer leurs opérations en Afrique centrale, plus vite, plus clairement et sans friction inutile.
                    </p>
                </div>

                <div class="reveal reveal-delay-3">
                    <a href="{{ route('expertise') }}" class="aries-hero-cta" aria-label="En savoir plus sur notre expertise">
                        <span class="aries-hero-cta__label">En savoir plus</span>
                        <span class="aries-hero-cta__arrow" aria-hidden="true">
                            <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.77951 3.04422L7.63351 3.04422L0.000488281 10.6772L1.80951 12.4854L9.44253 4.85233L9.44253 10.7063H12.0005V0.485352L1.77951 0.485352L1.77951 3.04422Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aries-home-section" aria-label="Trois façons d’avancer">
    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-16">
        <div class="aries-section-heading aries-section-heading--center">
            <p class="aries-kicker reveal">Prêt à grandir ?</p>
            <h2 class="aries-display reveal reveal-delay-1">
                Nous sommes prêts à structurer la prochaine étape.
            </h2>
        </div>

        <div class="aries-card-grid">
            @foreach($growthCards as $i => $card)
            <a href="{{ $card['href'] }}" class="aries-service-card reveal reveal-delay-{{ $i + 1 }}">
                <div class="aries-service-card__media">
                    <img src="{{ asset('images/' . $card['image']) }}" alt="{{ $card['alt'] }}" loading="lazy">
                </div>

                <div class="aries-service-card__body">
                    <h3>{{ $card['title'] }}</h3>
                    <p>{{ $card['desc'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

@foreach($featureBlocks as $i => $block)
<section class="aries-home-section" aria-label="{{ $block['title'] }}">
    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-16">
        <div class="aries-media {{ $block['layout'] === 'left' ? 'aries-media--left' : '' }}">
            <div class="aries-media__content">
                <p class="aries-kicker reveal">{{ $block['eyebrow'] }}</p>
                <h2 class="aries-display aries-display--narrow reveal reveal-delay-1">{{ $block['title'] }}</h2>

                <div class="aries-prose reveal reveal-delay-2">
                    @foreach($block['body'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                    @endforeach
                </div>

                <div class="reveal reveal-delay-3">
                    <a href="{{ $block['href'] }}" class="aries-btn aries-btn--primary">
                        {{ $block['cta'] }}
                        <span class="aries-btn__icon" aria-hidden="true">
                            <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.77951 3.04422L7.63351 3.04422L0.000488281 10.6772L1.80951 12.4854L9.44253 4.85233L9.44253 10.7063H12.0005V0.485352L1.77951 0.485352L1.77951 3.04422Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <div class="aries-media__visual {{ $block['layout'] === 'left' ? 'reveal-left' : 'reveal-right' }}">
                <div class="aries-media__frame">
                    <img
                        src="{{ asset('images/' . $block['image']) }}"
                        alt="{{ $block['alt'] }}"
                        loading="lazy"
                    >
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach

<section class="aries-home-section" aria-label="Secteurs stratégiques">
    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-16">
        <div class="aries-strip-heading">
            <h2 class="aries-section-inline-title reveal">Secteurs stratégiques</h2>
            <a href="{{ route('sectors') }}" class="aries-mini-link reveal reveal-delay-1">
                Voir tout
                <span aria-hidden="true">↗</span>
            </a>
        </div>

        <div class="aries-compact-grid">
            @foreach($sectorHighlights as $i => $sector)
            <a href="{{ $sector['href'] }}" class="aries-compact-card reveal reveal-delay-{{ $i + 1 }}">
                <div class="aries-compact-card__media">
                    <img src="{{ asset('images/' . $sector['image']) }}" alt="{{ $sector['alt'] }}" loading="lazy">
                </div>
                <div class="aries-compact-card__body">
                    <span class="aries-compact-card__tag">{{ $sector['tag'] }}</span>
                    <h3>{{ $sector['title'] }}</h3>
                    <p>{{ $sector['desc'] }}</p>
                    <span class="aries-compact-card__meta">{{ $sector['meta'] }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<section class="aries-home-section" aria-label="Dernières analyses">
    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-16">
        <div class="aries-strip-heading">
            <h2 class="aries-section-inline-title reveal">Dernières analyses</h2>
            <a href="{{ route('publications') }}" class="aries-mini-link reveal reveal-delay-1">
                Voir tout
                <span aria-hidden="true">↗</span>
            </a>
        </div>

        <div class="aries-compact-grid">
            @foreach($publications as $i => $publication)
            <a href="{{ route('publications') }}" class="aries-compact-card aries-compact-card--light reveal reveal-delay-{{ $i + 1 }}">
                <div class="aries-compact-card__media">
                    <img src="{{ asset('images/' . $publication['image']) }}" alt="{{ $publication['alt'] }}" loading="lazy">
                </div>
                <div class="aries-compact-card__body">
                    <span class="aries-compact-card__tag">{{ $publication['tag'] }}</span>
                    <h3>{{ $publication['title'] }}</h3>
                    <p>{{ $publication['desc'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<section class="aries-home-cta" aria-label="Contact">
    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-16">
        <div class="aries-home-cta__grid reveal">
            <div class="aries-home-cta__image">
                <img
                    src="{{ asset('images/team-photo.jpg') }}"
                    alt="Équipe ARIES Investissements"
                    loading="lazy"
                >
            </div>

            <div class="aries-home-cta__panel">
                <p class="aries-kicker aries-kicker--light">Parlons de votre projet</p>
                <h2 class="aries-display aries-display--light">
                    Prêt à grandir ? Nous sommes prêts à y aller.
                </h2>
                <p>
                    Investisseur, entrepreneur ou institution : ARIES vous aide à cadrer les bonnes options et à transformer une ambition en trajectoire crédible.
                </p>

                <a href="{{ route('contact') }}" class="aries-btn aries-btn--dark">
                    Prendre contact
                    <span class="aries-btn__icon" aria-hidden="true">
                        <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.77951 3.04422L7.63351 3.04422L0.000488281 10.6772L1.80951 12.4854L9.44253 4.85233L9.44253 10.7063H12.0005V0.485352L1.77951 0.485352L1.77951 3.04422Z" fill="currentColor"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

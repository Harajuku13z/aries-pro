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
            'title' => 'Votre avantage terrain pour investir avec plus de clarté',
            'body' => [
                'ARIES Investissements accompagne investisseurs, institutions et dirigeants qui ont besoin d’un partenaire capable de lire le contexte, structurer les options et sécuriser les bonnes décisions.',
                'De l’analyse stratégique à la mise en relation qualifiée, nous intervenons là où l’exécution demande à la fois une discipline financière élevée et une compréhension fine des réalités africaines.',
            ],
            'cta' => 'Découvrir notre expertise',
            'href' => route('expertise'),
            'image' => 'hero-bridge.jpg',
            'alt' => 'Pont représentant le lien entre stratégie et exécution',
            'layout' => 'right',
        ],
        [
            'eyebrow' => 'Équipe dirigeante',
            'title' => 'Une équipe qui parle à la fois finance, terrain et exécution',
            'body' => [
                'Fondée par des professionnels aguerris de la finance et du conseil, ARIES Investissements combine réseau, exigence et proximité avec les décideurs locaux.',
                'Nous aidons nos clients à aller plus vite sans perdre en rigueur, en gardant la bonne lecture des acteurs, des risques et du tempo opérationnel.',
            ],
            'cta' => 'Rencontrer l’équipe',
            'href' => route('team'),
            'image' => 'team-photo.jpg',
            'alt' => 'L’équipe dirigeante d’ARIES Investissements',
            'layout' => 'left',
        ],
    ];

    $publications = [
        [
            'date' => '15 mars 2025',
            'cat' => 'Analyse',
            'title' => 'L’Afrique centrale, nouveau hub d’investissement',
            'desc' => 'Lecture des dynamiques d’investissement et des opportunités qui structurent la sous-région.',
        ],
        [
            'date' => '02 février 2025',
            'cat' => 'Perspectives',
            'title' => 'Financement des infrastructures : nouveaux équilibres',
            'desc' => 'Comment mobiliser dette, capital patient et partenaires institutionnels sur les projets structurants.',
        ],
        [
            'date' => '10 janvier 2025',
            'cat' => 'Secteurs',
            'title' => 'Agrobusiness : transformer le potentiel en projets bancables',
            'desc' => 'Des chaînes de valeur à la structuration financière, les leviers concrets pour passer à l’exécution.',
        ],
    ];
@endphp

<section class="aries-home-hero" aria-label="Introduction">
    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-16 aries-home-hero__inner">
        <div class="aries-home-hero__copy">
            <p class="aries-kicker reveal">ARIES Investissements · Brazzaville et Washington</p>

            <h1 class="aries-home-hero__title reveal reveal-delay-1">
                Accélérer<br>
                <span class="aries-home-hero__accent">
                    <span class="aries-home-hero__squiggle" aria-hidden="true">
                        <svg viewBox="0 0 273 121" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M271 0V74.415H251.492V19.583H202.906V0H271Z" fill="currentColor"/>
                            <path d="M19.508 46.5845V93.3073L21.986 99.067L26.5761 101.417H68.0829V121H0V46.5845H19.508Z" fill="currentColor"/>
                            <path d="M106.411 75.9475L162.534 14.1611C171.844 3.90916 188.849 10.5292 188.849 24.3981V75.9475L244.973 14.1611L259.388 27.3555L195.654 97.5205L195.653 97.5194C186.343 107.77 169.341 101.151 169.341 87.2824V35.7319L113.216 97.5205L113.215 97.5194C103.905 107.771 86.9026 101.151 86.9026 87.2824V37.426L28.5155 107.492L13.5528 94.9275L79.6723 15.583C88.7568 4.67857 106.411 11.1569 106.411 25.3318V75.9475Z" fill="currentColor"/>
                        </svg>
                    </span>
                    la croissance
                </span><br>
                en Afrique
            </h1>

            <div class="aries-home-hero__support">
                <div class="aries-home-hero__prose reveal reveal-delay-2">
                    <p>
                        Nous aidons investisseurs, institutions et porteurs de projets à s’implanter, financer et accélérer leurs opérations en Afrique centrale, plus vite, plus clairement et sans friction inutile.
                    </p>
                </div>

                <div class="reveal reveal-delay-3">
                    <a href="{{ route('expertise') }}" class="aries-btn aries-btn--primary">
                        Comment nous aidons
                        <span class="aries-btn__icon" aria-hidden="true">
                            <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.77951 3.04422L7.63351 3.04422L0.000488281 10.6772L1.80951 12.4854L9.44253 4.85233L9.44253 10.7063H12.0005V0.485352L1.77951 0.485352L1.77951 3.04422Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="aries-home-hero__media reveal reveal-delay-4">
            <img
                src="{{ asset('images/hero-building.jpg') }}"
                alt="Panorama urbain illustrant la croissance et l’investissement"
                loading="eager"
            >
        </div>

        <svg class="aries-home-hero__outline" viewBox="0 0 234 573" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M185.009 25.4238C207.361 -4.27587 250.528 -8.02953 277.658 17.3828L456.442 184.934L457.049 185.502L457.267 184.699L462.765 164.396V164.396C468.72 142.351 488.919 127.225 511.737 127.695L628.9 130.114C667.491 130.915 698.426 162.286 698.651 200.884L699.498 335.312C699.642 359.66 690.185 383.083 673.161 400.5L535.473 541.275C496.242 581.378 432.284 583.065 390.996 545.103L293.904 455.828L293.474 455.432L293.149 455.92L282.648 471.735C266.792 495.586 233.395 499.547 212.408 480.165L212.415 480.159L212.062 479.806L19.6992 286.866L19.6934 286.861L19.6885 286.856L19.1611 286.353C-3.00649 264.927 -5.79376 230.287 12.7812 205.587L184.971 25.4688L184.991 25.4473L185.009 25.4238Z" stroke="currentColor" stroke-width="1.5"/>
        </svg>
    </div>
</section>

<section class="aries-home-section aries-home-section--soft" aria-label="Trois façons d’avancer">
    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-16">
        <div class="aries-section-heading">
            <div>
                <p class="aries-kicker reveal">Prêt à grandir ?</p>
                <h2 class="aries-display reveal reveal-delay-1">
                    Nous sommes prêts à structurer la prochaine étape.
                </h2>
            </div>

            <div class="reveal reveal-delay-2">
                <a href="{{ route('contact') }}" class="aries-btn aries-btn--secondary">
                    Nous contacter
                    <span class="aries-btn__icon" aria-hidden="true">
                        <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.77951 3.04422L7.63351 3.04422L0.000488281 10.6772L1.80951 12.4854L9.44253 4.85233L9.44253 10.7063H12.0005V0.485352L1.77951 0.485352L1.77951 3.04422Z" fill="currentColor"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>

        <div class="aries-card-grid">
            @foreach($growthCards as $i => $card)
            <a href="{{ $card['href'] }}" class="aries-service-card reveal reveal-delay-{{ $i + 1 }}">
                <div class="aries-service-card__media">
                    <img src="{{ asset('images/' . $card['image']) }}" alt="{{ $card['alt'] }}" loading="lazy">
                </div>

                <div class="aries-service-card__body">
                    <div class="aries-service-card__top">
                        <span class="aries-service-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 139 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M138.5 0H11.1456V27.7137H85.0107L15.5127 71.1865C15.002 71.4992 14.5226 71.8535 14.064 72.2287C1.39007 82.6514 -3.22717 99.3797 2.30724 114.826C7.84165 130.283 22.0268 140.257 38.4425 140.257H110.796V112.543H138.51V0H138.5ZM28.3846 105.477C27.8114 103.882 26.3731 98.4729 31.0945 94.1162L110.786 44.2753V112.554H38.432C31.4593 112.554 28.9787 107.145 28.3846 105.477Z" fill="currentColor"/>
                            </svg>
                        </span>

                        <span class="aries-service-card__arrow" aria-hidden="true">
                            <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.77951 3.04422L7.63351 3.04422L0.000488281 10.6772L1.80951 12.4854L9.44253 4.85233L9.44253 10.7063H12.0005V0.485352L1.77951 0.485352L1.77951 3.04422Z" fill="currentColor"/>
                            </svg>
                        </span>
                    </div>

                    <div class="aries-service-card__content">
                        <h3>{{ $card['title'] }}</h3>
                        <p>{{ $card['desc'] }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

@foreach($featureBlocks as $i => $block)
<section class="aries-home-section {{ $block['layout'] === 'left' ? 'aries-home-section--alt' : '' }}" aria-label="{{ $block['title'] }}">
    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-16">
        <div class="aries-media {{ $block['layout'] === 'left' ? 'aries-media--left' : '' }}">
            <div class="aries-media__visual {{ $block['layout'] === 'left' ? 'reveal-left' : 'reveal-right' }}">
                <div class="aries-media__frame">
                    <img
                        src="{{ asset('images/' . $block['image']) }}"
                        alt="{{ $block['alt'] }}"
                        loading="lazy"
                    >
                </div>
            </div>

            <div class="aries-media__content">
                <p class="aries-kicker reveal {{ $i === 0 ? 'reveal-delay-1' : '' }}">{{ $block['eyebrow'] }}</p>
                <h2 class="aries-display reveal reveal-delay-1">{{ $block['title'] }}</h2>

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
        </div>
    </div>
</section>
@endforeach

<section class="aries-home-section aries-home-section--news" aria-label="Publications récentes">
    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-16">
        <div class="aries-section-heading">
            <div>
                <p class="aries-kicker reveal">Analyses & perspectives</p>
                <h2 class="aries-display reveal reveal-delay-1">
                    Des lectures utiles pour décider avec davantage de contexte.
                </h2>
            </div>

            <div class="reveal reveal-delay-2">
                <a href="{{ route('publications') }}" class="aries-btn aries-btn--secondary">
                    Toutes les publications
                    <span class="aries-btn__icon" aria-hidden="true">
                        <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.77951 3.04422L7.63351 3.04422L0.000488281 10.6772L1.80951 12.4854L9.44253 4.85233L9.44253 10.7063H12.0005V0.485352L1.77951 0.485352L1.77951 3.04422Z" fill="currentColor"/>
                        </svg>
                    </span>
                </a>
            </div>
        </div>

        <div class="aries-insight-grid">
            @foreach($publications as $i => $publication)
            <article class="aries-insight-card reveal reveal-delay-{{ $i + 1 }}">
                <p class="aries-insight-card__meta">
                    <span class="aries-insight-card__tag">{{ $publication['cat'] }}</span>
                    <span>{{ $publication['date'] }}</span>
                </p>

                <h3>{{ $publication['title'] }}</h3>
                <p>{{ $publication['desc'] }}</p>

                <a href="{{ route('publications') }}" class="aries-text-link">
                    Lire l’analyse
                    <span aria-hidden="true">
                        <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.77951 3.04422L7.63351 3.04422L0.000488281 10.6772L1.80951 12.4854L9.44253 4.85233L9.44253 10.7063H12.0005V0.485352L1.77951 0.485352L1.77951 3.04422Z" fill="currentColor"/>
                        </svg>
                    </span>
                </a>
            </article>
            @endforeach
        </div>
    </div>
</section>

<section class="aries-home-cta" aria-label="Contact">
    <div class="max-w-[1440px] mx-auto px-5 lg:px-10 xl:px-16">
        <div class="aries-home-cta__panel reveal">
            <div class="aries-home-cta__copy">
                <p class="aries-kicker aries-kicker--light">Parlons de votre projet</p>
                <h2 class="aries-display aries-display--light">
                    Votre prochaine étape mérite une exécution claire.
                </h2>
                <p>
                    Que vous soyez investisseur, entrepreneur ou institution, nous vous aidons à cadrer les bonnes options et à transformer une ambition en trajectoire crédible.
                </p>
            </div>

            <div class="aries-home-cta__actions">
                <a href="{{ route('contact') }}" class="aries-btn aries-btn--primary">
                    Prendre contact
                    <span class="aries-btn__icon" aria-hidden="true">
                        <svg viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.77951 3.04422L7.63351 3.04422L0.000488281 10.6772L1.80951 12.4854L9.44253 4.85233L9.44253 10.7063H12.0005V0.485352L1.77951 0.485352L1.77951 3.04422Z" fill="currentColor"/>
                        </svg>
                    </span>
                </a>

                <div class="aries-location-row">
                    <span class="aries-location-pill">Brazzaville</span>
                    <span class="aries-location-pill">Washington</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

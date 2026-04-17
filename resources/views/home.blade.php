@extends('layouts.app')

@section('title', 'ARIES Investissements — Accélérer la croissance en Afrique')
@section('description', "ARIES Investissements accompagne investisseurs, institutions et dirigeants dans la structuration, le financement et l'exécution de projets ambitieux en Afrique.")

@section('content')
@php
    $services = [
        [
            'label' => '01',
            'title' => 'Conseiller',
            'description' => 'Diagnostic stratégique, lecture marché et cadrage des décisions qui conditionnent la réussite du projet.',
            'image' => 'about-africa.jpg',
            'href' => route('presentation'),
        ],
        [
            'label' => '02',
            'title' => 'Structurer',
            'description' => "Montage financier, gouvernance, documentation investisseur et préparation de dossiers solides et crédibles.",
            'image' => 'hero-building.jpg',
            'href' => route('expertise'),
        ],
        [
            'label' => '03',
            'title' => 'Accélérer',
            'description' => "Mise en relation, exécution terrain et accompagnement des porteurs de projets jusqu'aux premières concrétisations.",
            'image' => 'team-meeting.jpg',
            'href' => route('contact'),
        ],
    ];

    $insights = [
        [
            'tag' => 'Analyse',
            'date' => 'Mars 2026',
            'title' => "Afrique centrale : transformer le potentiel en projets bancables",
            'excerpt' => "Les leviers concrets pour passer d'une ambition sectorielle à une exécution lisible pour les investisseurs.",
            'image' => 'sector-infra.jpg',
        ],
        [
            'tag' => 'Perspective',
            'date' => 'Février 2026',
            'title' => 'Structurer une levée de fonds avec une thèse claire',
            'excerpt' => "Pourquoi le cadrage, la gouvernance et le bon récit d'investissement font la différence dès les premiers échanges.",
            'image' => 'hero-bridge.jpg',
        ],
        [
            'tag' => 'Exécution',
            'date' => 'Janvier 2026',
            'title' => "Agrobusiness, immobilier, infrastructures : où créer de la valeur durable",
            'excerpt' => "Une lecture sectorielle des domaines où ARIES concentre son accompagnement stratégique et financier.",
            'image' => 'sector-agro.jpg',
        ],
    ];

    $sectorFocus = [
        'Infrastructures',
        'Immobilier',
        'Agrobusiness',
        'Technologie',
    ];
@endphp

<section class="h-hero aries-landing-hero" id="accueil" aria-label="Accueil ARIES">
    <div class="h-hero__media">
        <img
            src="{{ asset('images/lion-ambition.jpg') }}"
            alt="Lion symbolisant la vision et l'ambition d'ARIES Investissements"
            loading="eager"
        >
        <div class="h-hero__overlay"></div>
    </div>

    <div class="aries-landing-hero__shell">
        <div class="aries-landing-hero__inner">
            <div class="aries-landing-hero__content">
                <p class="h-kicker reveal">ARIES Investissements</p>

                <h1 class="h-hero__title aries-landing-hero__title reveal" data-delay="80" data-split="false">
                    <span class="aries-landing-hero__title-line">Accélérer</span>
                    <span class="aries-landing-hero__title-line aries-landing-hero__title-line--nowrap">la croissance</span>
                    <span class="aries-landing-hero__title-line">en Afrique</span>
                </h1>

                <div class="aries-landing-hero__footer">
                    <div class="aries-landing-hero__support reveal" data-delay="160">
                        <p class="aries-landing-hero__description">
                            Nous accompagnons investisseurs, institutions et dirigeants dans la structuration,
                            le financement et l'exécution de projets ambitieux en Afrique centrale.
                        </p>
                        <div class="aries-landing-hero__support-items">
                            <span>Brazzaville</span>
                            <span>Structuration</span>
                            <span>Levée de fonds</span>
                        </div>
                    </div>

                    <a href="{{ route('presentation') }}" class="aries-hero-cta reveal" data-delay="240">
                        <span class="aries-hero-cta__label">En savoir plus</span>
                        <span class="aries-hero-cta__icon" aria-hidden="true">
                            <svg viewBox="0 0 12 13" fill="none">
                                <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aries-home-section aries-services" aria-label="Comment nous aidons">
    <div class="h-container">
        <div class="aries-section-intro reveal">
            <p class="h-kicker">Comment nous aidons</p>
            <h2 class="aries-section-title">Prêt à structurer votre croissance&nbsp;?</h2>
            <p class="aries-section-text">
                ARIES intervient là où les décisions stratégiques, financières et opérationnelles
                doivent être prises avec méthode, discipline et lecture terrain.
            </p>
        </div>

        <div class="aries-service-grid">
            @foreach($services as $index => $service)
                <a href="{{ $service['href'] }}" class="aries-service-card reveal" data-delay="{{ ($index + 1) * 90 }}">
                    <div class="aries-service-card__media">
                        <img src="{{ asset('images/' . $service['image']) }}" alt="{{ $service['title'] }}" loading="lazy">
                        <div class="aries-service-card__overlay"></div>
                    </div>

                    <div class="aries-service-card__body">
                        <span class="aries-service-card__eyebrow">{{ $service['label'] }}</span>
                        <h3 class="aries-service-card__title">{{ $service['title'] }}</h3>
                        <p class="aries-service-card__description">{{ $service['description'] }}</p>
                        <span class="aries-service-card__link">
                            Découvrir
                            <svg viewBox="0 0 12 13" fill="none">
                                <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                            </svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="aries-home-section aries-split-section" aria-label="Votre avantage terrain">
    <div class="h-container">
        <div class="aries-split aries-split--match-height">
            <div class="aries-split__media reveal-left">
                <img src="{{ asset('images/about-africa.jpg') }}" alt="Vue urbaine illustrant le marché africain accompagné par ARIES" loading="lazy">
            </div>

            <div class="aries-split__content reveal-right">
                <p class="h-kicker">Votre avantage terrain</p>
                <h2 class="aries-split__title">Une lecture locale, une exécution au standard international</h2>
                <div class="aries-split__text">
                    <p>
                        À Brazzaville et au-delà, ARIES combine réseau local, discipline financière
                        et compréhension des réalités opérationnelles pour sécuriser les décisions clés.
                    </p>
                    <p>
                        Notre rôle consiste à rendre les projets lisibles, finançables et pilotables,
                        avec un accompagnement sur mesure à chaque étape du parcours investisseur.
                    </p>
                </div>
                <a href="{{ route('presentation') }}" class="h-btn h-btn--primary">
                    Découvrir ARIES
                    <svg viewBox="0 0 12 13" fill="none">
                        <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="aries-home-section aries-split-section aries-split-section--alt" aria-label="Nos secteurs prioritaires">
    <div class="h-container">
        <div class="aries-split aries-split--reverse">
            <div class="aries-split__media reveal-right">
                <img src="{{ asset('images/hero-bridge.jpg') }}" alt="Infrastructure symbolisant la connexion entre stratégie et exécution" loading="lazy">
            </div>

            <div class="aries-split__content reveal-left">
                <p class="h-kicker">Nos secteurs</p>
                <h2 class="aries-split__title">Là où les opportunités prennent de la valeur</h2>
                <div class="aries-split__text">
                    <p>
                        Nous concentrons notre accompagnement sur les secteurs où la création de valeur
                        exige à la fois vision stratégique, maîtrise financière et capacité de déploiement.
                    </p>
                    <p>
                        C'est dans cette articulation entre ambition et exécution qu'ARIES fait la différence.
                    </p>
                </div>

                <ul class="aries-check-list" aria-label="Secteurs d'intervention">
                    @foreach($sectorFocus as $focus)
                        <li>{{ $focus }}</li>
                    @endforeach
                </ul>

                <a href="{{ route('sectors') }}" class="h-btn h-btn--dark">
                    Explorer nos secteurs
                    <svg viewBox="0 0 12 13" fill="none">
                        <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="aries-home-section aries-insights" aria-label="Dernières publications">
    <div class="h-container">
        <div class="aries-insights__head reveal">
            <div class="aries-section-intro aries-section-intro--dark">
                <p class="h-kicker">Publications</p>
                <h2 class="aries-section-title aries-section-title--light">Dernières analyses</h2>
                <p class="aries-section-text aries-section-text--light">
                    Une lecture claire des dynamiques d'investissement, des secteurs à potentiel
                    et des conditions concrètes d'exécution en Afrique.
                </p>
            </div>

            <a href="{{ route('publications') }}" class="h-btn h-btn--ghost">
                Voir toutes les publications
            </a>
        </div>

        <div class="aries-insights__grid">
            @foreach($insights as $index => $insight)
                <a href="{{ route('publications') }}" class="aries-insight-card reveal" data-delay="{{ ($index + 1) * 90 }}">
                    <div class="aries-insight-card__media">
                        <img src="{{ asset('images/' . $insight['image']) }}" alt="{{ $insight['title'] }}" loading="lazy">
                    </div>
                    <div class="aries-insight-card__body">
                        <div class="aries-insight-card__meta">
                            <span>{{ $insight['tag'] }}</span>
                            <span>{{ $insight['date'] }}</span>
                        </div>
                        <h3 class="aries-insight-card__title">{{ $insight['title'] }}</h3>
                        <p class="aries-insight-card__excerpt">{{ $insight['excerpt'] }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<section class="aries-home-section aries-cta-band-section" aria-label="Parlons de votre projet">
    <div class="h-container">
        <div class="aries-cta-band reveal">
            <div class="aries-cta-band__media">
                <img src="{{ asset('images/hero-main.jpg') }}" alt="Projet immobilier illustrant la montée en puissance des investissements ARIES" loading="lazy">
            </div>

            <div class="aries-cta-band__content">
                <p class="h-kicker">Passez à l'étape suivante</p>
                <h2 class="aries-cta-band__title">Donnez une nouvelle dimension à vos investissements</h2>
                <p class="aries-cta-band__text">
                    Qu'il s'agisse d'un projet à structurer, d'une levée de fonds à préparer
                    ou d'une stratégie d'entrée marché à consolider, ARIES vous accompagne de la vision à l'exécution.
                </p>
                <a href="{{ route('contact') }}" class="h-btn h-btn--dark">
                    Nous contacter
                    <svg viewBox="0 0 12 13" fill="none">
                        <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

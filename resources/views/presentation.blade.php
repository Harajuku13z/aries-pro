@extends('layouts.app')

@section('title', 'Présentation — ARIES Investissements')
@section('description', "ARIES Investissements, société de conseil financier et banque d'affaires basée à Brazzaville. Notre histoire, notre mission et notre vision de l'investissement en Afrique.")

@section('content')
@php
    $capabilities = [
        [
            'title' => 'Conseil stratégique',
            'text' => "Définition de vision, analyse de marché, positionnement et accompagnement des décisions structurantes.",
        ],
        [
            'title' => 'Levée de fonds',
            'text' => "Structuration et exécution de levées de dette ou de fonds propres auprès d'investisseurs qualifiés.",
        ],
        [
            'title' => 'Intelligence économique',
            'text' => "Lecture fine des marchés, des acteurs et des dynamiques locales pour décider avec confiance.",
        ],
    ];

    $values = [
        [
            'eyebrow' => 'Indépendance',
            'text' => "Nous ne défendons que les intérêts de nos clients et formulons des recommandations libres de tout conflit d'intérêt.",
        ],
        [
            'eyebrow' => 'Professionnalisme',
            'text' => "Chaque mission est conduite au standard des meilleures pratiques internationales, avec une vraie adaptation au terrain africain.",
        ],
        [
            'eyebrow' => 'Rigueur',
            'text' => "Nos analyses reposent sur des données solides, une lecture contextuelle précise et une exigence d'exécution constante.",
        ],
    ];
@endphp

<section class="page-hero" aria-label="Présentation ARIES">
    <div class="page-hero__media">
        <img src="{{ asset('images/team-photo.jpg') }}" alt="L'équipe dirigeante d'ARIES Investissements" loading="eager">
        <div class="page-hero__overlay"></div>
    </div>

    <div class="page-hero__inner">
        <div class="page-hero__content">
            <p class="page-hero__kicker reveal">Qui sommes-nous</p>
            <h1 class="page-hero__title reveal reveal-delay-1">Présentation</h1>
            <p class="page-hero__sub reveal reveal-delay-2">
                ARIES Investissements est une maison de conseil financier à vocation de banque d'affaires,
                ancrée à Brazzaville et tournée vers l'accompagnement des investisseurs, institutions et porteurs de projets en Afrique.
            </p>
            <div class="page-hero__pills reveal reveal-delay-3">
                <span>Brazzaville</span>
                <span>Washington</span>
                <span>Conseil financier</span>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--soft">
    <div class="h-container">
        <div class="aries-split aries-split--match-height">
            <div class="aries-split__media reveal-left">
                <img src="{{ asset('images/about-africa.jpg') }}" alt="Vue urbaine illustrant l'ancrage africain d'ARIES" loading="lazy">
            </div>

            <div class="aries-split__content reveal-right">
                <p class="h-kicker">Notre société</p>
                <h2 class="aries-split__title">Une banque d'affaires au cœur de l'Afrique</h2>
                <div class="aries-split__text">
                    <p>
                        ARIES Investissements accompagne investisseurs et porteurs de projets dans leurs ambitions africaines
                        avec une expertise couvrant l'ensemble du spectre du conseil financier.
                    </p>
                    <p>
                        Notre positionnement repose sur la maîtrise de l'environnement africain, la connaissance des acteurs
                        institutionnels, privés et de développement, ainsi que la capacité à structurer des solutions adaptées aux réalités locales.
                    </p>
                    <p>
                        De Brazzaville à Washington, nous créons des ponts entre capitaux, projets et opportunités,
                        avec une approche disciplinée, confidentielle et orientée résultats.
                    </p>
                </div>
                <a href="{{ route('contact') }}" class="h-btn h-btn--primary">
                    Échanger avec ARIES
                    <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                        <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--dark">
    <div class="h-container">
        <div class="page-intro reveal">
            <p class="h-kicker h-kicker--light">Notre mission</p>
            <h2 class="page-title page-title--light">Faire émerger de nouveaux champions africains</h2>
            <p class="page-text page-text--light">
                Nous croyons dans le potentiel africain et dans la capacité du secteur privé à accélérer la transformation économique du continent.
                Notre rôle est de rendre ce potentiel lisible, finançable et exécutable.
            </p>
        </div>

        <div class="page-card-grid">
            @foreach($capabilities as $index => $capability)
                <article class="page-card page-card--dark reveal reveal-delay-{{ $index + 1 }}">
                    <span class="page-card__num">{{ sprintf('%02d', $index + 1) }}</span>
                    <h3 class="page-card__title">{{ $capability['title'] }}</h3>
                    <p class="page-card__text">{{ $capability['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section page-section--warm">
    <div class="h-container">
        <div class="page-intro reveal">
            <p class="h-kicker">Nos valeurs</p>
            <h2 class="page-title">Les piliers de notre engagement</h2>
            <p class="page-text">
                Notre méthode s'appuie sur trois principes simples : lucidité stratégique, exigence d'exécution et fidélité absolue à l'intérêt du client.
            </p>
        </div>

        <div class="page-card-grid">
            @foreach($values as $index => $value)
                <article class="page-card reveal reveal-delay-{{ $index + 1 }}">
                    <span class="page-card__eyebrow">{{ $value['eyebrow'] }}</span>
                    <p class="page-card__text">{{ $value['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="aries-home-section aries-cta-band-section" aria-label="Appel à l'action présentation">
    <div class="h-container">
        <div class="aries-cta-band reveal">
            <div class="aries-cta-band__media">
                <img src="{{ asset('images/hero-building.jpg') }}" alt="Environnement d'affaires en Afrique" loading="lazy">
            </div>

            <div class="aries-cta-band__content">
                <p class="h-kicker">Construisons la suite</p>
                <h2 class="aries-cta-band__title">Une vision locale, une exécution exigeante</h2>
                <p class="aries-cta-band__text">
                    Si vous cherchez un partenaire capable d'aligner stratégie, réseau et discipline financière,
                    ARIES est prêt à cadrer avec vous la prochaine étape.
                </p>
                <a href="{{ route('contact') }}" class="h-btn h-btn--dark">
                    Nous contacter
                    <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                        <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

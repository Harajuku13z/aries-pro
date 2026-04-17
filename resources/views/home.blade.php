@extends('layouts.app')

@section('title', 'ARIES Investissements — Conseil financier & investissement en Afrique')
@section('description', 'ARIES Investissements accompagne investisseurs, institutions et porteurs de projets en Afrique avec une approche stratégique, financière et opérationnelle.')

@section('content')

@php
    $heroStats = [
        ['value' => '4', 'label' => 'Expertises clés'],
        ['value' => '2', 'label' => 'Hubs stratégiques'],
        ['value' => '360°', 'label' => 'Accompagnement'],
        ['value' => 'Afrique', 'label' => 'Terrain d’action'],
    ];

    $positioningCards = [
        ['value' => 'Conseil', 'title' => 'Décisions stratégiques', 'desc' => 'Analyse, structuration et exécution sur les opérations à fort enjeu.'],
        ['value' => 'Capital', 'title' => 'Levée de fonds', 'desc' => 'Dette, equity, financement de projets et mise en relation qualifiée.'],
        ['value' => 'Marchés', 'title' => 'Intelligence économique', 'desc' => 'Lecture fine des acteurs, risques et opportunités en Afrique.'],
        ['value' => 'Impact', 'title' => 'Structuration durable', 'desc' => 'Des solutions pensées pour la performance et l’ancrage local.'],
    ];

    $sectors = [
        ['icon' => '01', 'title' => 'Infrastructures', 'desc' => 'Transport, énergie, télécoms et logistique : les bases du développement et de la croissance.'],
        ['icon' => '02', 'title' => 'Immobilier', 'desc' => 'Résidentiel, commercial, hôtellerie et actifs stratégiques dans les marchés en expansion.'],
        ['icon' => '03', 'title' => 'Agrobusiness', 'desc' => 'Transformation agricole, chaînes de valeur et sécurité alimentaire sur des marchés à fort potentiel.'],
        ['icon' => '04', 'title' => 'Technologie', 'desc' => 'Fintech, services digitaux et solutions innovantes qui accélèrent l’économie africaine.'],
    ];

    $expertises = [
        [
            'num' => '01',
            'title' => 'Conseil stratégique & financier',
            'desc' => 'Structuration d’opérations, évaluation d’actifs, advisory M&A et accompagnement dans les choix décisifs.',
        ],
        [
            'num' => '02',
            'title' => 'Levée de fonds & financement',
            'desc' => 'Montage de dossiers bancables, approche investisseurs et accompagnement jusqu’au closing.',
        ],
        [
            'num' => '03',
            'title' => 'Intelligence économique',
            'desc' => 'Cartographie des acteurs, analyse sectorielle et veille stratégique pour investir avec clarté.',
        ],
        [
            'num' => '04',
            'title' => 'Structuration & investissement',
            'desc' => 'Montages juridiques et financiers adaptés aux marchés africains et à leurs réalités opérationnelles.',
        ],
    ];

    $publications = [
        ['date' => '15 mars 2025', 'cat' => 'Analyse', 'title' => "L’Afrique centrale, nouveau hub d’investissement", 'desc' => "Lecture des dynamiques d’investissement et des opportunités qui structurent la sous-région."],
        ['date' => '02 février 2025', 'cat' => 'Perspectives', 'title' => 'Financement des infrastructures : nouveaux équilibres', 'desc' => "Comment mobiliser dette, capital patient et partenaires institutionnels sur les projets structurants."],
        ['date' => '10 janvier 2025', 'cat' => 'Secteurs', 'title' => 'Agrobusiness : transformer le potentiel en projets bancables', 'desc' => "Des chaînes de valeur à la structuration financière, les leviers concrets pour passer à l’exécution."],
    ];
@endphp

<section class="hero-section" aria-label="Introduction">
    <div class="hero-media">
        <img
            src="{{ asset('images/hero-building.jpg') }}"
            alt="Horizon urbain symbolisant la vision stratégique d’ARIES Investissements"
            loading="eager"
        >
    </div>
    <div class="hero-overlay"></div>
    <div class="hero-grid-pattern"></div>
    <div class="hero-glow"></div>

    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 xl:px-16 w-full relative z-10 pt-32 pb-16 lg:pb-20">
        <div class="hero-layout min-h-[calc(100vh-10rem)]">
            <div class="hero-copy">
                <div class="hero-eyebrow reveal">
                    <span>Conseil stratégique & financement</span>
                    <span class="hero-eyebrow__dot"></span>
                    <span>Afrique centrale et au-delà</span>
                </div>

                <h1 class="hero-title reveal reveal-delay-1">
                    Accélérer les projets qui façonnent <span>l’Afrique de demain</span>
                </h1>

                <p class="hero-description reveal reveal-delay-2">
                    ARIES Investissements accompagne investisseurs, institutions et dirigeants avec une lecture terrain, une exigence financière élevée et une capacité d’exécution pensée pour les contextes africains.
                </p>

                <div class="hero-actions reveal reveal-delay-3">
                    <a href="{{ route('expertise') }}" class="btn-primary">
                        Notre expertise
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline">
                        Parler à un associé
                    </a>
                </div>
            </div>

            <aside class="hero-panel reveal-right reveal-delay-4">
                <p class="hero-panel__eyebrow">ARIES Investissements</p>
                <h2>Une structure agile pour structurer des décisions à fort enjeu.</h2>

                <div class="hero-panel__list">
                    @foreach([
                        'Conseil stratégique et financier indépendant',
                        'Structuration de levées de fonds et financements',
                        'Lecture précise des risques, acteurs et marchés',
                        'Accompagnement opérationnel jusqu’à l’exécution',
                    ] as $item)
                    <div class="hero-panel__item">
                        <span class="hero-panel__bullet"></span>
                        <span>{{ $item }}</span>
                    </div>
                    @endforeach
                </div>

                <div class="hero-panel__footer">
                    <span>Depuis Brazzaville et Washington</span>
                    <a href="{{ route('team') }}">Découvrir l’équipe</a>
                </div>
            </aside>
        </div>

        <div class="hero-stat-strip reveal reveal-delay-5">
            @foreach($heroStats as $stat)
            <div class="hero-stat">
                <div class="hero-stat__value">{{ $stat['value'] }}</div>
                <div class="hero-stat__label">{{ $stat['label'] }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 lg:py-28 bg-[#F4F6F8]" aria-label="Positionnement ARIES">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1.1fr)_minmax(340px,0.9fr)] gap-12 lg:gap-20 items-center">
            <div>
                <div class="reveal flex items-center gap-3 mb-5">
                    <span class="section-label">À propos</span>
                    <span class="gold-line"></span>
                </div>

                <h2 class="section-title mb-7 reveal reveal-delay-1">
                    Une banque d’affaires pensée pour les réalités du terrain
                </h2>

                <p class="text-[#445066] text-base lg:text-lg leading-relaxed mb-5 reveal reveal-delay-2">
                    Basée en République du Congo, ARIES Investissements relie capital, vision stratégique et exécution opérationnelle. Notre approche conjugue standards internationaux, compréhension fine des écosystèmes africains et proximité avec les décideurs locaux.
                </p>

                <p class="text-[#5C6678] leading-relaxed mb-10 reveal reveal-delay-3">
                    Nous intervenons là où les opérations demandent plus qu’un simple conseil : une capacité à lire le contexte, structurer les bonnes options et accompagner les projets jusqu’aux étapes concrètes de mise en œuvre.
                </p>

                <div class="info-grid reveal reveal-delay-4">
                    @foreach($positioningCards as $card)
                    <article class="info-card">
                        <span class="info-card__value">{{ $card['value'] }}</span>
                        <h3 class="info-card__title">{{ $card['title'] }}</h3>
                        <p>{{ $card['desc'] }}</p>
                    </article>
                    @endforeach
                </div>
            </div>

            <div class="reveal-right">
                <article class="editorial-card">
                    <div class="editorial-card__media">
                        <img
                            src="{{ asset('images/hero-bridge.jpg') }}"
                            alt="Pont symbolisant la connexion entre capital, projets et exécution"
                            loading="lazy"
                        >
                    </div>
                    <div class="editorial-card__body">
                        <p class="editorial-card__eyebrow">Vision de long terme</p>
                        <h3 class="editorial-card__title">Relier capital, projets et exécution avec précision.</h3>
                        <p class="text-[rgba(255,255,255,0.72)] text-sm leading-relaxed">
                            Nous accompagnons des opérations où la qualité de la structuration, des partenaires et du timing change la trajectoire d’un projet.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="py-24 lg:py-28 bg-[#071224]" aria-label="Secteurs d’activité">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 xl:px-16">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
            <div>
                <div class="reveal flex items-center gap-3 mb-4">
                    <span class="section-label">Secteurs d’activité</span>
                    <span class="gold-line"></span>
                </div>
                <h2 class="section-title-light reveal reveal-delay-1">
                    Quatre terrains où la croissance se construit vraiment
                </h2>
            </div>

            <a href="{{ route('sectors') }}" class="btn-outline self-start reveal reveal-delay-2">
                Voir tous les secteurs
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5">
            @foreach($sectors as $i => $sector)
            <a href="{{ route('sectors') }}" class="sector-card reveal reveal-delay-{{ $i + 1 }}">
                <div class="flex items-start justify-between gap-4 mb-10">
                    <span class="text-[#F4F6F8] text-sm tracking-[0.22em] uppercase opacity-70">Secteur</span>
                    <span class="font-display text-4xl text-[#C8A55A] opacity-55">{{ $sector['icon'] }}</span>
                </div>
                <h3 class="font-display text-white text-2xl font-semibold mb-3">{{ $sector['title'] }}</h3>
                <p class="text-[rgba(255,255,255,0.62)] text-sm leading-relaxed">{{ $sector['desc'] }}</p>
                <div class="flex items-center gap-2 mt-8 text-[#C8A55A] text-xs tracking-[0.18em] uppercase">
                    <span>Explorer</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 lg:py-28 bg-[#F7F4EE]" aria-label="Nos expertises">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 xl:px-16">
        <div class="text-center mb-16">
            <div class="reveal flex items-center justify-center gap-3 mb-4">
                <span class="gold-line" style="background: linear-gradient(90deg, transparent, #C8A55A)"></span>
                <span class="section-label">Nos expertises</span>
                <span class="gold-line"></span>
            </div>
            <h2 class="section-title mx-auto reveal reveal-delay-1">
                Un accompagnement structuré, de l’analyse à l’exécution
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($expertises as $i => $expertise)
            <article class="expertise-card reveal reveal-delay-{{ $i + 1 }}">
                <div class="flex items-start justify-between gap-6 mb-8">
                    <div class="w-11 h-11 border border-[rgba(11,29,58,0.12)] rounded-full flex items-center justify-center">
                        <span class="text-[#C8A55A] text-xs tracking-[0.2em] uppercase">{{ $expertise['num'] }}</span>
                    </div>
                    <span class="font-display text-5xl text-[rgba(11,29,58,0.08)] leading-none">{{ $expertise['num'] }}</span>
                </div>
                <h3 class="font-display text-[#081425] text-2xl font-semibold mb-3">{{ $expertise['title'] }}</h3>
                <p class="text-[#5B6575] text-sm lg:text-base leading-relaxed">{{ $expertise['desc'] }}</p>
            </article>
            @endforeach
        </div>

        <div class="text-center mt-12 reveal">
            <a href="{{ route('expertise') }}" class="btn-dark">
                Voir toutes nos expertises
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="py-24 lg:py-28 bg-[#F4F6F8]" aria-label="Équipe dirigeante">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="reveal-left relative">
                <img
                    src="{{ asset('images/team-photo.jpg') }}"
                    alt="Loïc Mackosso et Régis Matondo, équipe dirigeante d’ARIES Investissements"
                    class="w-full object-cover rounded-[2rem]"
                    style="height: 560px;"
                    loading="lazy"
                >
                <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-t from-[#040C18] via-transparent to-transparent opacity-55"></div>
                <div class="absolute bottom-6 left-6 right-6 flex items-end justify-between gap-5">
                    <div>
                        <p class="text-[#C8A55A] text-xs tracking-[0.22em] uppercase mb-1">Direction</p>
                        <p class="text-white text-sm font-medium">Loïc Mackosso · Régis Matondo</p>
                    </div>
                    <div class="w-12 h-12 rounded-full border border-white/20 bg-white/10 backdrop-blur-sm flex items-center justify-center text-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div>
                <div class="reveal flex items-center gap-3 mb-5">
                    <span class="section-label">Équipe dirigeante</span>
                    <span class="gold-line"></span>
                </div>

                <h2 class="section-title mb-7 reveal reveal-delay-1">
                    Une direction engagée, connectée au terrain et aux investisseurs
                </h2>

                <p class="text-[#445066] leading-relaxed mb-8 reveal reveal-delay-2">
                    Fondée par des professionnels aguerris de la finance et du conseil, ARIES Investissements s’appuie sur une expérience combinée, un réseau actif et une compréhension précise des environnements d’affaires africains.
                </p>

                <div class="space-y-4 reveal reveal-delay-3">
                    @foreach([
                        ['name' => 'Loïc Mackosso', 'role' => 'Associé-Gérant', 'initials' => 'LM', 'desc' => 'Pilotage stratégique, structuration financière et accompagnement des opérations complexes.'],
                        ['name' => 'Régis Matondo', 'role' => 'Associé', 'initials' => 'RM', 'desc' => 'Analyse, structuration de projets et relations avec les investisseurs institutionnels.'],
                    ] as $member)
                    <article class="bg-white border border-[rgba(11,29,58,0.08)] rounded-[1.5rem] p-6 hover:border-[rgba(200,165,90,0.35)] transition-colors duration-300">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#081425] flex items-center justify-center flex-shrink-0">
                                <span class="text-[#C8A55A] text-sm tracking-[0.18em] uppercase">{{ $member['initials'] }}</span>
                            </div>
                            <div>
                                <h3 class="font-display text-[#081425] text-xl font-semibold">{{ $member['name'] }}</h3>
                                <p class="text-[#C8A55A] text-xs tracking-[0.18em] uppercase mt-1 mb-3">{{ $member['role'] }}</p>
                                <p class="text-[#5C6678] text-sm leading-relaxed">{{ $member['desc'] }}</p>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>

                <a href="{{ route('team') }}" class="btn-dark mt-8 reveal reveal-delay-4">
                    Rencontrer l’équipe
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="py-24 lg:py-28 bg-[#071224]" aria-label="Publications récentes">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 xl:px-16">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
            <div>
                <div class="reveal flex items-center gap-3 mb-4">
                    <span class="section-label">Analyses & perspectives</span>
                    <span class="gold-line"></span>
                </div>
                <h2 class="section-title-light reveal reveal-delay-1">Des lectures utiles pour mieux décider</h2>
            </div>
            <a href="{{ route('publications') }}" class="btn-outline self-start reveal reveal-delay-2">
                Toutes les publications
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($publications as $i => $publication)
            <article class="reveal reveal-delay-{{ $i + 1 }} bg-[rgba(255,255,255,0.04)] border border-white/8 rounded-[1.75rem] p-8 flex flex-col h-full">
                <div class="flex items-center gap-3 mb-6">
                    <span class="bg-white/10 text-[#C8A55A] text-[0.65rem] font-semibold tracking-[0.18em] uppercase px-3 py-1.5 rounded-full">{{ $publication['cat'] }}</span>
                    <span class="text-[rgba(255,255,255,0.46)] text-xs">{{ $publication['date'] }}</span>
                </div>
                <h3 class="font-display text-white text-2xl font-semibold leading-tight mb-4">{{ $publication['title'] }}</h3>
                <p class="text-[rgba(255,255,255,0.62)] text-sm leading-relaxed flex-1">{{ $publication['desc'] }}</p>
                <div class="flex items-center gap-2 mt-8 text-[#C8A55A] text-xs tracking-[0.18em] uppercase">
                    <span>Lire l’analyse</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 lg:py-28 bg-[#F7F4EE]" aria-label="Contact">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-10 xl:px-16">
        <div class="bg-[#081425] rounded-[2rem] px-6 py-10 md:px-10 lg:px-14 lg:py-14 relative overflow-hidden">
            <div class="hero-grid-pattern opacity-20"></div>
            <div class="absolute right-0 top-0 bottom-0 w-1/3 bg-gradient-to-l from-[rgba(200,165,90,0.12)] to-transparent"></div>

            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div>
                    <div class="reveal flex items-center gap-3 mb-5">
                        <span class="section-label">Travaillons ensemble</span>
                        <span class="gold-line"></span>
                    </div>
                    <h2 class="section-title-light mb-5 reveal reveal-delay-1">
                        Votre projet mérite une structuration claire et un conseil exigeant
                    </h2>
                    <p class="text-[rgba(255,255,255,0.68)] leading-relaxed mb-8 max-w-xl reveal reveal-delay-2">
                        Que vous soyez investisseur, entrepreneur ou institution, nous vous aidons à cadrer les bonnes options et à transformer une ambition en trajectoire crédible.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 reveal reveal-delay-3">
                        <a href="{{ route('contact') }}" class="btn-primary">
                            Prendre contact
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="reveal reveal-delay-2">
                    <div class="space-y-4">
                        @foreach([
                            ['label' => 'Brazzaville', 'value' => '+242 06 97 99 88 5', 'href' => 'tel:+242069799885'],
                            ['label' => 'Washington', 'value' => '+1 646 389 14 37', 'href' => 'tel:+16463891437'],
                            ['label' => 'Email', 'value' => 'aries@aries-investissements.com', 'href' => 'mailto:aries@aries-investissements.com'],
                        ] as $contact)
                        <a href="{{ $contact['href'] }}" class="flex items-center gap-4 p-5 rounded-[1.35rem] border border-white/10 hover:border-[#C8A55A] transition-colors duration-300 group">
                            <span class="text-[rgba(255,255,255,0.45)] text-xs tracking-[0.18em] uppercase w-24 flex-shrink-0">{{ $contact['label'] }}</span>
                            <span class="w-px h-5 bg-white/15 flex-shrink-0"></span>
                            <span class="text-white text-sm lg:text-base group-hover:text-[#C8A55A] transition-colors duration-300">{{ $contact['value'] }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

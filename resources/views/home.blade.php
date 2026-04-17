@extends('layouts.app')

@section('title', 'ARIES Investissements — Conseil financier & Investissement en Afrique')
@section('description', 'ARIES Investissements accompagne investisseurs et porteurs de projets en Afrique. Conseil stratégique, levée de fonds, intelligence économique depuis Brazzaville, République du Congo.')

@section('content')

{{-- ════════════════════════════════════════════
     HERO — Immersive full-screen
════════════════════════════════════════════ --}}
<section class="hero-section flex items-center relative" aria-label="Introduction">
    <div class="hero-grid-pattern"></div>
    <div class="hero-overlay"></div>

    {{-- Decorative vertical line --}}
    <div class="absolute left-6 lg:left-20 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-[rgba(200,165,90,0.25)] to-transparent hidden lg:block"></div>

    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 w-full relative z-10 pt-28 pb-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center min-h-[calc(100vh-7rem)]">

            {{-- Text content --}}
            <div>
                <div class="reveal mb-6 flex items-center gap-3">
                    <span class="section-label">Brazzaville · Washington</span>
                    <span class="w-8 h-px bg-[#C8A55A] opacity-50"></span>
                </div>

                <h1 class="font-display text-white mb-8 reveal reveal-delay-1" style="font-size: clamp(2.5rem, 5vw, 4.5rem); line-height: 1.1; font-weight: 500;">
                    Faire émerger<br>
                    <em class="text-[#C8A55A] not-italic">de nouveaux</em><br>
                    champions africains
                </h1>

                <p class="text-[rgba(255,255,255,0.7)] text-base lg:text-lg leading-relaxed mb-10 max-w-md reveal reveal-delay-2" style="font-weight: 300;">
                    Conseil financier à vocation de banque d'affaires. Nous accompagnons investisseurs et porteurs de projets dans toute l'Afrique, avec rigueur, indépendance et vision stratégique.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 reveal reveal-delay-3">
                    <a href="{{ route('expertise') }}" class="btn-primary">
                        Notre expertise
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="{{ route('contact') }}" class="btn-outline">
                        Prendre contact
                    </a>
                </div>

                {{-- Stats row --}}
                <div class="flex gap-10 mt-16 pt-10 border-t border-white/10 reveal reveal-delay-4">
                    <div>
                        <div class="stat-number" data-count="4" data-suffix="">4</div>
                        <p class="text-[#8A8F9A] text-xs tracking-widest uppercase mt-1">Secteurs</p>
                    </div>
                    <div class="w-px bg-white/10"></div>
                    <div>
                        <div class="stat-number" data-count="2" data-suffix="">2</div>
                        <p class="text-[#8A8F9A] text-xs tracking-widest uppercase mt-1">Continents</p>
                    </div>
                    <div class="w-px bg-white/10"></div>
                    <div>
                        <div class="stat-number" data-count="4" data-suffix="">4</div>
                        <p class="text-[#8A8F9A] text-xs tracking-widest uppercase mt-1">Services clés</p>
                    </div>
                </div>
            </div>

            {{-- Visual --}}
            <div class="hidden lg:block hero-visual relative">
                {{-- Main photo frame --}}
                <div class="relative">
                    <div class="absolute -inset-4 border border-[rgba(200,165,90,0.15)] rounded-none"></div>
                    <div class="absolute -inset-8 border border-[rgba(200,165,90,0.06)] rounded-none"></div>
                    <img
                        src="{{ asset('images/team-photo.jpg') }}"
                        alt="Équipe dirigeante ARIES Investissements"
                        class="w-full object-cover"
                        style="height: 520px; filter: grayscale(20%) contrast(1.05);"
                        loading="eager"
                    >
                    {{-- Overlay gradient --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-[#040C18] via-transparent to-transparent opacity-60"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-[#040C18] via-transparent to-transparent opacity-30"></div>

                    {{-- Caption badge --}}
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="flex items-end justify-between">
                            <div>
                                <p class="text-[#C8A55A] text-xs tracking-widest uppercase mb-1">Direction</p>
                                <p class="text-white text-sm font-medium">Loïc Mackosso · Régis Matondo</p>
                            </div>
                            <div class="w-8 h-8 border border-[#C8A55A] flex items-center justify-center">
                                <svg class="w-4 h-4 text-[#C8A55A]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Gold accent corner --}}
                <div class="absolute -bottom-4 -right-4 w-24 h-24 border-r-2 border-b-2 border-[#C8A55A] opacity-40"></div>
                <div class="absolute -top-4 -left-4 w-16 h-16 border-l-2 border-t-2 border-[#C8A55A] opacity-20"></div>
            </div>

        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce opacity-50">
        <span class="text-[#C8A55A] text-[0.6rem] tracking-widest uppercase">Scroll</span>
        <div class="w-px h-8 bg-gradient-to-b from-[#C8A55A] to-transparent"></div>
    </div>
</section>

{{-- ════════════════════════════════════════════
     INTRODUCTION — Qui est ARIES ?
════════════════════════════════════════════ --}}
<section class="py-28 bg-[#FAFAF8]" aria-label="Présentation ARIES">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">

            {{-- Left: text --}}
            <div>
                <div class="reveal flex items-center gap-3 mb-6">
                    <span class="section-label">À propos</span>
                    <span class="gold-line"></span>
                </div>
                <h2 class="section-title mb-8 reveal reveal-delay-1">
                    Une banque d'affaires<br>au service de<br>
                    <em style="color:#C8A55A; font-style:italic;">l'Afrique de demain</em>
                </h2>
                <p class="text-[#4A5568] leading-relaxed mb-5 reveal reveal-delay-2">
                    ARIES Investissements est une société de conseil financier positionnée comme banque d'affaires, basée en République du Congo. Nous accompagnons nos clients dans leurs projets d'investissement en Afrique, en alliant maîtrise de l'environnement local, connaissance approfondie des acteurs du marché et rigueur des standards internationaux.
                </p>
                <p class="text-[#4A5568] leading-relaxed mb-10 reveal reveal-delay-3">
                    De la structuration financière à la levée de fonds, en passant par l'intelligence économique et le conseil stratégique, nous apportons une vision globale et une expertise opérationnelle à chaque étape de vos projets.
                </p>
                <a href="{{ route('presentation') }}" class="btn-dark reveal reveal-delay-4">
                    En savoir plus
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            {{-- Right: values --}}
            <div class="space-y-6">
                @foreach([
                    ['title' => 'Indépendance', 'desc' => 'Conseils objectifs, sans conflit d\'intérêt. Notre seul engagement : vos intérêts.'],
                    ['title' => 'Professionnalisme', 'desc' => 'Standards internationaux appliqués à chaque mission, avec rigueur et discrétion.'],
                    ['title' => 'Rigueur', 'desc' => 'Analyses approfondies, recommandations fondées sur les faits, pas sur les tendances.'],
                ] as $i => $value)
                <div class="reveal reveal-delay-{{ $i + 1 }} flex gap-5 p-6 border border-[rgba(11,29,58,0.08)] hover:border-[#C8A55A] transition-colors duration-400 group">
                    <div class="flex-shrink-0 w-10 h-10 border border-[#C8A55A] flex items-center justify-center group-hover:bg-[#C8A55A] transition-colors duration-300">
                        <span class="text-[#C8A55A] group-hover:text-[#040C18] font-display text-lg font-medium transition-colors duration-300">
                            {{ ['I','P','R'][$i] }}
                        </span>
                    </div>
                    <div>
                        <h3 class="font-display text-[#0B1D3A] text-lg font-medium mb-1">{{ $value['title'] }}</h3>
                        <p class="text-[#6B7280] text-sm leading-relaxed">{{ $value['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════
     SECTORS — 4 sectors with dark cards
════════════════════════════════════════════ --}}
<section class="py-28 bg-[#060E1A]" aria-label="Secteurs d'activité">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
            <div>
                <div class="reveal flex items-center gap-3 mb-4">
                    <span class="section-label">Secteurs d'activité</span>
                    <span class="gold-line"></span>
                </div>
                <h2 class="section-title-light reveal reveal-delay-1">
                    Quatre secteurs,<br>une vision commune
                </h2>
            </div>
            <a href="{{ route('sectors') }}" class="btn-outline self-start md:self-auto reveal reveal-delay-2">
                Voir tous les secteurs
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-[rgba(200,165,90,0.1)]">
            @foreach([
                ['icon' => '▲', 'num' => '01', 'title' => 'Infrastructures', 'desc' => 'Transport, énergie, télécommunications. Les fondements du développement économique africain.'],
                ['icon' => '◆', 'num' => '02', 'title' => 'Immobilier', 'desc' => 'Immobilier commercial, résidentiel et hôtelier. Un marché en forte croissance sur le continent.'],
                ['icon' => '●', 'num' => '03', 'title' => 'Agrobusiness', 'desc' => 'Transformation agricole, chaînes de valeur et sécurité alimentaire. Le potentiel inexploité.'],
                ['icon' => '✦', 'num' => '04', 'title' => 'Technologie', 'desc' => 'Digital, fintech, solutions innovantes. L\'Afrique au cœur de la prochaine révolution technologique.'],
            ] as $i => $sector)
            <a href="{{ route('sectors') }}" class="sector-card block bg-[#0B1D3A] p-8 reveal reveal-delay-{{ $i + 1 }}">
                <div class="flex justify-between items-start mb-12">
                    <span class="text-[#C8A55A] text-2xl">{{ $sector['icon'] }}</span>
                    <span class="text-[rgba(200,165,90,0.2)] font-display text-4xl font-medium">{{ $sector['num'] }}</span>
                </div>
                <h3 class="font-display text-white text-xl font-medium mb-3">{{ $sector['title'] }}</h3>
                <p class="text-[#8A8F9A] text-sm leading-relaxed">{{ $sector['desc'] }}</p>
                <div class="flex items-center gap-2 mt-8 text-[#C8A55A] text-xs tracking-widest uppercase">
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

{{-- ════════════════════════════════════════════
     EXPERTISE — Services
════════════════════════════════════════════ --}}
<section class="py-28 bg-[#F6F4F0]" aria-label="Nos expertises">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">

        <div class="text-center mb-16">
            <div class="reveal flex items-center justify-center gap-3 mb-4">
                <span class="gold-line"></span>
                <span class="section-label">Nos expertises</span>
                <span class="gold-line" style="background: linear-gradient(90deg, transparent, #C8A55A)"></span>
            </div>
            <h2 class="section-title mx-auto reveal reveal-delay-1">
                Un accompagnement<br>stratégique à 360°
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach([
                [
                    'num'   => '01',
                    'title' => 'Conseil stratégique & financier',
                    'desc'  => 'Structuration d\'opérations, évaluation d\'actifs, advisory M&A et accompagnement dans les décisions d\'investissement à fort enjeu.',
                    'icon'  => 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
                ],
                [
                    'num'   => '02',
                    'title' => 'Levée de fonds & financement',
                    'desc'  => 'Montage de dossiers bancables, mise en relation avec fonds d\'investissement, banques de développement et investisseurs institutionnels.',
                    'icon'  => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                ],
                [
                    'num'   => '03',
                    'title' => 'Intelligence économique',
                    'desc'  => 'Cartographie des acteurs, analyse de l\'environnement concurrentiel, veille stratégique et aide à la décision pour investir en connaissance de cause.',
                    'icon'  => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z',
                ],
                [
                    'num'   => '04',
                    'title' => 'Structuration & investissement',
                    'desc'  => 'Montage juridique et financier de véhicules d\'investissement, accompagnement des investisseurs étrangers dans leur entrée sur les marchés africains.',
                    'icon'  => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                ],
            ] as $i => $exp)
            <div class="expertise-card reveal reveal-delay-{{ $i + 1 }}">
                <div class="flex items-start gap-5 mb-5">
                    <div class="w-10 h-10 flex-shrink-0 border border-[rgba(11,29,58,0.15)] flex items-center justify-center">
                        <svg class="w-5 h-5 text-[#C8A55A]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="{{ $exp['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="font-display text-3xl font-medium text-[rgba(11,29,58,0.1)] mt-1">{{ $exp['num'] }}</span>
                </div>
                <h3 class="font-display text-[#0B1D3A] text-xl font-medium mb-3">{{ $exp['title'] }}</h3>
                <p class="text-[#6B7280] text-sm leading-relaxed">{{ $exp['desc'] }}</p>
            </div>
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

{{-- ════════════════════════════════════════════
     VISION — Dark immersive block
════════════════════════════════════════════ --}}
<section class="py-32 bg-[#0B1D3A] relative overflow-hidden" aria-label="Notre vision">
    <div class="hero-grid-pattern opacity-30"></div>
    <div class="absolute inset-0 bg-radial-gradient opacity-10" style="background: radial-gradient(ellipse at center, rgba(200,165,90,0.15) 0%, transparent 70%)"></div>

    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10 text-center">
        <div class="reveal flex items-center justify-center gap-3 mb-6">
            <span class="gold-line" style="background: linear-gradient(90deg, transparent, #C8A55A)"></span>
            <span class="section-label">Notre mission</span>
            <span class="gold-line"></span>
        </div>
        <blockquote class="font-display text-white reveal reveal-delay-1" style="font-size: clamp(1.75rem, 3.5vw, 3rem); line-height: 1.3; font-weight: 500; max-width: 900px; margin: 0 auto 2rem;">
            "Faire émerger de nouveaux champions<br class="hidden md:block">
            <em class="text-[#C8A55A]">nationaux et régionaux</em> en Afrique."
        </blockquote>
        <p class="text-[rgba(255,255,255,0.5)] text-sm tracking-widest uppercase reveal reveal-delay-2">
            — ARIES Investissements, Brazzaville
        </p>
    </div>
</section>

{{-- ════════════════════════════════════════════
     TEAM — Preview
════════════════════════════════════════════ --}}
<section class="py-28 bg-[#FAFAF8]" aria-label="Équipe dirigeante">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Image --}}
            <div class="relative reveal-left">
                <img
                    src="{{ asset('images/team-photo.jpg') }}"
                    alt="Loïc Mackosso et Régis Matondo — ARIES Investissements"
                    class="w-full object-cover"
                    style="height: 500px;"
                    loading="lazy"
                >
                {{-- Gold frame accent --}}
                <div class="absolute -bottom-5 -right-5 w-32 h-32 border-r-2 border-b-2 border-[#C8A55A] opacity-30 pointer-events-none"></div>
                <div class="absolute -top-5 -left-5 w-20 h-20 border-l-2 border-t-2 border-[#C8A55A] opacity-15 pointer-events-none"></div>
            </div>

            {{-- Content --}}
            <div>
                <div class="reveal flex items-center gap-3 mb-6">
                    <span class="section-label">Équipe dirigeante</span>
                    <span class="gold-line"></span>
                </div>
                <h2 class="section-title mb-8 reveal reveal-delay-1">
                    Une direction<br>engagée et expérimentée
                </h2>
                <p class="text-[#4A5568] leading-relaxed mb-10 reveal reveal-delay-2">
                    Fondée par des professionnels aguerris de la finance et du conseil en Afrique, ARIES Investissements bénéficie d'une expérience éprouvée et d'un réseau de relations solides sur le continent et à l'international.
                </p>

                <div class="space-y-6 reveal reveal-delay-3">
                    @foreach([
                        ['name' => 'Loïc Mackosso', 'role' => 'Associé-Gérant', 'initial' => 'LM'],
                        ['name' => 'Régis Matondo',  'role' => 'Associé',        'initial' => 'RM'],
                    ] as $member)
                    <div class="flex items-center gap-4 p-4 border border-[rgba(11,29,58,0.08)] group hover:border-[#C8A55A] transition-colors duration-300">
                        <div class="w-12 h-12 bg-[#0B1D3A] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#C8A55A] text-sm font-display font-medium">{{ $member['initial'] }}</span>
                        </div>
                        <div>
                            <p class="font-display text-[#0B1D3A] font-medium text-base">{{ $member['name'] }}</p>
                            <p class="text-[#C8A55A] text-xs tracking-widest uppercase">{{ $member['role'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <a href="{{ route('team') }}" class="btn-dark mt-8 reveal reveal-delay-4">
                    Rencontrer l'équipe
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

        </div>
    </div>
</section>

{{-- ════════════════════════════════════════════
     PUBLICATIONS — Latest 3
════════════════════════════════════════════ --}}
<section class="py-28 bg-[#F6F4F0]" aria-label="Publications récentes">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
            <div>
                <div class="reveal flex items-center gap-3 mb-4">
                    <span class="section-label">Publications</span>
                    <span class="gold-line"></span>
                </div>
                <h2 class="section-title reveal reveal-delay-1">Analyses & Perspectives</h2>
            </div>
            <a href="{{ route('publications') }}" class="btn-dark self-start reveal reveal-delay-2">
                Toutes les publications
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['date' => '15 Mars 2025',    'cat' => 'Analyse',        'title' => "L'Afrique centrale, nouveau hub d'investissement",       'desc' => "Analyse des dynamiques d'investissement en Afrique centrale et des opportunités émergentes."],
                ['date' => '02 Février 2025', 'cat' => 'Perspectives',   'title' => 'Financement des infrastructures : enjeux et perspectives','desc' => "Le déficit infrastructurel africain : à la fois un défi et une opportunité d'investissement sans précédent."],
                ['date' => '10 Janvier 2025', 'cat' => 'Secteurs',       'title' => 'Agrobusiness : le potentiel inexploité du Bassin du Congo','desc' => "Comment transformer le potentiel agricole du Bassin du Congo en projets bancables et attractifs ?"],
            ] as $i => $pub)
            <article class="reveal reveal-delay-{{ $i + 1 }} group bg-white border border-[rgba(11,29,58,0.06)] hover:border-[rgba(200,165,90,0.3)] transition-colors duration-400 flex flex-col">
                <div class="p-8 flex flex-col flex-1">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="bg-[#0B1D3A] text-[#C8A55A] text-[0.6rem] font-semibold tracking-widest uppercase px-3 py-1">{{ $pub['cat'] }}</span>
                        <span class="text-[#8A8F9A] text-xs">{{ $pub['date'] }}</span>
                    </div>
                    <h3 class="font-display text-[#0B1D3A] text-lg font-medium mb-3 leading-snug group-hover:text-[#C8A55A] transition-colors duration-300">
                        {{ $pub['title'] }}
                    </h3>
                    <p class="text-[#6B7280] text-sm leading-relaxed flex-1 mb-6">{{ $pub['desc'] }}</p>
                    <div class="flex items-center gap-2 text-[#0B1D3A] text-xs font-semibold tracking-wider uppercase group-hover:text-[#C8A55A] transition-colors duration-300">
                        <span>Lire l'article</span>
                        <svg class="w-3 h-3 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </article>
            @endforeach
        </div>

    </div>
</section>

{{-- ════════════════════════════════════════════
     CTA — Contact block
════════════════════════════════════════════ --}}
<section class="py-28 bg-[#0B1D3A] relative overflow-hidden" aria-label="Contact">
    <div class="hero-grid-pattern opacity-20"></div>
    <div class="absolute right-0 top-0 bottom-0 w-1/3 bg-gradient-to-l from-[rgba(200,165,90,0.05)] to-transparent"></div>

    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="reveal flex items-center gap-3 mb-6">
                    <span class="section-label">Travaillons ensemble</span>
                    <span class="gold-line"></span>
                </div>
                <h2 class="section-title-light mb-6 reveal reveal-delay-1">
                    Votre projet mérite<br>
                    <em class="text-[#C8A55A]">le meilleur conseil</em>
                </h2>
                <p class="text-[rgba(255,255,255,0.65)] leading-relaxed mb-8 max-w-md reveal reveal-delay-2" style="font-weight: 300;">
                    Que vous soyez investisseur, entrepreneur ou institution, ARIES Investissements vous accompagne dans chaque étape de votre projet en Afrique.
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
                        ['label' => 'Brazzaville',  'value' => '+242 06 97 99 88 5',              'href' => 'tel:+242069799885'],
                        ['label' => 'Washington',   'value' => '+1 646 389 14 37',                'href' => 'tel:+16463891437'],
                        ['label' => 'Email',        'value' => 'aries@aries-investissements.com', 'href' => 'mailto:aries@aries-investissements.com'],
                    ] as $contact)
                    <a href="{{ $contact['href'] }}" class="flex items-center gap-4 p-5 border border-white/10 hover:border-[#C8A55A] transition-colors duration-300 group">
                        <span class="text-[#8A8F9A] text-xs tracking-widest uppercase w-20 flex-shrink-0">{{ $contact['label'] }}</span>
                        <span class="w-px h-4 bg-white/20 flex-shrink-0"></span>
                        <span class="text-white text-sm group-hover:text-[#C8A55A] transition-colors duration-300">{{ $contact['value'] }}</span>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

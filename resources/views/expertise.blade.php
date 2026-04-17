@extends('layouts.app')

@section('title', 'Expertise — ARIES Investissements')
@section('description', 'Conseil stratégique, levée de fonds, intelligence économique et structuration de projets d\'investissement en Afrique.')

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="hero-grid-pattern opacity-40"></div>
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10">
        <div class="reveal flex items-center gap-3 mb-4">
            <span class="section-label">Ce que nous faisons</span>
            <span class="gold-line"></span>
        </div>
        <h1 class="font-display text-white reveal reveal-delay-1" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500; line-height: 1.1;">
            Nos Expertises
        </h1>
    </div>
</section>

{{-- Expertise 01 --}}
<section class="py-28 bg-[#FAFAF8]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">

        {{-- Section intro --}}
        <div class="max-w-2xl mb-20">
            <div class="reveal flex items-center gap-3 mb-6">
                <span class="section-label">Accompagnement 360°</span>
                <span class="gold-line"></span>
            </div>
            <h2 class="section-title mb-6 reveal reveal-delay-1">Un conseil global,<br>adapté à chaque projet</h2>
            <p class="text-[#4A5568] leading-relaxed reveal reveal-delay-2">
                ARIES Investissements intervient à toutes les étapes du cycle d'investissement, depuis la définition de la stratégie jusqu'à la clôture des opérations, en mobilisant des équipes expertes sur chaque dimension.
            </p>
        </div>

        {{-- Expertise cards --}}
        <div class="space-y-24">

            {{-- 01 - Conseil stratégique --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="reveal-left">
                    <div class="flex items-start gap-5 mb-8">
                        <span class="font-display text-6xl font-medium text-[rgba(11,29,58,0.07)]" style="line-height:1;">01</span>
                        <div class="pt-2">
                            <span class="section-label block mb-2">Conseil stratégique</span>
                            <h3 class="font-display text-[#0B1D3A] text-2xl font-medium">Conseil stratégique & financier</h3>
                        </div>
                    </div>
                    <p class="text-[#4A5568] leading-relaxed mb-6">
                        Nous accompagnons nos clients dans leurs décisions stratégiques et financières les plus importantes. De l'évaluation d'opportunités d'acquisition à la structuration d'opérations complexes, nous apportons une analyse objective et des recommandations opérationnelles.
                    </p>
                    <ul class="space-y-3">
                        @foreach(['Advisory M&A et cessions', 'Évaluation d\'actifs et entreprises', 'Stratégie d\'entrée sur les marchés africains', 'Due diligence financière et stratégique', 'Restructuration et optimisation financière'] as $item)
                        <li class="value-item text-[#6B7280] text-sm pl-5">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="reveal-right bg-[#0B1D3A] p-10 relative">
                    <div class="absolute top-0 right-0 w-16 h-16 border-t-2 border-r-2 border-[#C8A55A] opacity-30"></div>
                    <p class="text-[#C8A55A] text-xs tracking-widest uppercase mb-6 font-medium">Notre approche</p>
                    <blockquote class="font-display text-white text-xl font-medium leading-relaxed mb-6">
                        "Une analyse rigoureuse de l'environnement, des acteurs et des dynamiques de marché pour des décisions éclairées."
                    </blockquote>
                    <span class="gold-line"></span>
                </div>
            </div>

            <div class="gold-line-full"></div>

            {{-- 02 - Levée de fonds --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="order-2 lg:order-1 reveal-left bg-[#060E1A] p-10 relative">
                    <div class="absolute bottom-0 left-0 w-16 h-16 border-b-2 border-l-2 border-[#C8A55A] opacity-30"></div>
                    <p class="text-[#C8A55A] text-xs tracking-widest uppercase mb-6 font-medium">Notre réseau</p>
                    <div class="space-y-4">
                        @foreach(['Fonds d\'investissement panafricains', 'Banques de développement (BAD, BM, AFD…)', 'Family offices & investisseurs privés', 'Institutions financières régionales', 'Partenaires stratégiques internationaux'] as $item)
                        <div class="flex items-center gap-3 py-3 border-b border-white/10 last:border-0">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#C8A55A] flex-shrink-0"></span>
                            <span class="text-[rgba(255,255,255,0.7)] text-sm">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="order-1 lg:order-2 reveal-right">
                    <div class="flex items-start gap-5 mb-8">
                        <span class="font-display text-6xl font-medium text-[rgba(11,29,58,0.07)]" style="line-height:1;">02</span>
                        <div class="pt-2">
                            <span class="section-label block mb-2">Financement</span>
                            <h3 class="font-display text-[#0B1D3A] text-2xl font-medium">Levée de fonds & financement de projets</h3>
                        </div>
                    </div>
                    <p class="text-[#4A5568] leading-relaxed mb-6">
                        Nous structurons et exécutons des opérations de levée de dette et de fonds propres, en mobilisant notre réseau d'investisseurs institutionnels, de fonds d'investissement et de banques de développement actifs en Afrique.
                    </p>
                    <ul class="space-y-3">
                        @foreach(['Structuration financière de projets', 'Préparation de mémorandums d\'investissement', 'Mise en relation avec investisseurs qualifiés', 'Négociation et closing des opérations', 'Accompagnement post-closing'] as $item)
                        <li class="value-item text-[#6B7280] text-sm pl-5">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="gold-line-full"></div>

            {{-- 03 - Intelligence économique --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="reveal-left">
                    <div class="flex items-start gap-5 mb-8">
                        <span class="font-display text-6xl font-medium text-[rgba(11,29,58,0.07)]" style="line-height:1;">03</span>
                        <div class="pt-2">
                            <span class="section-label block mb-2">Connaissance des marchés</span>
                            <h3 class="font-display text-[#0B1D3A] text-2xl font-medium">Intelligence économique</h3>
                        </div>
                    </div>
                    <p class="text-[#4A5568] leading-relaxed mb-6">
                        En Afrique, la qualité de l'information est un avantage compétitif décisif. Notre service d'intelligence économique vous permet d'investir et d'opérer en connaissance de cause, avec une vision claire des acteurs, des dynamiques et des risques.
                    </p>
                    <ul class="space-y-3">
                        @foreach(['Cartographie des acteurs et marchés', 'Analyse de l\'environnement concurrentiel', 'Veille réglementaire et politique', 'Identification d\'opportunités d\'investissement', 'Évaluation des risques pays et sectoriels'] as $item)
                        <li class="value-item text-[#6B7280] text-sm pl-5">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="reveal-right bg-[#0B1D3A] p-10 relative">
                    <div class="absolute top-0 right-0 w-16 h-16 border-t-2 border-r-2 border-[#C8A55A] opacity-30"></div>
                    <p class="text-[#C8A55A] text-xs tracking-widest uppercase mb-4 font-medium">Notre avantage</p>
                    <p class="text-[rgba(255,255,255,0.7)] text-sm leading-relaxed mb-6">
                        Implantés au cœur de la République du Congo, nous bénéficions d'un accès direct aux acteurs institutionnels, économiques et politiques de la sous-région, un atout unique pour nos clients internationaux.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mt-6">
                        @foreach(['Afrique centrale', 'Afrique de l\'Ouest', 'Afrique de l\'Est', 'Afrique australe'] as $zone)
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#C8A55A]"></span>
                            <span class="text-[rgba(255,255,255,0.6)] text-xs">{{ $zone }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="gold-line-full"></div>

            {{-- 04 - Structuration --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="order-2 lg:order-1 reveal-left bg-[#060E1A] p-10 relative">
                    <div class="absolute bottom-0 left-0 w-16 h-16 border-b-2 border-l-2 border-[#C8A55A] opacity-30"></div>
                    <div class="space-y-6">
                        @foreach(['Holding d\'investissement', 'Joint-ventures & partenariats', 'Fonds sectoriels dédiés', 'SPV & véhicules ad hoc'] as $i => $struct)
                        <div class="flex items-center gap-4 py-4 border-b border-white/10 last:border-0">
                            <span class="font-display text-[#C8A55A] text-sm font-medium w-6">0{{ $i+1 }}</span>
                            <span class="text-white text-sm">{{ $struct }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="order-1 lg:order-2 reveal-right">
                    <div class="flex items-start gap-5 mb-8">
                        <span class="font-display text-6xl font-medium text-[rgba(11,29,58,0.07)]" style="line-height:1;">04</span>
                        <div class="pt-2">
                            <span class="section-label block mb-2">Investissement</span>
                            <h3 class="font-display text-[#0B1D3A] text-2xl font-medium">Structuration & conseil en investissement</h3>
                        </div>
                    </div>
                    <p class="text-[#4A5568] leading-relaxed mb-6">
                        Nous conseillons nos clients sur la structuration juridique et financière optimale de leurs investissements en Afrique, en tenant compte des contraintes fiscales, réglementaires et opérationnelles de chaque marché.
                    </p>
                    <ul class="space-y-3">
                        @foreach(['Montage de véhicules d\'investissement', 'Conseil en droit des affaires africain', 'Optimisation fiscale et structurelle', 'Accompagnement des investisseurs étrangers', 'Suivi et reporting post-investissement'] as $item)
                        <li class="value-item text-[#6B7280] text-sm pl-5">{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-[#0B1D3A]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 text-center">
        <h2 class="section-title-light mb-6 reveal">Discutons de votre projet</h2>
        <p class="text-[rgba(255,255,255,0.6)] mb-8 max-w-lg mx-auto reveal reveal-delay-1">Une équipe dédiée à l'écoute de vos ambitions en Afrique.</p>
        <a href="{{ route('contact') }}" class="btn-primary reveal reveal-delay-2">
            Prendre contact
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</section>

@endsection

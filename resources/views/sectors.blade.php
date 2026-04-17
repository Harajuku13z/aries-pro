@extends('layouts.app')

@section('title', 'Secteurs d\'activité — ARIES Investissements')
@section('description', 'Infrastructures, immobilier, agrobusiness, technologie : ARIES Investissements accompagne les investissements dans les secteurs clés du développement africain.')

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="hero-grid-pattern opacity-40"></div>
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10">
        <div class="reveal flex items-center gap-3 mb-4">
            <span class="section-label">Domaines d'intervention</span>
            <span class="gold-line"></span>
        </div>
        <h1 class="font-display text-white reveal reveal-delay-1" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500; line-height: 1.1;">
            Secteurs d'activité
        </h1>
    </div>
</section>

{{-- Intro --}}
<section class="py-20 bg-[#FAFAF8]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">
        <div class="max-w-2xl">
            <p class="text-[#4A5568] text-lg leading-relaxed reveal">
                ARIES Investissements concentre son expertise sur quatre secteurs stratégiques qui constituent les piliers du développement économique africain et offrent les meilleures opportunités d'investissement à long terme.
            </p>
        </div>
    </div>
</section>

{{-- Sectors --}}
@php
$sectors = [
    [
        'num'     => '01',
        'title'   => 'Infrastructures',
        'tagline' => 'Les fondements du développement',
        'icon'    => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
        'desc'    => "Le déficit infrastructurel africain représente à la fois un défi majeur et une opportunité d'investissement considérable. De l'énergie aux télécommunications, en passant par le transport et la logistique, les besoins sont immenses et les perspectives de rentabilité attractives pour des investisseurs de long terme.",
        'items'   => ['Énergie & électrification', 'Transport & logistique', 'Télécommunications & connectivité', 'Eau & assainissement', 'Infrastructures portuaires & aéroportuaires'],
        'bg'      => 'bg-[#060E1A]',
        'light'   => false,
    ],
    [
        'num'     => '02',
        'title'   => 'Immobilier',
        'tagline' => 'Un marché en forte expansion',
        'icon'    => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
        'desc'    => "L'urbanisation accélérée de l'Afrique génère une demande soutenue pour toutes les classes d'actifs immobiliers. Des quartiers d'affaires en plein essor aux développements résidentiels, en passant par le commerce et l'hôtellerie, l'immobilier africain offre des rendements attractifs pour des investisseurs avisés.",
        'items'   => ['Immobilier de bureau & commercial', 'Développements résidentiels', 'Hôtellerie & tourisme', 'Zones industrielles & entrepôts', 'Centres commerciaux & retail'],
        'bg'      => 'bg-[#F6F4F0]',
        'light'   => true,
    ],
    [
        'num'     => '03',
        'title'   => 'Agrobusiness',
        'tagline' => 'Le géant endormi du continent',
        'icon'    => 'M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
        'desc'    => "Avec les terres arables les plus fertiles du monde et une demande alimentaire en forte croissance, l'Afrique représente la prochaine grande frontière agricole mondiale. Le Bassin du Congo et l'Afrique centrale offrent des opportunités exceptionnelles dans la transformation agricole et le développement de chaînes de valeur alimentaires.",
        'items'   => ['Production & transformation agricole', 'Chaînes de valeur alimentaires', 'Sécurité alimentaire & stockage', 'Agro-industrie & export', 'Agriculture de précision & technologie'],
        'bg'      => 'bg-[#060E1A]',
        'light'   => false,
    ],
    [
        'num'     => '04',
        'title'   => 'Technologie',
        'tagline' => "L'Afrique à l'ère numérique",
        'icon'    => 'M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z',
        'desc'    => "La révolution digitale africaine est en marche. Fintech, e-commerce, edtech, healthtech : des solutions innovantes transforment l'économie du continent à une vitesse remarquable. L'Afrique subsaharienne est aujourd'hui le marché de paiements mobiles le plus dynamique du monde, et ce n'est qu'un début.",
        'items'   => ['Fintech & paiements mobiles', 'E-commerce & marketplace', 'Edtech & formation', 'Healthtech & santé numérique', 'Solutions SaaS pour entreprises'],
        'bg'      => 'bg-[#F6F4F0]',
        'light'   => true,
    ],
];
@endphp

@foreach($sectors as $i => $sector)
<section class="py-24 {{ $sector['bg'] }}">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center {{ $i % 2 !== 0 ? 'lg:grid-flow-col-dense' : '' }}">

            {{-- Text --}}
            <div class="{{ $i % 2 !== 0 ? 'lg:col-start-2' : '' }} reveal-{{ $i % 2 === 0 ? 'left' : 'right' }}">
                <div class="flex items-start gap-4 mb-8">
                    <span class="font-display font-medium text-[#C8A55A] opacity-30" style="font-size: 5rem; line-height: 1;">{{ $sector['num'] }}</span>
                    <div class="pt-3">
                        <p class="section-label mb-1">{{ $sector['tagline'] }}</p>
                        <h2 class="{{ $sector['light'] ? 'section-title' : 'section-title-light' }} text-2xl" style="font-size: clamp(1.75rem, 3vw, 2.5rem);">{{ $sector['title'] }}</h2>
                    </div>
                </div>
                <p class="{{ $sector['light'] ? 'text-[#4A5568]' : 'text-[rgba(255,255,255,0.65)]' }} leading-relaxed mb-8 text-sm lg:text-base" style="font-weight: 300;">
                    {{ $sector['desc'] }}
                </p>
                <ul class="space-y-2 mb-8">
                    @foreach($sector['items'] as $item)
                    <li class="flex items-center gap-3">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#C8A55A] flex-shrink-0"></span>
                        <span class="{{ $sector['light'] ? 'text-[#6B7280]' : 'text-[rgba(255,255,255,0.6)]' }} text-sm">{{ $item }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}" class="{{ $sector['light'] ? 'btn-dark' : 'btn-outline' }}">
                    Discuter d'un projet
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            {{-- Icon panel --}}
            <div class="{{ $i % 2 !== 0 ? 'lg:col-start-1' : '' }} reveal-{{ $i % 2 === 0 ? 'right' : 'left' }}">
                <div class="{{ $sector['light'] ? 'bg-[#0B1D3A]' : 'bg-[#0F2347]' }} p-12 flex items-center justify-center relative" style="min-height: 360px;">
                    <div class="absolute top-0 right-0 w-20 h-20 border-t-2 border-r-2 border-[#C8A55A] opacity-25"></div>
                    <div class="absolute bottom-0 left-0 w-20 h-20 border-b-2 border-l-2 border-[#C8A55A] opacity-25"></div>
                    <svg class="w-24 h-24 text-[#C8A55A] opacity-20" fill="none" stroke="currentColor" stroke-width="0.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $sector['icon'] }}"/>
                    </svg>
                    <div class="absolute bottom-8 left-8 right-8">
                        <div class="h-px bg-gradient-to-r from-[#C8A55A] to-transparent opacity-30 mb-4"></div>
                        <p class="text-[#C8A55A] text-xs tracking-widest uppercase">{{ $sector['num'] }} / Secteur stratégique</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endforeach

{{-- CTA --}}
<section class="py-20 bg-[#0B1D3A]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 text-center">
        <h2 class="section-title-light mb-6 reveal">Un projet dans l'un de ces secteurs ?</h2>
        <p class="text-[rgba(255,255,255,0.6)] mb-8 max-w-lg mx-auto reveal reveal-delay-1">ARIES Investissements vous accompagne à chaque étape de votre investissement en Afrique.</p>
        <a href="{{ route('contact') }}" class="btn-primary reveal reveal-delay-2">
            Parler à un expert
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</section>

@endsection

@extends('layouts.app')

@section('title', 'Équipe dirigeante — ARIES Investissements')
@section('description', 'Loïc Mackosso et Régis Matondo, une direction expérimentée au service de vos projets d\'investissement en Afrique.')

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="hero-grid-pattern opacity-40"></div>
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10">
        <div class="reveal flex items-center gap-3 mb-4">
            <span class="section-label">Les hommes derrière ARIES</span>
            <span class="gold-line"></span>
        </div>
        <h1 class="font-display text-white reveal reveal-delay-1" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500; line-height: 1.1;">
            Équipe dirigeante
        </h1>
    </div>
</section>

{{-- Intro --}}
<section class="py-20 bg-[#FAFAF8]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">
        <div class="max-w-2xl">
            <p class="text-[#4A5568] text-lg leading-relaxed reveal">
                ARIES Investissements est dirigée par deux associés dont l'expérience complémentaire, les réseaux solides et la passion pour l'Afrique constituent le socle de la société. Ensemble, ils portent une vision ambitieuse : faire d'ARIES la référence du conseil financier en Afrique centrale.
            </p>
        </div>
    </div>
</section>

{{-- Team Photo + Names --}}
<section class="pb-28 bg-[#FAFAF8]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">

            {{-- Main photo --}}
            <div class="reveal-left relative">
                <img
                    src="{{ asset('images/team-photo.jpg') }}"
                    alt="Loïc Mackosso et Régis Matondo — ARIES Investissements"
                    class="w-full object-cover"
                    style="height: 560px;"
                    loading="eager"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-[#040C18] via-transparent to-transparent opacity-50"></div>
                <div class="absolute bottom-6 left-6 right-6 flex justify-between items-end">
                    <div>
                        <p class="text-[#C8A55A] text-xs tracking-widest uppercase mb-1">Direction d'ARIES Investissements</p>
                        <p class="text-white font-medium">Brazzaville, République du Congo</p>
                    </div>
                </div>
                {{-- Frame accent --}}
                <div class="absolute -bottom-4 -right-4 w-20 h-20 border-r-2 border-b-2 border-[#C8A55A] opacity-30 pointer-events-none"></div>
            </div>

            {{-- Member profiles --}}
            <div class="space-y-8">

                {{-- Loïc Mackosso --}}
                <div class="reveal reveal-delay-1 bg-white border border-[rgba(11,29,58,0.08)] hover:border-[rgba(200,165,90,0.3)] transition-colors duration-300 p-8">
                    <div class="flex items-start gap-5 mb-6">
                        <div class="w-14 h-14 bg-[#0B1D3A] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#C8A55A] font-display text-xl font-medium">LM</span>
                        </div>
                        <div>
                            <h2 class="font-display text-[#0B1D3A] text-xl font-medium">Loïc Mackosso</h2>
                            <p class="text-[#C8A55A] text-xs tracking-widest uppercase mt-1">Associé-Gérant</p>
                        </div>
                    </div>
                    <span class="gold-line mb-5 block"></span>
                    <p class="text-[#4A5568] text-sm leading-relaxed mb-4">
                        Loïc Mackosso est le fondateur et associé-gérant d'ARIES Investissements. Fort d'une expérience approfondie dans le conseil financier et les marchés africains, il pilote la stratégie et les opérations de la société avec une vision claire des enjeux du développement économique africain.
                    </p>
                    <p class="text-[#4A5568] text-sm leading-relaxed">
                        Sa connaissance intime de l'écosystème financier africain, de Brazzaville à Washington, lui permet d'identifier les meilleures opportunités et de structurer des transactions complexes avec efficacité.
                    </p>
                </div>

                {{-- Régis Matondo --}}
                <div class="reveal reveal-delay-2 bg-white border border-[rgba(11,29,58,0.08)] hover:border-[rgba(200,165,90,0.3)] transition-colors duration-300 p-8">
                    <div class="flex items-start gap-5 mb-6">
                        <div class="w-14 h-14 bg-[#0B1D3A] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#C8A55A] font-display text-xl font-medium">RM</span>
                        </div>
                        <div>
                            <h2 class="font-display text-[#0B1D3A] text-xl font-medium">Régis Matondo</h2>
                            <p class="text-[#C8A55A] text-xs tracking-widest uppercase mt-1">Associé</p>
                        </div>
                    </div>
                    <span class="gold-line mb-5 block"></span>
                    <p class="text-[#4A5568] text-sm leading-relaxed mb-4">
                        Régis Matondo est associé d'ARIES Investissements. Il apporte une expertise complémentaire en matière d'analyse financière, de structuration de projets et de relations avec les investisseurs institutionnels opérant sur le continent africain.
                    </p>
                    <p class="text-[#4A5568] text-sm leading-relaxed">
                        Sa rigueur analytique et sa capacité à nouer des relations de confiance avec les acteurs clés du marché constituent des atouts majeurs pour la réussite des missions confiées à ARIES.
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>

{{-- Philosophy --}}
<section class="py-28 bg-[#0B1D3A] relative overflow-hidden">
    <div class="hero-grid-pattern opacity-20"></div>
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="reveal flex items-center gap-3 mb-6">
                    <span class="section-label">Notre approche</span>
                    <span class="gold-line"></span>
                </div>
                <h2 class="section-title-light mb-8 reveal reveal-delay-1">
                    Une philosophie fondée<br>sur <em class="text-[#C8A55A]">la confiance</em>
                </h2>
                <p class="text-[rgba(255,255,255,0.65)] leading-relaxed mb-6 reveal reveal-delay-2" style="font-weight: 300;">
                    Chez ARIES Investissements, nous croyons que la relation client repose avant tout sur la confiance. Nous n'acceptons que les mandats pour lesquels nous sommes convaincus d'apporter une valeur ajoutée réelle.
                </p>
                <p class="text-[rgba(255,255,255,0.65)] leading-relaxed reveal reveal-delay-3" style="font-weight: 300;">
                    Notre taille à taille humaine est une force : elle nous permet d'offrir à chaque client une attention personnalisée et un engagement de nos associés à chaque étape de la mission.
                </p>
            </div>
            <div class="reveal reveal-delay-2">
                <div class="space-y-4">
                    @foreach([
                        ['num' => '01', 'title' => 'Engagement personnel', 'desc' => 'Les associés s\'impliquent directement dans chaque mission.'],
                        ['num' => '02', 'title' => 'Discrétion absolue',    'desc' => 'Confidentialité totale sur toutes les informations partagées.'],
                        ['num' => '03', 'title' => 'Résultats mesurables',  'desc' => 'Nos honoraires reflètent notre engagement sur les résultats.'],
                    ] as $item)
                    <div class="flex gap-5 p-5 border border-white/10 hover:border-[#C8A55A] transition-colors duration-300">
                        <span class="font-display text-[#C8A55A] text-lg font-medium w-8 flex-shrink-0">{{ $item['num'] }}</span>
                        <div>
                            <h4 class="text-white text-sm font-medium mb-1">{{ $item['title'] }}</h4>
                            <p class="text-[#8A8F9A] text-sm">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-[#F6F4F0]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 text-center">
        <h2 class="section-title mb-6 reveal">Rencontrons-nous</h2>
        <p class="text-[#6B7280] mb-8 max-w-lg mx-auto reveal reveal-delay-1">Nous sommes à votre disposition pour une première discussion sur votre projet, en toute confidentialité.</p>
        <a href="{{ route('contact') }}" class="btn-dark reveal reveal-delay-2">
            Prendre rendez-vous
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</section>

@endsection

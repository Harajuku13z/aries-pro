@extends('layouts.app')

@section('title', 'Publications & Analyses — ARIES Investissements')
@section('description', 'Analyses, perspectives et insights sur l\'investissement en Afrique par ARIES Investissements.')

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="hero-grid-pattern opacity-40"></div>
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10">
        <div class="reveal flex items-center gap-3 mb-4">
            <span class="section-label">Analyses & Perspectives</span>
            <span class="gold-line"></span>
        </div>
        <h1 class="font-display text-white reveal reveal-delay-1" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500; line-height: 1.1;">
            Publications
        </h1>
    </div>
</section>

{{-- Intro --}}
<section class="py-16 bg-[#FAFAF8] border-b border-[rgba(11,29,58,0.06)]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">
        <div class="max-w-2xl">
            <p class="text-[#4A5568] text-lg leading-relaxed reveal">
                ARIES Investissements partage régulièrement ses analyses sur les marchés africains, les tendances d'investissement et les secteurs stratégiques du continent. Ces publications reflètent notre engagement à contribuer à une meilleure compréhension des opportunités africaines.
            </p>
        </div>
    </div>
</section>

{{-- Publications grid --}}
<section class="py-20 bg-[#FAFAF8]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($publications as $i => $pub)
            <article class="reveal reveal-delay-{{ ($i % 3) + 1 }} group bg-white border border-[rgba(11,29,58,0.06)] hover:border-[rgba(200,165,90,0.3)] transition-all duration-400 flex flex-col hover:shadow-lg">
                {{-- Header bar --}}
                <div class="h-1 bg-gradient-to-r from-[#0B1D3A] to-[#C8A55A] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-400 origin-left"></div>
                <div class="p-8 flex flex-col flex-1">
                    <div class="flex items-center justify-between mb-6">
                        <span class="bg-[#0B1D3A] text-[#C8A55A] text-[0.6rem] font-semibold tracking-widest uppercase px-3 py-1">
                            {{ $pub['category'] }}
                        </span>
                        <span class="text-[#8A8F9A] text-xs">{{ $pub['date'] }}</span>
                    </div>
                    <h2 class="font-display text-[#0B1D3A] text-lg font-medium mb-4 leading-snug group-hover:text-[#C8A55A] transition-colors duration-300 flex-1">
                        {{ $pub['title'] }}
                    </h2>
                    <p class="text-[#6B7280] text-sm leading-relaxed mb-6">{{ $pub['excerpt'] }}</p>
                    <div class="flex items-center gap-2 mt-auto pt-4 border-t border-[rgba(11,29,58,0.06)]">
                        <span class="text-[#0B1D3A] text-xs font-semibold tracking-wider uppercase group-hover:text-[#C8A55A] transition-colors duration-300">Lire l'article</span>
                        <svg class="w-3 h-3 text-[#0B1D3A] group-hover:text-[#C8A55A] transform group-hover:translate-x-1 transition-all duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

{{-- Newsletter --}}
<section class="py-24 bg-[#0B1D3A] relative overflow-hidden">
    <div class="hero-grid-pattern opacity-20"></div>
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10">
        <div class="max-w-xl mx-auto text-center">
            <div class="reveal flex items-center justify-center gap-3 mb-6">
                <span class="gold-line" style="background: linear-gradient(90deg, transparent, #C8A55A)"></span>
                <span class="section-label">Restez informé</span>
                <span class="gold-line"></span>
            </div>
            <h2 class="section-title-light mb-4 reveal reveal-delay-1">Nos analyses directement dans votre boîte</h2>
            <p class="text-[rgba(255,255,255,0.55)] text-sm mb-8 reveal reveal-delay-2">Recevez en avant-première nos publications sur l'investissement en Afrique.</p>
            <div class="flex flex-col sm:flex-row gap-0 reveal reveal-delay-3">
                <input
                    type="email"
                    placeholder="Votre adresse email"
                    class="flex-1 bg-white/5 border border-white/20 text-white placeholder-[#8A8F9A] px-5 py-3.5 text-sm outline-none focus:border-[#C8A55A] transition-colors duration-300 min-w-0"
                >
                <button class="btn-primary whitespace-nowrap border-l-0 sm:border-l-0">
                    S'abonner
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

@endsection

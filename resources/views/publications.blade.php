@extends('layouts.app')

@section('title', 'Publications & Analyses — ARIES Investissements')
@section('description', "Analyses, perspectives et insights sur l'investissement en Afrique par ARIES Investissements.")

@section('content')
@php
    $imageMap = [
        'afrique-centrale-hub-investissement' => 'hero-building.jpg',
        'financement-infrastructures-afrique' => 'sector-infra.jpg',
        'agrobusiness-bassin-congo' => 'sector-agro.jpg',
        'intelligence-economique-investissement-afrique' => 'hero-bridge.jpg',
        'levee-fonds-structurer-reussir' => 'team-meeting.jpg',
        'immobilier-bureau-brazzaville' => 'sector-immo.jpg',
    ];

    $featured = $publications[0] ?? null;
    $rest = array_slice($publications, 1);
@endphp

<section class="page-hero" aria-label="Publications ARIES">
    <div class="page-hero__media">
        <img src="{{ asset('images/hero-main.jpg') }}" alt="Analyses et perspectives ARIES" loading="eager">
        <div class="page-hero__overlay"></div>
    </div>

    <div class="page-hero__inner">
        <div class="page-hero__content">
            <p class="page-hero__kicker reveal">Analyses & perspectives</p>
            <h1 class="page-hero__title reveal reveal-delay-1">Publications</h1>
            <p class="page-hero__sub reveal reveal-delay-2">
                Nos notes, lectures de marché et retours d'expérience sur les dynamiques d'investissement en Afrique,
                avec un regard à la fois stratégique, financier et opérationnel.
            </p>
            <div class="page-hero__pills reveal reveal-delay-3">
                <span>Analyse</span>
                <span>Perspectives</span>
                <span>Afrique</span>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--soft">
    <div class="h-container">
        <div class="page-intro reveal">
            <p class="h-kicker">Dernières lectures</p>
            <h2 class="page-title">Des contenus pensés pour éclairer l'action</h2>
            <p class="page-text">
                Chaque publication vise à rendre un sujet complexe plus lisible pour les investisseurs, dirigeants et partenaires
                qui veulent décider avec plus de profondeur et moins d'angles morts.
            </p>
        </div>

        @if($featured)
            <div class="aries-split aries-split--match-height">
                <div class="aries-split__media reveal-left">
                    <img src="{{ asset('images/' . ($imageMap[$featured['slug']] ?? 'hero-building.jpg')) }}" alt="{{ $featured['title'] }}" loading="lazy">
                </div>

                <div class="aries-split__content reveal-right">
                    <p class="h-kicker">Publication mise en avant</p>
                    <h2 class="aries-split__title">{{ $featured['title'] }}</h2>
                    <div class="aries-split__text">
                        <p>{{ $featured['excerpt'] }}</p>
                        <p>
                            Catégorie : <strong>{{ $featured['category'] }}</strong><br>
                            Publication : <strong>{{ $featured['date'] }}</strong>
                        </p>
                    </div>
                    <a href="{{ route('contact') }}" class="h-btn h-btn--primary">
                        Discuter de cette analyse
                        <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                            <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                        </svg>
                    </a>
                </div>
            </div>
        @endif
    </div>
</section>

<section class="page-section page-section--light">
    <div class="h-container">
        <div class="page-publication-grid">
            @foreach($rest as $index => $publication)
                <article class="page-publication-card reveal reveal-delay-{{ ($index % 3) + 1 }}">
                    <div class="page-publication-card__media">
                        <img src="{{ asset('images/' . ($imageMap[$publication['slug']] ?? 'hero-bridge.jpg')) }}" alt="{{ $publication['title'] }}" loading="lazy">
                    </div>
                    <div class="page-publication-card__body">
                        <div class="page-publication-card__meta">
                            <span class="page-publication-card__tag">{{ $publication['category'] }}</span>
                            <span>{{ $publication['date'] }}</span>
                        </div>
                        <h3 class="page-publication-card__title">{{ $publication['title'] }}</h3>
                        <p class="page-publication-card__excerpt">{{ $publication['excerpt'] }}</p>
                        <a href="{{ route('contact') }}" class="page-publication-card__link">
                            Approfondir le sujet
                            <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                                <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="page-section page-section--warm">
    <div class="h-container">
        <div class="page-newsletter reveal">
            <div class="page-intro" style="margin-bottom: 0; max-width: 42rem;">
                <p class="h-kicker">Restez informé</p>
                <h2 class="page-title">Recevez nos analyses en avant-première</h2>
                <p class="page-text">
                    Un format simple pour suivre nos lectures de marché, nos signaux sectoriels et nos points de vigilance.
                </p>
            </div>

            <div class="page-newsletter__form">
                <input type="email" class="page-newsletter__input" placeholder="Votre adresse email">
                <button class="h-btn h-btn--dark">
                    S'abonner
                    <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                        <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection

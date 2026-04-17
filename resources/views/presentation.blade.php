@extends('layouts.app')

@section('title', 'Présentation — ARIES Investissements')
@section('description', 'ARIES Investissements, société de conseil financier et banque d\'affaires basée à Brazzaville. Notre histoire, notre mission, nos valeurs.')

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="hero-grid-pattern opacity-40"></div>
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10">
        <div class="reveal flex items-center gap-3 mb-4">
            <span class="section-label">Qui sommes-nous</span>
            <span class="gold-line"></span>
        </div>
        <h1 class="font-display text-white reveal reveal-delay-1" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500; line-height: 1.1;">
            Présentation
        </h1>
    </div>
</section>

{{-- Intro --}}
<section class="py-28 bg-[#FAFAF8]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20">
            <div class="lg:col-span-7">
                <div class="reveal flex items-center gap-3 mb-6">
                    <span class="section-label">Notre société</span>
                    <span class="gold-line"></span>
                </div>
                <h2 class="section-title mb-8 reveal reveal-delay-1">
                    Une banque d'affaires<br>au cœur de l'Afrique
                </h2>
                <div class="space-y-5 text-[#4A5568] leading-relaxed">
                    <p class="reveal reveal-delay-2">
                        ARIES Investissements est une société de conseil financier à vocation de banque d'affaires, fondée et basée en République du Congo. Nous accompagnons investisseurs et porteurs de projets dans leurs ambitions en Afrique, en apportant une expertise complète qui couvre l'ensemble du spectre du conseil financier.
                    </p>
                    <p class="reveal reveal-delay-3">
                        Notre positionnement unique repose sur la maîtrise profonde de l'environnement africain, la connaissance des acteurs institutionnels, privés et de développement opérant sur le continent, et la capacité à structurer des solutions financières adaptées aux réalités locales tout en répondant aux standards internationaux.
                    </p>
                    <p class="reveal reveal-delay-4">
                        De Brazzaville à Washington, notre ancrage géographique nous permet de tisser des ponts entre les investisseurs internationaux et les opportunités africaines, dans un dialogue permanent avec les acteurs locaux.
                    </p>
                </div>
            </div>
            <div class="lg:col-span-5">
                <div class="relative reveal-right">
                    <img
                        src="{{ asset('images/team-photo.jpg') }}"
                        alt="ARIES Investissements"
                        class="w-full object-cover"
                        style="height: 420px;"
                        loading="lazy"
                    >
                    <div class="absolute -bottom-4 -right-4 w-20 h-20 border-r-2 border-b-2 border-[#C8A55A] opacity-30"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Mission --}}
<section class="py-28 bg-[#060E1A] relative overflow-hidden">
    <div class="hero-grid-pattern opacity-25"></div>
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10">
        <div class="max-w-3xl">
            <div class="reveal flex items-center gap-3 mb-6">
                <span class="section-label">Notre mission</span>
                <span class="gold-line"></span>
            </div>
            <h2 class="section-title-light mb-8 reveal reveal-delay-1">
                Faire émerger de nouveaux<br>
                <em class="text-[#C8A55A]">champions africains</em>
            </h2>
            <p class="text-[rgba(255,255,255,0.65)] text-lg leading-relaxed mb-10 reveal reveal-delay-2" style="font-weight: 300;">
                Notre mission est de contribuer activement à la transformation économique de l'Afrique en accompagnant l'émergence de champions nationaux et régionaux. Nous croyons profondément dans le potentiel africain et dans la capacité du secteur privé à jouer un rôle moteur dans le développement du continent.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            @foreach([
                ['title' => 'Conseil stratégique', 'desc' => 'Définition de vision, stratégie d\'entrée sur les marchés, due diligence et advisory transaction.'],
                ['title' => 'Levée de fonds',      'desc' => 'Structuration et exécution de levées de dette et de fonds propres auprès d\'investisseurs qualifiés.'],
                ['title' => 'Intelligence éco.',   'desc' => 'Connaissance des marchés, des acteurs et de l\'environnement réglementaire pour décider en confiance.'],
            ] as $i => $item)
            <div class="reveal reveal-delay-{{ $i + 1 }} p-6 border border-white/10 hover:border-[#C8A55A] transition-colors duration-300">
                <h3 class="font-display text-white text-lg font-medium mb-3">{{ $item['title'] }}</h3>
                <p class="text-[#8A8F9A] text-sm leading-relaxed">{{ $item['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Valeurs --}}
<section class="py-28 bg-[#F6F4F0]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">
        <div class="text-center mb-16">
            <div class="reveal flex items-center justify-center gap-3 mb-4">
                <span class="gold-line" style="background: linear-gradient(90deg, transparent, #C8A55A)"></span>
                <span class="section-label">Nos valeurs</span>
                <span class="gold-line"></span>
            </div>
            <h2 class="section-title reveal reveal-delay-1">Les piliers de notre engagement</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['letter' => 'I', 'title' => 'Indépendance', 'desc' => 'Nous ne représentons que les intérêts de nos clients. Notre indépendance vis-à-vis des établissements financiers nous permet de garantir l\'objectivité de nos recommandations et la neutralité de nos conseils.'],
                ['letter' => 'P', 'title' => 'Professionnalisme', 'desc' => 'Chaque mission est menée avec le même niveau d\'exigence que les meilleures pratiques internationales, adapté aux réalités africaines. Nous nous engageons sur la qualité de notre travail et la confidentialité de vos informations.'],
                ['letter' => 'R', 'title' => 'Rigueur', 'desc' => 'L\'analyse rigoureuse est au cœur de notre méthodologie. Nous fondons nos recommandations sur des données factuelles, des analyses approfondies et une connaissance intime des marchés africains.'],
            ] as $i => $val)
            <div class="reveal reveal-delay-{{ $i + 1 }} text-center p-10 bg-white border border-[rgba(11,29,58,0.08)] hover:shadow-xl transition-shadow duration-400">
                <div class="w-16 h-16 border-2 border-[#C8A55A] flex items-center justify-center mx-auto mb-6">
                    <span class="font-display text-2xl font-medium text-[#C8A55A]">{{ $val['letter'] }}</span>
                </div>
                <h3 class="font-display text-[#0B1D3A] text-xl font-medium mb-4">{{ $val['title'] }}</h3>
                <p class="text-[#6B7280] text-sm leading-relaxed">{{ $val['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 bg-[#0B1D3A]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 text-center">
        <h2 class="section-title-light mb-6 reveal">Prêt à concrétiser votre projet ?</h2>
        <p class="text-[rgba(255,255,255,0.6)] mb-8 max-w-lg mx-auto reveal reveal-delay-1">Contactez nos experts pour une première discussion confidentielle.</p>
        <a href="{{ route('contact') }}" class="btn-primary reveal reveal-delay-2">
            Nous contacter
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</section>

@endsection

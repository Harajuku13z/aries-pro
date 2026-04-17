{{-- ─── ARIES Header ─── --}}
<header class="site-header">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">
        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 group" aria-label="ARIES Investissements — Accueil">
                {{-- SVG Logo Mark --}}
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0">
                    <polygon points="18,2 34,30 2,30" fill="none" stroke="#C8A55A" stroke-width="2"/>
                    <polygon points="18,8 30,27 6,27" fill="rgba(200,165,90,0.12)" stroke="none"/>
                    <line x1="18" y1="2" x2="18" y2="30" stroke="#C8A55A" stroke-width="0.75" opacity="0.5"/>
                </svg>
                <div class="flex flex-col">
                    <span class="text-white font-display text-lg font-medium tracking-wide leading-none group-hover:text-[#C8A55A] transition-colors duration-300">ARIES</span>
                    <span class="text-[#C8A55A] text-[0.6rem] font-sans font-medium tracking-[0.2em] uppercase leading-none mt-0.5">Investissements</span>
                </div>
            </a>

            {{-- Desktop Navigation --}}
            <nav class="header-nav hidden lg:flex items-center gap-8" aria-label="Navigation principale">
                <a href="{{ route('home') }}" @class(['active' => request()->routeIs('home')])>Accueil</a>
                <a href="{{ route('presentation') }}" @class(['active' => request()->routeIs('presentation')])>Présentation</a>
                <a href="{{ route('expertise') }}" @class(['active' => request()->routeIs('expertise')])>Expertise</a>
                <a href="{{ route('sectors') }}" @class(['active' => request()->routeIs('sectors')])>Secteurs</a>
                <a href="{{ route('team') }}" @class(['active' => request()->routeIs('team')])>Équipe</a>
                <a href="{{ route('publications') }}" @class(['active' => request()->routeIs('publications')])>Publications</a>
            </nav>

            {{-- CTA + Hamburger --}}
            <div class="flex items-center gap-4">
                <a href="{{ route('contact') }}" class="hidden lg:inline-flex btn-outline text-xs py-2.5 px-5">
                    Nous contacter
                </a>
                <button id="menu-toggle" class="lg:hidden flex flex-col gap-1.5 p-2" aria-label="Ouvrir le menu">
                    <span class="block w-6 h-px bg-white transition-all duration-300"></span>
                    <span class="block w-4 h-px bg-[#C8A55A] transition-all duration-300"></span>
                    <span class="block w-6 h-px bg-white transition-all duration-300"></span>
                </button>
            </div>

        </div>
    </div>
</header>

{{-- ─── Mobile Menu ─── --}}
<div id="mobile-menu" class="mobile-menu" aria-hidden="true">
    <button id="menu-close" class="absolute top-6 right-6 text-white p-2" aria-label="Fermer le menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
        </svg>
    </button>

    {{-- Gold separator top --}}
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#C8A55A] to-transparent opacity-30"></div>

    <nav class="flex flex-col items-center gap-8 text-center">
        <a href="{{ route('home') }}" class="font-display text-3xl text-white hover:text-[#C8A55A] transition-colors duration-300">Accueil</a>
        <a href="{{ route('presentation') }}" class="font-display text-3xl text-white hover:text-[#C8A55A] transition-colors duration-300">Présentation</a>
        <a href="{{ route('expertise') }}" class="font-display text-3xl text-white hover:text-[#C8A55A] transition-colors duration-300">Expertise</a>
        <a href="{{ route('sectors') }}" class="font-display text-3xl text-white hover:text-[#C8A55A] transition-colors duration-300">Secteurs</a>
        <a href="{{ route('team') }}" class="font-display text-3xl text-white hover:text-[#C8A55A] transition-colors duration-300">Équipe</a>
        <a href="{{ route('publications') }}" class="font-display text-3xl text-white hover:text-[#C8A55A] transition-colors duration-300">Publications</a>
        <a href="{{ route('contact') }}" class="btn-primary mt-4 text-sm">Nous contacter</a>
    </nav>

    {{-- Coordinates --}}
    <div class="absolute bottom-8 text-center">
        <p class="text-[#8A8F9A] text-xs tracking-widest uppercase mb-2">Brazzaville · Washington</p>
        <p class="text-[#C8A55A] text-xs">aries@aries-investissements.com</p>
    </div>
</div>

{{-- ─── ARIES Header ─── --}}
<header class="site-header">
    <div class="site-header__inner">
        <div class="header-shell">
            <a href="{{ route('home') }}" class="brand-link" aria-label="ARIES Investissements — Accueil">
                <img
                    src="{{ asset('images/logo-aries.png') }}"
                    alt="ARIES Investissements"
                    class="brand-logo"
                    loading="eager"
                >
            </a>

            <nav class="header-nav hidden xl:flex items-center gap-7" aria-label="Navigation principale">
                <a href="{{ route('home') }}" @class(['active' => request()->routeIs('home')])>Accueil</a>
                <a href="{{ route('presentation') }}" @class(['active' => request()->routeIs('presentation')])>Présentation</a>
                <a href="{{ route('expertise') }}" @class(['active' => request()->routeIs('expertise')])>Expertise</a>
                <a href="{{ route('sectors') }}" @class(['active' => request()->routeIs('sectors')])>Secteurs</a>
                <a href="{{ route('team') }}" @class(['active' => request()->routeIs('team')])>Équipe</a>
                <a href="{{ route('publications') }}" @class(['active' => request()->routeIs('publications')])>Publications</a>
            </nav>

            <div class="header-actions">
                <a href="{{ route('contact') }}" class="hidden lg:inline-flex header-cta header-cta--ghost">
                    Nous contacter
                </a>

                <button id="menu-toggle" class="header-toggle xl:hidden" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mobile-menu">
                    <span class="header-toggle__line"></span>
                    <span class="header-toggle__line header-toggle__line--short"></span>
                    <span class="header-toggle__line"></span>
                </button>
            </div>
        </div>
    </div>
</header>

{{-- ─── Mobile Menu ─── --}}
<div id="mobile-menu" class="mobile-menu" aria-hidden="true">
    <div class="mobile-menu__panel">
        <div class="mobile-menu__top">
            <img
                src="{{ asset('images/logo-aries.png') }}"
                alt="ARIES Investissements"
                class="brand-logo brand-logo--inverse mobile-menu__logo"
            >

            <button id="menu-close" class="mobile-menu__close" aria-label="Fermer le menu">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <line x1="18" y1="6" x2="6" y2="18"/>
                    <line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>

        <nav class="mobile-menu__nav">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('presentation') }}">Présentation</a>
            <a href="{{ route('expertise') }}">Expertise</a>
            <a href="{{ route('sectors') }}">Secteurs</a>
            <a href="{{ route('team') }}">Équipe</a>
            <a href="{{ route('publications') }}">Publications</a>
        </nav>

        <div class="mobile-menu__meta">
            <p class="mobile-menu__locations">Brazzaville · Washington</p>
            <a href="{{ route('contact') }}" class="header-cta header-cta--solid">Nous contacter</a>
            <a href="mailto:aries@aries-investissements.com" class="mobile-menu__mail">aries@aries-investissements.com</a>
        </div>
    </div>
</div>

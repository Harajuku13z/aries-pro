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

            <nav class="header-nav hidden lg:flex items-center gap-7" aria-label="Navigation principale">
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
            </div>
        </div>
    </div>
</header>

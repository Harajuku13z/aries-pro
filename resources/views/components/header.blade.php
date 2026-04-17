{{-- ─── ARIES Header ─── --}}
@php
    $navigationItems = [
        ['label' => 'Accueil', 'route' => 'home'],
        ['label' => 'Présentation', 'route' => 'presentation'],
        ['label' => 'Expertise', 'route' => 'expertise'],
        ['label' => 'Secteurs', 'route' => 'sectors'],
        ['label' => 'Équipe', 'route' => 'team'],
        ['label' => 'Publications', 'route' => 'publications'],
    ];
@endphp

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

            <nav class="header-nav hidden lg:flex items-center" aria-label="Navigation principale">
                @foreach ($navigationItems as $item)
                    <a
                        href="{{ route($item['route']) }}"
                        @class(['active' => request()->routeIs($item['route'])])
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="header-actions">
                <a href="{{ route('contact') }}" class="hidden lg:inline-flex header-cta header-cta--ghost">
                    Contact
                </a>

                <button
                    type="button"
                    class="header-mobile-toggle lg:hidden"
                    aria-label="Ouvrir le menu"
                    aria-expanded="false"
                    aria-controls="mobile-navigation"
                    data-mobile-menu-toggle
                >
                    <span class="header-mobile-toggle__bars" aria-hidden="true">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>
        </div>

        <div
            id="mobile-navigation"
            class="mobile-nav lg:hidden"
            hidden
            data-mobile-menu
        >
            <nav class="mobile-nav__panel" aria-label="Navigation mobile">
                <div class="mobile-nav__links">
                    @foreach ($navigationItems as $item)
                        <a
                            href="{{ route($item['route']) }}"
                            @class([
                                'mobile-nav__link',
                                'active' => request()->routeIs($item['route']),
                            ])
                            data-mobile-menu-link
                        >
                            <span>{{ $item['label'] }}</span>
                        </a>
                    @endforeach
                </div>

                <div class="mobile-nav__footer">
                    <a href="{{ route('contact') }}" class="mobile-nav__cta" data-mobile-menu-link>
                        Contact
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>

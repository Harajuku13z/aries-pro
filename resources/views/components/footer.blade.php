{{-- ─── ARIES Footer ─── --}}
<footer class="site-footer">
    <div class="h-px bg-gradient-to-r from-transparent via-[#C8A55A] to-transparent opacity-20"></div>

    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 pt-16 pb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-10">
            <div class="lg:col-span-2 max-w-xl">
                <a href="{{ route('home') }}" class="brand-link brand-link--footer mb-6" aria-label="ARIES Investissements — Accueil">
                    <img
                        src="{{ asset('images/logo-aries.png') }}"
                        alt="ARIES Investissements"
                        class="brand-logo brand-logo--inverse brand-logo--footer"
                    >
                </a>
                <p class="text-[rgba(255,255,255,0.72)] text-sm leading-relaxed mb-6 max-w-lg">
                    Conseil financier indépendant, structuration de projets et accompagnement stratégique pour les investisseurs, institutions et dirigeants actifs en Afrique.
                </p>
                <span class="gold-line"></span>
                <div class="flex flex-wrap gap-3 mt-5">
                    <span class="footer-pill">Brazzaville</span>
                    <span class="footer-pill">Washington</span>
                    <span class="footer-pill">Conseil stratégique</span>
                    <span class="footer-pill">Levée de fonds</span>
                </div>
            </div>

            <div>
                <h4 class="text-white text-xs font-semibold tracking-[0.18em] uppercase mb-6">Navigation</h4>
                <ul class="space-y-3">
                    @foreach([
                        ['route' => 'home',         'label' => 'Accueil'],
                        ['route' => 'presentation', 'label' => 'Présentation'],
                        ['route' => 'expertise',    'label' => 'Expertise'],
                        ['route' => 'sectors',      'label' => 'Secteurs d\'activité'],
                        ['route' => 'team',         'label' => 'Équipe dirigeante'],
                        ['route' => 'publications', 'label' => 'Publications'],
                        ['route' => 'contact',      'label' => 'Contact'],
                    ] as $item)
                    <li>
                        <a href="{{ route($item['route']) }}"
                           class="text-[rgba(255,255,255,0.62)] text-sm hover:text-white transition-colors duration-300 flex items-center gap-2 group">
                            <span class="w-3 h-px bg-[#C8A55A] opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex-shrink-0"></span>
                            {{ $item['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h4 class="text-white text-xs font-semibold tracking-[0.18em] uppercase mb-6">Contact</h4>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <div class="w-5 h-5 mt-0.5 flex-shrink-0 text-[#C8A55A]">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M10 2C6.686 2 4 4.686 4 8c0 4.5 6 10 6 10s6-5.5 6-10c0-3.314-2.686-6-6-6z"/>
                                <circle cx="10" cy="8" r="2"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[rgba(255,255,255,0.62)] text-sm leading-snug">9ème niveau, Immeuble ARC<br>Brazzaville, République du Congo</p>
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 flex-shrink-0 text-[#C8A55A]">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 4h14v12H3z"/><path d="M3 4l7 7 7-7"/>
                            </svg>
                        </div>
                        <a href="mailto:aries@aries-investissements.com" class="text-[rgba(255,255,255,0.62)] text-sm hover:text-white transition-colors duration-300">
                            aries@aries-investissements.com
                        </a>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 flex-shrink-0 text-[#C8A55A]">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 3h3l1.5 4L6 8.5c1.5 2.5 4 5 6.5 6.5L14 13l4 1.5V18c0 0-1 1-3 1C7 19 1 13 1 6 1 4 2 3 3 3z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[rgba(255,255,255,0.42)] text-xs mb-0.5">Brazzaville</p>
                            <a href="tel:+242069799885" class="text-[rgba(255,255,255,0.62)] text-sm hover:text-white transition-colors duration-300">+242 06 97 99 88 5</a>
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 flex-shrink-0 text-[#C8A55A]">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 3h3l1.5 4L6 8.5c1.5 2.5 4 5 6.5 6.5L14 13l4 1.5V18c0 0-1 1-3 1C7 19 1 13 1 6 1 4 2 3 3 3z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[rgba(255,255,255,0.42)] text-xs mb-0.5">Washington</p>
                            <a href="tel:+16463891437" class="text-[rgba(255,255,255,0.62)] text-sm hover:text-white transition-colors duration-300">+1 646 389 14 37</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="border-t border-white/5">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-[rgba(255,255,255,0.42)] text-xs">
                &copy; {{ date('Y') }} ARIES Investissements. Tous droits réservés.
            </p>
            <p class="text-[rgba(255,255,255,0.42)] text-xs">
                Conseil financier & accompagnement stratégique en Afrique
            </p>
        </div>
    </div>
</footer>

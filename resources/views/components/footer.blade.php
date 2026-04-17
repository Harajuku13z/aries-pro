{{-- ─── ARIES Footer ─── --}}
<footer class="site-footer">

    {{-- Top gradient line --}}
    <div class="h-px bg-gradient-to-r from-transparent via-[#C8A55A] to-transparent opacity-20"></div>

    {{-- Main Footer --}}
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 pt-16 pb-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">

            {{-- Brand Column --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center gap-3 mb-6 group">
                    <svg width="32" height="32" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="18,2 34,30 2,30" fill="none" stroke="#C8A55A" stroke-width="2"/>
                        <polygon points="18,8 30,27 6,27" fill="rgba(200,165,90,0.1)" stroke="none"/>
                    </svg>
                    <div>
                        <span class="text-white font-display text-base font-medium tracking-wide leading-none block">ARIES</span>
                        <span class="text-[#C8A55A] text-[0.6rem] font-sans tracking-[0.2em] uppercase">Investissements</span>
                    </div>
                </a>
                <p class="text-[#8A8F9A] text-sm leading-relaxed mb-6">
                    Conseil financier et accompagnement stratégique des projets d'investissement en Afrique, depuis Brazzaville.
                </p>
                {{-- Tagline --}}
                <span class="gold-line"></span>
                <p class="text-[#C8A55A] text-xs tracking-[0.15em] uppercase mt-3 font-medium italic font-display">
                    Faire émerger de nouveaux champions
                </p>
            </div>

            {{-- Navigation --}}
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
                           class="text-[#8A8F9A] text-sm hover:text-[#C8A55A] transition-colors duration-300 flex items-center gap-2 group">
                            <span class="w-3 h-px bg-[#C8A55A] opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex-shrink-0"></span>
                            {{ $item['label'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h4 class="text-white text-xs font-semibold tracking-[0.18em] uppercase mb-6">Expertises</h4>
                <ul class="space-y-3">
                    @foreach([
                        'Conseil stratégique & financier',
                        'Levée de fonds & dette',
                        'Intelligence économique',
                        'Structuration de projets',
                        'Conseil en investissement',
                    ] as $service)
                    <li class="text-[#8A8F9A] text-sm flex items-start gap-2">
                        <span class="w-1 h-1 rounded-full bg-[#C8A55A] mt-2 flex-shrink-0"></span>
                        {{ $service }}
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="text-white text-xs font-semibold tracking-[0.18em] uppercase mb-6">Contact</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="w-5 h-5 mt-0.5 flex-shrink-0 text-[#C8A55A]">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M10 2C6.686 2 4 4.686 4 8c0 4.5 6 10 6 10s6-5.5 6-10c0-3.314-2.686-6-6-6z"/>
                                <circle cx="10" cy="8" r="2"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#8A8F9A] text-sm leading-snug">9ème niveau, Immeuble ARC<br>Brazzaville, République du Congo</p>
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 flex-shrink-0 text-[#C8A55A]">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 4h14v12H3z"/><path d="M3 4l7 7 7-7"/>
                            </svg>
                        </div>
                        <a href="mailto:aries@aries-investissements.com" class="text-[#8A8F9A] text-sm hover:text-[#C8A55A] transition-colors duration-300">
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
                            <p class="text-[#8A8F9A] text-xs mb-0.5">Brazzaville</p>
                            <a href="tel:+242069799885" class="text-[#8A8F9A] text-sm hover:text-[#C8A55A] transition-colors duration-300">+242 06 97 99 88 5</a>
                        </div>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-5 h-5 flex-shrink-0 text-[#C8A55A]">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 3h3l1.5 4L6 8.5c1.5 2.5 4 5 6.5 6.5L14 13l4 1.5V18c0 0-1 1-3 1C7 19 1 13 1 6 1 4 2 3 3 3z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[#8A8F9A] text-xs mb-0.5">Washington</p>
                            <a href="tel:+16463891437" class="text-[#8A8F9A] text-sm hover:text-[#C8A55A] transition-colors duration-300">+1 646 389 14 37</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="border-t border-white/5">
        <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 py-5 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-[#8A8F9A] text-xs">
                &copy; {{ date('Y') }} ARIES Investissements. Tous droits réservés.
            </p>
            <p class="text-[#8A8F9A] text-xs">
                Brazzaville · Republic of Congo
            </p>
        </div>
    </div>

</footer>

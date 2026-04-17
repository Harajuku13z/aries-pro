{{-- ─── ARIES Footer ─── --}}
@php
    $footerColumns = [
        [
            'title' => 'Offre',
            'links' => [
                ['label' => 'Présentation', 'href' => route('presentation')],
                ['label' => 'Expertise', 'href' => route('expertise')],
                ['label' => 'Secteurs', 'href' => route('sectors')],
                ['label' => 'Prendre rendez-vous', 'href' => route('contact')],
            ],
        ],
        [
            'title' => 'ARIES',
            'links' => [
                ['label' => 'Notre approche', 'href' => route('presentation')],
                ['label' => 'Équipe', 'href' => route('team')],
                ['label' => 'Publications', 'href' => route('publications')],
                ['label' => 'Contact', 'href' => route('contact')],
            ],
        ],
        [
            'title' => 'Insights',
            'links' => [
                ['label' => 'Analyses', 'href' => route('publications')],
                ['label' => 'Secteurs suivis', 'href' => route('sectors')],
                ['label' => 'Expertise', 'href' => route('expertise')],
                ['label' => 'Actualités ARIES', 'href' => route('publications')],
            ],
        ],
        [
            'title' => 'Engage',
            'links' => [
                ['label' => 'Nous contacter', 'href' => route('contact')],
                ['label' => 'aries@aries-investissements.com', 'href' => 'mailto:aries@aries-investissements.com'],
                ['label' => 'Brazzaville', 'href' => 'tel:+242069799885'],
                ['label' => 'Washington', 'href' => 'tel:+16463891437'],
            ],
        ],
    ];
@endphp

<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-grid reveal">
            <div class="footer-cta-col">
                <h2 class="footer-cta-col__title">Vous voulez en savoir plus&nbsp;?</h2>
                <p class="footer-cta-col__text">
                    Parlons de vos projets, de votre structuration et de vos ambitions
                    d'investissement en Afrique centrale.
                </p>

                <a href="{{ route('contact') }}" class="footer-action">
                    <span class="footer-action__label">Nous contacter</span>
                    <span class="footer-action__icon" aria-hidden="true">
                        <svg viewBox="0 0 12 13" fill="none">
                            <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                        </svg>
                    </span>
                </a>

                <div class="footer-socials" aria-label="Contacts rapides">
                    <a href="mailto:aries@aries-investissements.com" class="footer-social" aria-label="Envoyer un email">
                        <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M3 5.5h14v9H3z" stroke="currentColor" stroke-width="1.8"/>
                            <path d="M3.8 6.2L10 11l6.2-4.8" stroke="currentColor" stroke-width="1.8"/>
                        </svg>
                    </a>

                    <a href="tel:+242069799885" class="footer-social" aria-label="Appeler Brazzaville">
                        <svg viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M4.4 3.8h2.9l1.4 3.5-1.5 1.6c1.2 2.2 3 4 5.2 5.2l1.6-1.5 3.5 1.4V16c0 .7-.6 1.2-1.3 1.2C9.7 17.2 2.8 10.3 2.8 4.9c0-.7.5-1.1 1.2-1.1Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>

            @foreach ($footerColumns as $column)
                <div class="footer-links-group">
                    <h3>{{ $column['title'] }}</h3>

                    <ul>
                        @foreach ($column['links'] as $link)
                            <li>
                                <a href="{{ $link['href'] }}">{{ $link['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom__left">
                <span class="footer-locale">
                    <svg viewBox="0 0 16 16" fill="none" aria-hidden="true">
                        <circle cx="8" cy="8" r="6.25" stroke="currentColor" stroke-width="1.3"/>
                        <path d="M1.9 8h12.2M8 1.75c1.8 1.65 2.8 3.75 2.8 6.25S9.8 12.6 8 14.25M8 1.75C6.2 3.4 5.2 5.5 5.2 8S6.2 12.6 8 14.25" stroke="currentColor" stroke-width="1.3"/>
                    </svg>
                    FR
                </span>

                <p>&copy; {{ date('Y') }} ARIES Investissements | Tous droits réservés.</p>
            </div>

            <div class="footer-bottom__meta">
                <a href="mailto:aries@aries-investissements.com">Email</a>
                <a href="tel:+242069799885">Brazzaville</a>
                <a href="tel:+16463891437">Washington</a>
            </div>
        </div>
    </div>
</footer>

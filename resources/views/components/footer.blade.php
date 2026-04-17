{{-- ─── ARIES Footer ─── --}}
<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-top reveal">
            <div class="footer-top__copy">
                <span class="footer-eyebrow">Parlons de votre projet</span>
                <h2 class="footer-top__title">Des décisions structurées pour des ambitions qui veulent durer.</h2>
                <p class="footer-top__text">
                    ARIES accompagne investisseurs, institutions et dirigeants avec une approche rigoureuse,
                    confidentielle et orientée exécution.
                </p>
            </div>

            <a href="{{ route('contact') }}" class="h-btn h-btn--primary footer-top__cta">
                Nous contacter
                <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                    <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                </svg>
            </a>
        </div>

        <div class="footer-grid">
            <div class="footer-brand-card">
                <a href="{{ route('home') }}" class="brand-link brand-link--footer" aria-label="ARIES Investissements — Accueil">
                    <img
                        src="{{ asset('images/logo-aries.png') }}"
                        alt="ARIES Investissements"
                        class="brand-logo brand-logo--inverse brand-logo--footer"
                    >
                </a>

                <p class="footer-brand-card__text">
                    Conseil financier indépendant, structuration de projets et accompagnement stratégique
                    pour les investisseurs, institutions et dirigeants actifs en Afrique.
                </p>

                <div class="footer-brand-card__tags">
                    <span class="footer-pill">Brazzaville</span>
                    <span class="footer-pill">Washington</span>
                    <span class="footer-pill">Conseil stratégique</span>
                    <span class="footer-pill">Levée de fonds</span>
                </div>
            </div>

            <div class="footer-col">
                <h4>Navigation</h4>
                <ul>
                    @foreach([
                        ['route' => 'home', 'label' => 'Accueil'],
                        ['route' => 'presentation', 'label' => 'Présentation'],
                        ['route' => 'expertise', 'label' => 'Expertise'],
                        ['route' => 'sectors', 'label' => 'Secteurs'],
                    ] as $item)
                        <li>
                            <a href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="footer-col">
                <h4>Ressources</h4>
                <ul>
                    @foreach([
                        ['route' => 'team', 'label' => 'Équipe dirigeante'],
                        ['route' => 'publications', 'label' => 'Publications'],
                        ['route' => 'contact', 'label' => 'Contact'],
                    ] as $item)
                        <li>
                            <a href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="footer-contact-card">
                <h4>Contact</h4>

                <div class="footer-contact-card__list">
                    <div class="footer-contact-item">
                        <span class="footer-contact-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M10 2C6.686 2 4 4.686 4 8c0 4.5 6 10 6 10s6-5.5 6-10c0-3.314-2.686-6-6-6z"/>
                                <circle cx="10" cy="8" r="2"/>
                            </svg>
                        </span>
                        <div>
                            <p class="footer-contact-item__label">Bureau principal</p>
                            <p class="footer-contact-item__value">9ème niveau, Immeuble ARC<br>Brazzaville, République du Congo</p>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <span class="footer-contact-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 4h14v12H3z"/>
                                <path d="M3 4l7 7 7-7"/>
                            </svg>
                        </span>
                        <div>
                            <p class="footer-contact-item__label">Email</p>
                            <a href="mailto:aries@aries-investissements.com" class="footer-contact-item__link">aries@aries-investissements.com</a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <span class="footer-contact-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 3h3l1.5 4L6 8.5c1.5 2.5 4 5 6.5 6.5L14 13l4 1.5V18c0 0-1 1-3 1C7 19 1 13 1 6 1 4 2 3 3 3z"/>
                            </svg>
                        </span>
                        <div>
                            <p class="footer-contact-item__label">Brazzaville</p>
                            <a href="tel:+242069799885" class="footer-contact-item__link">+242 06 97 99 88 5</a>
                        </div>
                    </div>

                    <div class="footer-contact-item">
                        <span class="footer-contact-item__icon" aria-hidden="true">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M3 3h3l1.5 4L6 8.5c1.5 2.5 4 5 6.5 6.5L14 13l4 1.5V18c0 0-1 1-3 1C7 19 1 13 1 6 1 4 2 3 3 3z"/>
                            </svg>
                        </span>
                        <div>
                            <p class="footer-contact-item__label">Washington</p>
                            <a href="tel:+16463891437" class="footer-contact-item__link">+1 646 389 14 37</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="footer-contact-card__cta">
                    Prendre rendez-vous
                    <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                        <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} ARIES Investissements. Tous droits réservés.</p>

            <div class="footer-bottom__meta">
                <span>Afrique centrale</span>
                <span>Structuration</span>
                <span>Accompagnement stratégique</span>
            </div>
        </div>
    </div>
</footer>

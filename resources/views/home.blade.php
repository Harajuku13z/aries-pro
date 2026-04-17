@extends('layouts.app')

@section('title', 'ARIES Investissements — Investir en Afrique avec vision et rigueur')
@section('description', 'ARIES Investissements accompagne investisseurs, institutions et porteurs de projets en Afrique avec une approche stratégique, financière et opérationnelle.')

@section('content')

{{-- ═══════════════════════════════════════════
     1. HERO
═══════════════════════════════════════════ --}}
<section class="h-hero" id="accueil" aria-label="Accueil">
    <div class="h-hero__media">
        <img src="{{ asset('images/hero-main.jpg') }}" alt="Afrique — investissement et développement" loading="eager">
        <div class="h-hero__overlay"></div>
    </div>

    <div class="h-hero__content">
        <div class="h-hero__inner">
            <p class="h-kicker reveal">ARIES Investissements</p>
            <h1 class="h-hero__title reveal reveal-delay-1">
                Investir en Afrique<br>
                <em>avec vision et rigueur</em>
            </h1>
            <p class="h-hero__sub reveal reveal-delay-2">
                Partenaire stratégique pour structurer, financer et sécuriser<br class="hidden lg:block">
                vos projets d'investissement en Afrique centrale.
            </p>
            <div class="h-hero__ctas reveal reveal-delay-3">
                <a href="{{ route('presentation') }}" class="h-btn h-btn--primary">
                    Découvrir ARIES
                    <svg viewBox="0 0 12 13" fill="none"><path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/></svg>
                </a>
                <a href="{{ route('contact') }}" class="h-btn h-btn--ghost">
                    Nous contacter
                </a>
            </div>
        </div>

        <div class="h-hero__scroll-hint" aria-hidden="true">
            <span></span>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     2. À PROPOS (aperçu)
═══════════════════════════════════════════ --}}
<section class="h-section h-section--light" id="a-propos" aria-label="À propos d'ARIES">
    <div class="h-container">
        <div class="h-about">
            <div class="h-about__visual reveal-left">
                <div class="h-about__frame">
                    <img src="{{ asset('images/about-africa.jpg') }}" alt="Skyline africain — Brazzaville" loading="lazy">
                </div>
                <div class="h-about__badge">
                    <span class="h-about__badge-year">2015</span>
                    <span class="h-about__badge-label">Fondée à<br>Brazzaville</span>
                </div>
            </div>

            <div class="h-about__content">
                <p class="h-kicker reveal">À propos</p>
                <h2 class="h-display reveal reveal-delay-1">
                    Un partenaire au cœur<br>de l'économie africaine
                </h2>
                <div class="h-prose reveal reveal-delay-2">
                    <p>
                        ARIES Investissements accompagne les acteurs économiques dans la conception et la réussite de projets à fort impact en Afrique.
                    </p>
                    <p>
                        Notre approche repose sur une parfaite connaissance des marchés, une expertise financière pointue et un réseau international solide.
                    </p>
                </div>
                <div class="reveal reveal-delay-3">
                    <a href="{{ route('presentation') }}" class="h-btn h-btn--primary">
                        En savoir plus
                        <svg viewBox="0 0 12 13" fill="none"><path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     3. MISSION + VALEURS
═══════════════════════════════════════════ --}}
<section class="h-section h-section--dark" id="mission" aria-label="Mission et valeurs">
    <div class="h-container">
        <div class="h-mission">
            <div class="h-mission__left reveal-left">
                <p class="h-kicker h-kicker--gold">Notre mission</p>
                <h2 class="h-display h-display--light">
                    Faire émerger de nouveaux<br>champions africains
                </h2>
                <p class="h-mission__text">
                    Nous accompagnons chaque projet avec exigence, de la conception à l'exécution, en mobilisant les meilleures ressources humaines et financières.
                </p>
            </div>

            <div class="h-mission__values reveal-right">
                <p class="h-kicker h-kicker--gold">Nos valeurs</p>
                <div class="h-values">
                    <div class="h-value">
                        <span class="h-value__number">01</span>
                        <div>
                            <strong>Indépendance</strong>
                            <p>Un conseil libre de tout conflit d'intérêt, aligné sur vos objectifs.</p>
                        </div>
                    </div>
                    <div class="h-value">
                        <span class="h-value__number">02</span>
                        <div>
                            <strong>Rigueur</strong>
                            <p>Des analyses approfondies et des recommandations documentées.</p>
                        </div>
                    </div>
                    <div class="h-value">
                        <span class="h-value__number">03</span>
                        <div>
                            <strong>Professionnalisme</strong>
                            <p>Des standards internationaux appliqués aux réalités africaines.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     4. CHIFFRES CLÉS
═══════════════════════════════════════════ --}}
<section class="h-section h-section--gold" id="chiffres" aria-label="Chiffres clés">
    <div class="h-container">
        <div class="h-stats">
            <div class="h-stat reveal">
                <span class="h-stat__number"><span data-count="100" data-suffix="Md+">0</span></span>
                <span class="h-stat__label">FCFA analysés</span>
            </div>
            <div class="h-stat reveal reveal-delay-1">
                <span class="h-stat__number"><span data-count="12" data-suffix="+">0</span></span>
                <span class="h-stat__label">Pays couverts</span>
            </div>
            <div class="h-stat reveal reveal-delay-2">
                <span class="h-stat__number"><span data-count="50" data-suffix="+">0</span></span>
                <span class="h-stat__label">Experts mobilisés</span>
            </div>
            <div class="h-stat reveal reveal-delay-3">
                <span class="h-stat__number"><span data-count="4" data-suffix="">0</span></span>
                <span class="h-stat__label">Secteurs d'intervention</span>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     5. SECTEURS
═══════════════════════════════════════════ --}}
<section class="h-section h-section--light" id="secteurs" aria-label="Secteurs d'intervention">
    <div class="h-container">
        <div class="h-section-head h-section-head--center reveal">
            <p class="h-kicker">Nos secteurs</p>
            <h2 class="h-display">Là où nous créons de la valeur</h2>
        </div>

        <div class="h-sectors">
            @php
            $sectors = [
                ['title' => 'Infrastructures', 'desc' => 'Transport, énergie, télécoms et logistique — des montages robustes pour des projets structurants.', 'image' => 'sector-infra.jpg', 'href' => route('sectors')],
                ['title' => 'Immobilier', 'desc' => 'Actifs stratégiques résidentiels, commerciaux et hôteliers dans les marchés à fort potentiel.', 'image' => 'sector-immo.jpg', 'href' => route('sectors')],
                ['title' => 'Agrobusiness', 'desc' => "Chaînes de valeur, transformation agricole et projets bancables à impact durable.", 'image' => 'sector-agro.jpg', 'href' => route('sectors')],
                ['title' => 'Technologie', 'desc' => 'Fintech, digital et innovation : accompagnement des startups à fort potentiel de croissance.', 'image' => 'sector-tech.jpg', 'href' => route('sectors')],
            ];
            @endphp

            @foreach($sectors as $i => $s)
            <a href="{{ $s['href'] }}" class="h-sector-card reveal reveal-delay-{{ $i + 1 }}">
                <div class="h-sector-card__media">
                    <img src="{{ asset('images/' . $s['image']) }}" alt="{{ $s['title'] }}" loading="lazy">
                    <div class="h-sector-card__overlay"></div>
                </div>
                <div class="h-sector-card__body">
                    <h3 class="h-sector-card__title">{{ $s['title'] }}</h3>
                    <p class="h-sector-card__desc">{{ $s['desc'] }}</p>
                    <span class="h-sector-card__cta">Explorer →</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     6. EXPERTISES
═══════════════════════════════════════════ --}}
<section class="h-section h-section--dark" id="expertises" aria-label="Nos expertises">
    <div class="h-container">
        <div class="h-section-head reveal">
            <p class="h-kicker h-kicker--gold">Expertises</p>
            <h2 class="h-display h-display--light">Ce que nous faisons,<br>mieux que quiconque</h2>
        </div>

        <div class="h-expertises">
            @php
            $expertises = [
                ['num' => '01', 'title' => 'Conseil stratégique', 'desc' => "Analyse de marché, positionnement concurrentiel, feuille de route opérationnelle. Nous traduisons votre ambition en plan d'action crédible."],
                ['num' => '02', 'title' => 'Levée de fonds', 'desc' => 'Structuration des dossiers d'investissement, mise en relation avec investisseurs institutionnels et privés, négociation des termes.'],
                ['num' => '03', 'title' => 'Intelligence économique', 'desc' => 'Veille stratégique, analyse des risques, cartographie des acteurs et opportunités sur les marchés africains.'],
                ['num' => '04', 'title' => 'Structuration & investissement', 'desc' => 'Montage financier, optimisation fiscale, gestion des parties prenantes et sécurisation des investissements.'],
            ];
            @endphp

            @foreach($expertises as $i => $e)
            <div class="h-expertise reveal reveal-delay-{{ $i + 1 }}">
                <span class="h-expertise__num">{{ $e['num'] }}</span>
                <div class="h-expertise__content">
                    <h3>{{ $e['title'] }}</h3>
                    <p>{{ $e['desc'] }}</p>
                </div>
                <a href="{{ route('expertise') }}" class="h-expertise__link" aria-label="En savoir plus sur {{ $e['title'] }}">→</a>
            </div>
            @endforeach
        </div>

        <div class="h-expertises__cta reveal">
            <a href="{{ route('expertise') }}" class="h-btn h-btn--outline-gold">
                Voir toutes nos expertises
                <svg viewBox="0 0 12 13" fill="none"><path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     7. POURQUOI ARIES
═══════════════════════════════════════════ --}}
<section class="h-section h-section--light" id="approche" aria-label="Pourquoi choisir ARIES">
    <div class="h-container">
        <div class="h-why">
            <div class="h-why__content">
                <p class="h-kicker reveal">Pourquoi ARIES ?</p>
                <h2 class="h-display reveal reveal-delay-1">
                    Un avantage terrain que<br>peu peuvent offrir
                </h2>
                <p class="h-prose reveal reveal-delay-2">
                    En Afrique centrale, le succès d'un investissement tient autant à la qualité du réseau qu'à celle du dossier. ARIES combine les deux.
                </p>

                <div class="h-pillars reveal reveal-delay-3">
                    @php
                    $pillars = [
                        ['icon' => '◆', 'title' => 'Vision long terme', 'desc' => 'Des stratégies pensées pour durer, pas pour briller le temps d'un pitch.'],
                        ['icon' => '◆', 'title' => 'Expertise locale + internationale', 'desc' => 'Connaissance fine du terrain africain, standards financiers internationaux.'],
                        ['icon' => '◆', 'title' => 'Accompagnement sur mesure', 'desc' => 'Chaque dossier est traité avec une attention et une personnalisation totale.'],
                        ['icon' => '◆', 'title' => "Réseau d'influence", 'desc' => 'Accès aux décideurs, investisseurs et institutions qui comptent.'],
                    ];
                    @endphp

                    @foreach($pillars as $p)
                    <div class="h-pillar">
                        <span class="h-pillar__icon" aria-hidden="true">{{ $p['icon'] }}</span>
                        <div>
                            <strong>{{ $p['title'] }}</strong>
                            <p>{{ $p['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="h-why__visual reveal-right">
                <img src="{{ asset('images/hero-bridge.jpg') }}" alt="Pont représentant la connexion stratégique" loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     8. PARTENAIRES / RÉFÉRENCES
═══════════════════════════════════════════ --}}
<section class="h-section h-section--neutral" id="partenaires" aria-label="Partenaires et références">
    <div class="h-container">
        <div class="h-section-head h-section-head--center reveal">
            <p class="h-kicker">Partenaires & références</p>
            <h2 class="h-display">Un réseau qui ouvre des portes</h2>
        </div>

        <div class="h-partners reveal reveal-delay-1">
            @php
            $partners = [
                ['name' => 'Banque Mondiale', 'abbr' => 'WB'],
                ['name' => 'Afreximbank', 'abbr' => 'AFRI'],
                ['name' => 'IFC', 'abbr' => 'IFC'],
                ['name' => 'BDEAC', 'abbr' => 'BDEAC'],
                ['name' => 'Société Générale', 'abbr' => 'SG'],
                ['name' => 'BGFI Bank', 'abbr' => 'BGFI'],
                ['name' => 'TotalEnergies', 'abbr' => 'TTE'],
                ['name' => 'Orange Africa', 'abbr' => 'OA'],
            ];
            @endphp

            @foreach($partners as $p)
            <div class="h-partner">
                <span class="h-partner__abbr">{{ $p['abbr'] }}</span>
                <span class="h-partner__name">{{ $p['name'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     9. ÉQUIPE
═══════════════════════════════════════════ --}}
<section class="h-section h-section--light" id="equipe" aria-label="Notre équipe">
    <div class="h-container">
        <div class="h-section-head reveal">
            <p class="h-kicker">L'équipe</p>
            <h2 class="h-display">Finance, terrain, exécution</h2>
        </div>

        <div class="h-team">
            @php
            $members = [
                ['name' => 'Loïc Mackosso', 'role' => 'Fondateur & Directeur Général', 'bio' => 'Expert en structuration financière et développement stratégique en Afrique centrale. Fort d\'un parcours international alliant finance et conseil.', 'photo' => 'team-photo.jpg'],
                ['name' => 'Régis Matondo', 'role' => 'Directeur des Investissements', 'bio' => 'Spécialiste de la levée de fonds et de l\'intelligence économique. Accompagne les projets d\'infrastructures et d\'agrobusiness depuis plus de 10 ans.', 'photo' => 'team-photo.jpg'],
                ['name' => 'Expert Associé', 'role' => 'Conseil & Relations institutionnelles', 'bio' => 'Réseau institutionnel panafricain, expertise en partenariats public-privé et structuration de projets à impact.', 'photo' => 'team-member3.jpg'],
            ];
            @endphp

            @foreach($members as $i => $m)
            <div class="h-team-card reveal reveal-delay-{{ $i + 1 }}">
                <div class="h-team-card__photo">
                    <img src="{{ asset('images/' . $m['photo']) }}" alt="{{ $m['name'] }}" loading="lazy">
                </div>
                <div class="h-team-card__body">
                    <strong class="h-team-card__name">{{ $m['name'] }}</strong>
                    <span class="h-team-card__role">{{ $m['role'] }}</span>
                    <p class="h-team-card__bio">{{ $m['bio'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <div class="h-team__cta reveal">
            <a href="{{ route('team') }}" class="h-btn h-btn--primary">
                Voir toute l'équipe
                <svg viewBox="0 0 12 13" fill="none"><path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     10. CARRIÈRES
═══════════════════════════════════════════ --}}
<section class="h-section h-section--dark" id="carrieres" aria-label="Rejoindre ARIES">
    <div class="h-container">
        <div class="h-careers">
            <div class="h-careers__content reveal">
                <p class="h-kicker h-kicker--gold">Carrières</p>
                <h2 class="h-display h-display--light">
                    Rejoignez une équipe engagée dans la transformation de l'Afrique
                </h2>
                <p class="h-careers__text">
                    Nous recherchons des talents ambitieux, rigoureux et passionnés par les enjeux économiques et stratégiques du continent africain.
                </p>
                <div class="h-careers__ctas reveal reveal-delay-1">
                    <a href="{{ route('contact') }}" class="h-btn h-btn--primary">
                        Candidature spontanée
                        <svg viewBox="0 0 12 13" fill="none"><path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/></svg>
                    </a>
                    <a href="{{ route('contact') }}" class="h-btn h-btn--ghost">
                        Voir les opportunités
                    </a>
                </div>
            </div>
            <div class="h-careers__visual reveal-right">
                <img src="{{ asset('images/team-meeting.jpg') }}" alt="Équipe ARIES en réunion stratégique" loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     11. ACTUALITÉS / PUBLICATIONS
═══════════════════════════════════════════ --}}
<section class="h-section h-section--light" id="publications" aria-label="Actualités et analyses">
    <div class="h-container">
        <div class="h-strip-head reveal">
            <div>
                <p class="h-kicker">Analyses & insights</p>
                <h2 class="h-display">Dernières publications</h2>
            </div>
            <a href="{{ route('publications') }}" class="h-mini-link">Voir tout ↗</a>
        </div>

        <div class="h-articles">
            @php
            $articles = [
                ['tag' => 'Analyse', 'title' => "L'Afrique centrale, nouveau hub d'investissement", 'desc' => "Lecture des dynamiques d'investissement et des opportunités qui structurent la sous-région.", 'date' => 'Mars 2025', 'image' => 'sector-infra.jpg'],
                ['tag' => 'Perspectives', 'title' => 'Financement des infrastructures : nouveaux équilibres', 'desc' => 'Comment mobiliser dette, capital patient et partenaires institutionnels sur les projets structurants.', 'date' => 'Fév. 2025', 'image' => 'hero-bridge.jpg'],
                ['tag' => 'Secteurs', 'title' => 'Agrobusiness : transformer le potentiel en projets bancables', 'desc' => "Des chaînes de valeur à la structuration financière, les leviers concrets pour passer à l'exécution.", 'date' => 'Jan. 2025', 'image' => 'sector-agro.jpg'],
            ];
            @endphp

            @foreach($articles as $i => $a)
            <a href="{{ route('publications') }}" class="h-article reveal reveal-delay-{{ $i + 1 }}">
                <div class="h-article__media">
                    <img src="{{ asset('images/' . $a['image']) }}" alt="{{ $a['title'] }}" loading="lazy">
                    <span class="h-article__tag">{{ $a['tag'] }}</span>
                </div>
                <div class="h-article__body">
                    <span class="h-article__date">{{ $a['date'] }}</span>
                    <h3>{{ $a['title'] }}</h3>
                    <p>{{ $a['desc'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     12. CONTACT
═══════════════════════════════════════════ --}}
<section class="h-section h-section--neutral" id="contact" aria-label="Nous contacter">
    <div class="h-container">
        <div class="h-contact">
            <div class="h-contact__info reveal-left">
                <p class="h-kicker">Contact</p>
                <h2 class="h-display">Parlons de<br>votre projet</h2>
                <p class="h-prose">
                    Investisseur, entrepreneur ou institution — prenons le temps d'un échange pour cadrer les bonnes options ensemble.
                </p>

                <div class="h-contact__details">
                    <div class="h-contact__item">
                        <span class="h-contact__icon">✉</span>
                        <a href="mailto:contact@aries.loicmackosso.com">contact@aries.loicmackosso.com</a>
                    </div>
                    <div class="h-contact__item">
                        <span class="h-contact__icon">☎</span>
                        <a href="tel:+242000000000">+242 06 000 00 00</a>
                    </div>
                    <div class="h-contact__item">
                        <span class="h-contact__icon">◎</span>
                        <span>Brazzaville, République du Congo</span>
                    </div>
                </div>
            </div>

            <div class="h-contact__form reveal-right">
                <form action="{{ route('contact.send') }}" method="POST" class="h-form">
                    @csrf
                    <div class="h-form__row">
                        <div class="h-form__field">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" name="name" placeholder="Jean Dupont" required>
                        </div>
                        <div class="h-form__field">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="jean@entreprise.com" required>
                        </div>
                    </div>
                    <div class="h-form__field">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" placeholder="Structuration d'un projet d'infrastructure">
                    </div>
                    <div class="h-form__field">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Décrivez votre projet ou votre demande…" required></textarea>
                    </div>
                    <button type="submit" class="h-btn h-btn--primary h-btn--full">
                        Envoyer le message
                        <svg viewBox="0 0 12 13" fill="none"><path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

{{-- ═══════════════════════════════════════════
     13. CTA FINAL
═══════════════════════════════════════════ --}}
<section class="h-cta-final" aria-label="Appel à l'action final">
    <div class="h-cta-final__media">
        <img src="{{ asset('images/hero-building.jpg') }}" alt="Skyline africain" loading="lazy">
        <div class="h-cta-final__overlay"></div>
    </div>
    <div class="h-cta-final__content reveal">
        <h2 class="h-cta-final__title">
            Donnez une nouvelle dimension<br>à vos investissements
        </h2>
        <p class="h-cta-final__sub">
            ARIES vous accompagne de la stratégie à l'exécution.
        </p>
        <a href="{{ route('contact') }}" class="h-btn h-btn--primary h-btn--lg">
            Nous contacter
            <svg viewBox="0 0 12 13" fill="none"><path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/></svg>
        </a>
    </div>
</section>

@endsection

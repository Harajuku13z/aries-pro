@extends('layouts.app')

@section('title', 'Contact — ARIES Investissements')
@section('description', "Contactez ARIES Investissements à Brazzaville ou Washington. Discutons de votre projet d'investissement en Afrique.")

@section('content')
<section class="page-hero" aria-label="Contact ARIES">
    <div class="page-hero__media">
        <img src="{{ asset('images/hero-bridge.jpg') }}" alt="Prendre contact avec ARIES Investissements" loading="eager">
        <div class="page-hero__overlay"></div>
    </div>

    <div class="page-hero__inner">
        <div class="page-hero__content">
            <p class="page-hero__kicker reveal">Prenons contact</p>
            <h1 class="page-hero__title reveal reveal-delay-1">Contact</h1>
            <p class="page-hero__sub reveal reveal-delay-2">
                Investisseur, institution, entrepreneur ou dirigeant : échangeons sur votre projet
                dans un cadre confidentiel et orienté exécution.
            </p>
            <div class="page-hero__pills reveal reveal-delay-3">
                <span>Réponse sous 48h</span>
                <span>Confidentialité</span>
                <span>Conseil sans engagement</span>
            </div>
        </div>
    </div>
</section>

<section class="page-section page-section--soft">
    <div class="h-container">
        <div class="page-contact-grid">
            <div class="page-contact-stack">
                <div class="page-intro reveal" style="margin-bottom: 0;">
                    <p class="h-kicker">Nos coordonnées</p>
                    <h2 class="page-title">Parlons de votre projet</h2>
                    <p class="page-text">
                        Nous sommes disponibles pour une première discussion confidentielle afin de cadrer vos objectifs,
                        vos contraintes et la meilleure manière d'avancer.
                    </p>
                </div>

                <div class="page-contact-card reveal reveal-delay-1">
                    <p class="page-contact-card__label">Bureau de Brazzaville</p>
                    <div class="page-contact-card__value">
                        ARIES Investissements<br>
                        9ème niveau, Immeuble ARC<br>
                        Brazzaville, République du Congo<br><br>
                        <a href="tel:+242069799885">+242 06 97 99 88 5</a>
                    </div>
                </div>

                <div class="page-contact-card reveal reveal-delay-2">
                    <p class="page-contact-card__label">Bureau de Washington</p>
                    <div class="page-contact-card__value">
                        <a href="tel:+16463891437">+1 646 389 14 37</a>
                    </div>
                </div>

                <div class="page-contact-card reveal reveal-delay-3">
                    <p class="page-contact-card__label">Email</p>
                    <div class="page-contact-card__value">
                        <a href="mailto:aries@aries-investissements.com">aries@aries-investissements.com</a>
                    </div>
                </div>
            </div>

            <div class="page-form-shell reveal-right">
                @if(session('success'))
                    <div class="page-alert page-alert--success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="page-alert page-alert--error">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="page-intro" style="margin-bottom: 1.25rem;">
                    <p class="h-kicker">Formulaire</p>
                    <h2 class="page-title">Envoyez-nous un message</h2>
                    <p class="page-text">
                        Décrivez votre besoin, votre secteur ou le type d'accompagnement recherché.
                    </p>
                </div>

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <div class="page-form-grid">
                        <div class="page-form-field">
                            <label for="name">Nom complet *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Votre nom" required>
                            @error('name')
                                <p class="page-form-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="page-form-field">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="votre@email.com" required>
                            @error('email')
                                <p class="page-form-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="page-form-field">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+33 6 00 00 00 00">
                        </div>

                        <div class="page-form-field">
                            <label for="subject">Objet *</label>
                            <select id="subject" name="subject" required>
                                <option value="" disabled {{ old('subject') ? '' : 'selected' }}>Sélectionner un objet</option>
                                @foreach([
                                    'Conseil stratégique & financier',
                                    'Levée de fonds & financement',
                                    'Intelligence économique',
                                    'Structuration d\'investissement',
                                    'Partenariat',
                                    'Autre demande',
                                ] as $option)
                                    <option value="{{ $option }}" {{ old('subject') === $option ? 'selected' : '' }}>{{ $option }}</option>
                                @endforeach
                            </select>
                            @error('subject')
                                <p class="page-form-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="page-form-field page-form-field--full">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" placeholder="Décrivez votre projet ou votre demande..." required>{{ old('message') }}</textarea>
                            @error('message')
                                <p class="page-form-error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="page-form-meta">
                        <p class="page-text" style="font-size: .85rem; max-width: 32rem;">
                            * Champs obligatoires. Toutes les informations partagées sont traitées avec la plus stricte confidentialité.
                        </p>

                        <button type="submit" class="h-btn h-btn--dark">
                            Envoyer le message
                            <svg viewBox="0 0 12 13" fill="none" aria-hidden="true">
                                <path d="M1.78 3.04h5.85L0 10.68l1.81 1.81 7.63-7.63v5.85H12V.49H1.78v2.55z" fill="currentColor"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

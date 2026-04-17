@extends('layouts.app')

@section('title', 'Contact — ARIES Investissements')
@section('description', 'Contactez ARIES Investissements à Brazzaville ou Washington. Discutons de votre projet d\'investissement en Afrique.')

@section('content')

{{-- Page Hero --}}
<section class="page-hero">
    <div class="hero-grid-pattern opacity-40"></div>
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20 relative z-10">
        <div class="reveal flex items-center gap-3 mb-4">
            <span class="section-label">Prenons contact</span>
            <span class="gold-line"></span>
        </div>
        <h1 class="font-display text-white reveal reveal-delay-1" style="font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500; line-height: 1.1;">
            Contact
        </h1>
    </div>
</section>

{{-- Contact Section --}}
<section class="py-28 bg-[#FAFAF8]">
    <div class="max-w-[1440px] mx-auto px-6 lg:px-12 xl:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 lg:gap-20">

            {{-- Contact info --}}
            <div class="lg:col-span-2">
                <div class="reveal flex items-center gap-3 mb-6">
                    <span class="section-label">Nos coordonnées</span>
                    <span class="gold-line"></span>
                </div>
                <h2 class="section-title mb-8 reveal reveal-delay-1">
                    Parlons de<br>votre projet
                </h2>
                <p class="text-[#4A5568] leading-relaxed mb-10 reveal reveal-delay-2">
                    Que vous soyez investisseur, entrepreneur ou institution financière, nous sommes à votre disposition pour une première conversation confidentielle sur vos ambitions en Afrique.
                </p>

                <div class="space-y-6 reveal reveal-delay-3">

                    {{-- Brazzaville --}}
                    <div class="group">
                        <p class="text-xs tracking-widest uppercase text-[#C8A55A] mb-2 font-medium">Bureau de Brazzaville</p>
                        <div class="space-y-1">
                            <p class="text-[#0B1D3A] font-medium text-sm">ARIES Investissements</p>
                            <p class="text-[#6B7280] text-sm">9ème niveau, Immeuble ARC</p>
                            <p class="text-[#6B7280] text-sm">Brazzaville, République du Congo</p>
                            <a href="tel:+242069799885" class="text-[#0B1D3A] text-sm font-medium hover:text-[#C8A55A] transition-colors duration-300 block mt-2">
                                +242 06 97 99 88 5
                            </a>
                        </div>
                    </div>

                    <div class="gold-line-full"></div>

                    {{-- Washington --}}
                    <div class="group">
                        <p class="text-xs tracking-widest uppercase text-[#C8A55A] mb-2 font-medium">Bureau de Washington</p>
                        <div class="space-y-1">
                            <a href="tel:+16463891437" class="text-[#0B1D3A] text-sm font-medium hover:text-[#C8A55A] transition-colors duration-300 block">
                                +1 646 389 14 37
                            </a>
                        </div>
                    </div>

                    <div class="gold-line-full"></div>

                    {{-- Email --}}
                    <div>
                        <p class="text-xs tracking-widest uppercase text-[#C8A55A] mb-2 font-medium">Email</p>
                        <a href="mailto:aries@aries-investissements.com" class="text-[#0B1D3A] text-sm font-medium hover:text-[#C8A55A] transition-colors duration-300">
                            aries@aries-investissements.com
                        </a>
                    </div>

                </div>

                {{-- Trust badges --}}
                <div class="mt-12 pt-8 border-t border-[rgba(11,29,58,0.08)] reveal reveal-delay-4">
                    <div class="flex flex-wrap gap-4">
                        @foreach(['Confidentialité garantie', 'Réponse sous 48h', 'Conseil sans engagement'] as $badge)
                        <span class="text-[#6B7280] text-xs flex items-center gap-1.5">
                            <span class="w-1 h-1 rounded-full bg-[#C8A55A]"></span>
                            {{ $badge }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Contact form --}}
            <div class="lg:col-span-3 reveal-right">

                @if(session('success'))
                <div class="bg-[#0B1D3A] border border-[#C8A55A] p-5 mb-8">
                    <p class="text-[#C8A55A] text-sm flex items-center gap-3">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ session('success') }}
                    </p>
                </div>
                @endif

                @if(session('error'))
                <div class="bg-red-50 border border-red-200 p-5 mb-8">
                    <p class="text-red-700 text-sm">{{ session('error') }}</p>
                </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-xs font-semibold tracking-widest uppercase text-[#0B1D3A] mb-2">Nom complet *</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                placeholder="Votre nom"
                                class="form-field @error('name') border-red-400 @enderror"
                                required
                            >
                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-semibold tracking-widest uppercase text-[#0B1D3A] mb-2">Email *</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="votre@email.com"
                                class="form-field @error('email') border-red-400 @enderror"
                                required
                            >
                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-xs font-semibold tracking-widest uppercase text-[#0B1D3A] mb-2">Téléphone</label>
                            <input
                                type="tel"
                                id="phone"
                                name="phone"
                                value="{{ old('phone') }}"
                                placeholder="+33 6 00 00 00 00"
                                class="form-field"
                            >
                        </div>
                        <div>
                            <label for="subject" class="block text-xs font-semibold tracking-widest uppercase text-[#0B1D3A] mb-2">Objet *</label>
                            <select
                                id="subject"
                                name="subject"
                                class="form-field @error('subject') border-red-400 @enderror"
                                required
                            >
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
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-xs font-semibold tracking-widest uppercase text-[#0B1D3A] mb-2">Message *</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="6"
                            placeholder="Décrivez votre projet ou votre demande..."
                            class="form-field resize-none @error('message') border-red-400 @enderror"
                            required
                        >{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <p class="text-[#8A8F9A] text-xs">* Champs obligatoires. Toutes les informations restent strictement confidentielles.</p>
                        <button type="submit" class="btn-dark flex-shrink-0">
                            Envoyer le message
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection

<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', 'ARIES Investissements — Conseil financier & Investissement en Afrique')</title>
    <meta name="description" content="@yield('description', 'ARIES Investissements accompagne investisseurs et porteurs de projets en Afrique. Conseil stratégique, levée de fonds, intelligence économique depuis Brazzaville.')">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'ARIES Investissements')">
    <meta property="og:description" content="@yield('description', 'ARIES Investissements — Conseil financier & Investissement en Afrique')">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="bg-[#FAFAF8]">

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')
</body>
</html>

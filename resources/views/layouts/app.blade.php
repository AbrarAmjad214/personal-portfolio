@php
    $name = config('portfolio.name');
    // @section('x', '...') already escapes its value; decode so {{ }} below doesn't escape it twice.
    $title = html_entity_decode(trim($__env->yieldContent('title')));
    $fullTitle = $title ? "$title | $name" : "Laravel & WordPress Developer in Lahore, Pakistan | $name";
    $description = html_entity_decode(trim($__env->yieldContent('description'))) ?:'Freelance Laravel & WordPress developer in Lahore building fast, mobile-friendly websites and web apps for businesses in the UAE, Pakistan and worldwide. Free quote on WhatsApp.';
    $ogImage = asset(trim($__env->yieldContent('og_image')) ?: config('portfolio.og_image', 'assets/img/og-image.jpg'));
    $robots = trim($__env->yieldContent('robots')) ?: 'index, follow, max-image-preview:large';

    $nav = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Portfolio', 'route' => 'portfolio'],
        ['label' => 'Contact', 'route' => 'contact'],
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.documentElement.classList.add('js')</script>

    <title>{{ $fullTitle }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="author" content="{{ $name }}">
    <meta name="robots" content="{{ $robots }}">
    <meta name="theme-color" content="#06080C">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="{{ config('portfolio.brand') }}">
    <meta property="og:title" content="{{ $fullTitle }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $fullTitle }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'], 'dist')

    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            '@id' => url('/') . '#person',
            'name' => $name,
            'jobTitle' => config('portfolio.role'),
            'knowsAbout' => ['Laravel', 'PHP', 'WordPress', 'React', 'Web development', 'Technical SEO'],
            'url' => url('/'),
            'image' => asset(config('portfolio.photo')),
            'email' => 'mailto:' . config('portfolio.contact.email'),
            'telephone' => config('portfolio.contact.phone_href'),
            'address' => ['@type' => 'PostalAddress', 'addressLocality' => 'Lahore', 'addressCountry' => 'PK'],
            'sameAs' => array_values(config('portfolio.socials')),
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <script type="application/ld+json">
        {!! json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            '@id' => url('/') . '#website',
            'name' => config('portfolio.brand'),
            'url' => url('/'),
            'publisher' => ['@id' => url('/') . '#person'],
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    @if ($gaId = config('portfolio.analytics_id'))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $gaId }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', @json($gaId));
        </script>
    @endif
</head>
<body class="min-h-screen">
    <a href="#main" class="sr-only z-[100] rounded-full bg-white px-4 py-2 text-ink-950 focus:not-sr-only focus:fixed focus:left-4 focus:top-4">Skip to content</a>

    {{-- Header --}}
    <header class="site-header fixed inset-x-0 top-0 z-50 border-b border-transparent" data-header>
        <div class="container flex h-[72px] items-center justify-between gap-6">
            <a href="{{ route('home') }}" class="font-display text-2xl font-bold tracking-tight" aria-label="{{ config('portfolio.brand') }} — home">
                <span class="text-brand-400">Rabrar</span><span class="text-white">.tech</span>
            </a>

            <nav class="hidden items-center gap-1 lg:flex" aria-label="Main">
                @foreach ($nav as $item)
                    <a href="{{ route($item['route']) }}" class="nav-link" @if (request()->routeIs($item['route'])) aria-current="page" @endif>{{ $item['label'] }}</a>
                @endforeach
            </nav>

            <div class="flex items-center gap-2">
                <x-whatsapp location="header" class="btn-whatsapp hidden !px-5 !py-2.5 sm:inline-flex">
                    <x-icon name="whatsapp" class="h-[18px] w-[18px]" /> Get a free quote
                </x-whatsapp>
                <button type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/15 text-white lg:hidden" data-menu-toggle aria-expanded="false" aria-controls="mobile-menu" aria-label="Open menu">
                    <x-icon name="menu" />
                </button>
            </div>
        </div>

        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden h-[calc(100dvh-72px)] overflow-y-auto border-t border-white/10 bg-ink-950 lg:hidden">
            <nav class="container flex flex-col gap-1 py-6" aria-label="Mobile">
                @foreach ($nav as $item)
                    <a href="{{ route($item['route']) }}" class="rounded-2xl px-4 py-4 font-display text-2xl font-semibold {{ request()->routeIs($item['route']) ? 'bg-white/[0.06] text-white' : 'text-muted' }}">{{ $item['label'] }}</a>
                @endforeach
                <x-whatsapp location="mobile_menu" class="btn-whatsapp mt-6 w-full">
                    <x-icon name="whatsapp" /> Chat on WhatsApp
                </x-whatsapp>
                <a href="mailto:{{ config('portfolio.contact.email') }}" class="btn-ghost w-full">
                    <x-icon name="mail" /> {{ config('portfolio.contact.email') }}
                </a>
            </nav>
        </div>
    </header>

    <main id="main">
        @yield('content')

        @unless (View::hasSection('hide_cta'))
            @include('partials.cta')
        @endunless
    </main>

    {{-- Footer --}}
    <footer class="border-t border-white/[0.08] bg-ink-950 pb-20 sm:pb-0">
        <div class="container grid gap-12 py-16 md:grid-cols-12">
            <div class="md:col-span-4">
                <a href="{{ route('home') }}" class="font-display text-2xl font-bold">
                    <span class="text-brand-400">Rabrar</span><span class="text-white">.tech</span>
                </a>
                <p class="mt-4 max-w-sm leading-relaxed text-muted">
                    {{ $name }} — {{ strtolower(config('portfolio.role')) }} helping businesses get fast, modern websites that bring in enquiries.
                </p>
                <div class="mt-6 flex gap-3">
                    <a href="{{ config('portfolio.socials.github') }}" target="_blank" rel="noopener" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 text-muted transition hover:border-white/30 hover:text-white" aria-label="GitHub"><x-icon name="github" /></a>
                    <a href="{{ config('portfolio.socials.linkedin') }}" target="_blank" rel="noopener" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/10 text-muted transition hover:border-white/30 hover:text-white" aria-label="LinkedIn"><x-icon name="linkedin" /></a>
                </div>
            </div>

            <div class="md:col-span-2">
                <h2 class="text-sm font-semibold uppercase tracking-[0.14em] text-white">Pages</h2>
                <ul class="mt-4 space-y-3">
                    @foreach ($nav as $item)
                        <li><a href="{{ route($item['route']) }}" class="text-muted transition hover:text-white">{{ $item['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="md:col-span-3">
                <h2 class="text-sm font-semibold uppercase tracking-[0.14em] text-white">Services</h2>
                <ul class="mt-4 space-y-3">
                    @foreach (config('portfolio.services') as $service)
                        <li><a href="{{ route('services.show', $service['slug']) }}" class="text-muted transition hover:text-white">{{ $service['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="md:col-span-3">
                <h2 class="text-sm font-semibold uppercase tracking-[0.14em] text-white">Get in touch</h2>
                <ul class="mt-4 space-y-3 text-muted">
                    <li>
                        <x-whatsapp location="footer" class="inline-flex items-center gap-3 transition hover:text-white">
                            <x-icon name="whatsapp" class="h-[18px] w-[18px] text-whatsapp" /> WhatsApp: {{ config('portfolio.contact.phone') }}
                        </x-whatsapp>
                    </li>
                    <li>
                        <a href="mailto:{{ config('portfolio.contact.email') }}" class="inline-flex items-center gap-3 transition hover:text-white" data-track="email_click" data-track-location="footer">
                            <x-icon name="mail" class="h-[18px] w-[18px]" /> {{ config('portfolio.contact.email') }}
                        </a>
                    </li>
                    <li class="inline-flex items-center gap-3"><x-icon name="map-pin" class="h-[18px] w-[18px]" /> {{ config('portfolio.location') }}</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-white/[0.06]">
            <div class="container flex flex-col justify-between gap-2 py-6 text-sm text-muted sm:flex-row">
                <p>&copy; {{ date('Y') }} {{ $name }}. All rights reserved.</p>
                <p>Built with Laravel, Three.js &amp; Tailwind CSS.</p>
            </div>
        </div>
    </footer>

    {{-- Floating WhatsApp button --}}
    <x-whatsapp location="floating" class="floating-cta fixed bottom-6 right-6 z-40 hidden h-14 w-14 items-center justify-center rounded-full bg-whatsapp text-ink-950 shadow-xl shadow-black/40 transition hover:bg-whatsapp-dark sm:inline-flex" aria-label="Chat on WhatsApp" data-floating-cta>
        <x-icon name="whatsapp" class="h-7 w-7" />
    </x-whatsapp>

    {{-- Sticky call-to-action bar on phones --}}
    <div class="floating-cta fixed inset-x-0 bottom-0 z-40 flex gap-2 border-t border-white/10 bg-ink-950/90 p-3 backdrop-blur sm:hidden" data-floating-cta>
        <x-whatsapp location="mobile_bar" class="btn-whatsapp flex-1 !py-3"><x-icon name="whatsapp" /> WhatsApp</x-whatsapp>
        <a href="tel:{{ config('portfolio.contact.phone_href') }}" class="btn-ghost !py-3" data-track="phone_click" data-track-location="mobile_bar"><x-icon name="phone" /> Call</a>
    </div>
</body>
</html>
